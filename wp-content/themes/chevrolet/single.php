<?php
/**
 * The Template for displaying all single posts
 */
get_header(); ?>

<div class="container-fluid post">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12" style="margin: 30px 0;">
				<?php
					while ( have_posts() ) :
						the_post();
						?>
						<div class="share">										
							Compartilhar:											
							<?php wcr_share_buttons(); ?>
						</div>
						<?php
						the_content();
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
						endwhile;
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>



<?php
get_footer();