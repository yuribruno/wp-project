<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package yuriTheme
 */

?>
<!DOCTYPE html>
<html>
<head <?php language_attributes(); ?>>
	<title><?php wp_title(''); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
	<!-- FaceBook Widget -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=400526450535583&autoLogAppEvents=1"></script>

	<header>
		<div class="container-fluid header-fixed">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
							<a href="<?php get_site_url(); ?>">
							<img class="brand" src="<?=get_template_directory_uri()?>/img/logo.jpg" alt="Consórcio Chevrolet">
							<h1 style="color: #DDBE6C;font-family: Lato;font-size: 18px;font-weight: 900;line-height: 23px;margin: 0 0 0 130px;position: absolute;">
								BLOG
							</h1>
							</a>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<button type="button" class="btn-default pull-right" data-toggle="modal" data-target="#consultoria">Fale com um consultor</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="row">	
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Educação Financeira</a></li>
						<li class=""><a href="#">CONSÓRCIO AUTOS</a></li>
						<li class=""><a href="#">DICAS</a></li>
					</ul>
					<?php get_custom_search_form(); ?>
				</div>
			</div>
		</div>	
	</nav>
	<div class="container-fluid" style="margin: 30px auto;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner-contact-left">
						<span>ENTRE EM CONTATO</span>
						<p>Atendimento Consórcio Nacional</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 banner-contact-right">
						<span>0800 030 1471</span>
					</div>
				</div>
			</div>
		</div>
	</div>