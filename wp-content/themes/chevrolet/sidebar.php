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
					
				</div>
			</div>
		</div>		
	</div>
</div>
