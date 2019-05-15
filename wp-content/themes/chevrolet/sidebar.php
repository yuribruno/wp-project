<?php
/**
 * The sidebar containing the main widget area
 */
?>
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-bottom: 30px;">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="banner-simulador">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 30px 0;">
					<div class="row">
						<div class="simulador-tile">
							<p>Realize o sonho do seu</p>
							<p style="font-size: 25px;">CHEVROLET 0Km</p>
						</div>
						<img src="<?php echo get_template_directory_uri(); ?>/img/simulacao.jpg" title="Simulador Chevrolet" style="width: 100%; height: auto;">
						<button type="button" class="btn-simulador" data-toggle="modal" data-target="#simulador">SIMULE AGORA</button>
					</div>							
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="sidebar-redes">
				<span>NOSSAS REDES SOCIAIS</span>
				<div class="sidebar-facebook" style="margin: 30px 0;">
					<div class="fb-page" data-href="https://www.facebook.com/consorciochevroletonlineoficial/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/consorciochevroletonlineoficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/consorciochevroletonlineoficial/">Consórcio Chevrolet Online</a></blockquote></div>
				</div>
				<div class="sidebar-instagram" style="margin: 30px 0;">
					<?php echo do_shortcode( '[instagram-feed]' ); ?>
				</div>
				<div class="sidebar-lastposts">
					<span>Últimos Posts</span>
					<ul>
						<?php
							$args = array( 'numberposts' => '5' );
							$recent_posts = wp_get_recent_posts( $args );
							foreach( $recent_posts as $recent ){
								echo '<li>';
								echo '<h3><a href="' . get_the_permalink() . '" >' . get_the_title() . '</a></h3>';
								echo '<time datetime="' . get_the_date('c') . '" itemprop="datePublished">'.get_the_date() . '</time>'; 
								echo '</li>';
							}
							wp_reset_query();
						?>
					</ul>
				</div>
				<div class="sidebar-newsletter">
					<!-- Begin Mailchimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					<form action="https://gmail.us20.list-manage.com/subscribe/post?u=6e728f223d8474a08fa4fd985&amp;id=ae89674d62" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					    <div id="mc_embed_signup_scroll">
						<h2 style="color: #4A4D54;  font-family: Lato;  font-size: 18px;  font-weight: 900;  line-height: 28px; text-align: center;"><i class="fas fa-envelope-open-text" style="color: #DDBE6C;"></i> Assine Nossa Newsletter</h2>
					<!-- <div class="indicates-required"><span class="asterisk">*</span> indicates required</div> -->
					<div class="mc-field-group">
						<!-- <label for="mce-FNAME">Nome </label> -->
						<input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="Nome">
					</div>
					<div class="mc-field-group">
						<!-- <label for="mce-EMAIL">Email  <span class="asterisk">*</span> -->
					</label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6e728f223d8474a08fa4fd985_ae89674d62" tabindex="-1" value=""></div>
					    <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button" style="background-color: #DDBE6C;  border-radius: 10px;  width: 180px;  height: 55px; color: #FFFFFF;  font-family: Lato;  font-size: 22px;  font-weight: 900;  line-height: 28px; margin-left: auto; display: block;"></div>
					    </div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				</div>
			</div>
		</div>		
	</div>
</div>
