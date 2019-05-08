<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<?php
					if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'template-parts/post/content', get_post_format() );

						endwhile;

					else :

					get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

	

<?php get_footer();
