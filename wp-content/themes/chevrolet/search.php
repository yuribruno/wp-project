<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>

<div class="container-fluid post">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="margin: 30px 0;">
					<header class="page-header">
						<h1 class="page-title" style="font-size: 18px"><?php printf( __( 'Buscar para: %s', 'twentyfourteen' ), get_search_query() ); ?></h1>
					</header><!-- .page-header -->
					<?php if ( have_posts() ) : ?>					

					<?php
						// Start the Loop.
					while ( have_posts() ) :
						the_post();
						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );
						endwhile;
					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );
					endif;
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();