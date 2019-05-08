<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin: 30px 0;">
	<div class="row">
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_post_thumbnail('thumbnail'); ?>	
		</a>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="margin: 30px 0;">
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