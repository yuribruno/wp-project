<?php
	get_header();
?>

<!-- Banner last post -->
<div class="container-fluid last-post">
	<div class="row" style="margin-bottom: 30px;">
		<ul class="full-banner">
		<?php
			$args = array( 'numberposts' => '5' );
			$recent_posts = wp_get_recent_posts( $args );
			foreach( $recent_posts as $recent ){ ?>
				<li style="background:url(<?php the_post_thumbnail_url(); ?>) center; background-size: cover !important;" >
					<span style="width: 80%"><?php the_title() ?><span>		
				</li>		
			<?php
			}
			wp_reset_query();
		?>
		</ul>	
	</div>
</div>


<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
  'posts_per_page' => 5,
  'paged' => $paged
);
$custom_query = new WP_Query( $args );
?>
<!--start-->

<div class="container-fluid list-post">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="">
					<?php
						while($custom_query->have_posts()) :
							$custom_query->the_post();
					?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumb" style="margin: 30px 0;">
							<div class="row">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
									<?php the_post_thumbnail('thumbnail'); ?>	
								</a>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 info" style="margin: 30px 0;">
							<div class="">
								<div class="date category">
									<!-- date | category -->
									<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time> | 
									<?php 
									    foreach((get_the_category()) as $category){
									        echo $category->name." ";
									        echo category_description($category);
									    }
								    ?>
								</div>
								<div class="title">
									<h3><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h3>
								</div>
								<div class="share">										
									Compartilhar:											
									<?php wcr_share_buttons(); ?>
								</div>
								<div class="excerpt">
									<?php
									$excerpt = '';
									if (has_excerpt()) {
									    $excerpt = wp_strip_all_tags(the_excerpt_max_charlength(140));
									    echo $excerpt;
									}
									?>
								</div>
								<div class="post-link">
									<a href="<?php the_permalink(); ?>"><i class="fas fa-play-circle" style="color:#FBD67D;"></i> continue lendo</a>
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<hr>
							</div>
						</div>
						<?php endwhile; ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<?php if (function_exists("pagination")) {
								pagination($custom_query->max_num_pages);
							} ?>					
						</div>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php 
	get_footer();
?>