<?php



//Função que inclue os scripts no header pagina.
function chevrolet_load_styles(){

  wp_register_style('chevrolet_bootstrap_style', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
  wp_register_style('chevrolet-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
  wp_register_style('chevrolet-style-mobile', get_template_directory_uri() . '/css/style-mobile.css', array(), '1.0.0', 'all and (max-width: 768px)');
  wp_register_style('chevrolet-slick-style', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.css', array(), '1.0.0', 'all');
  wp_register_style('chevrolet-slick-style-theme', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick-theme.css', array(), '1.0.0', 'all');
  wp_register_style('chevrolet-fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', array(), '3.3.7', 'all');

  wp_enqueue_style('chevrolet_bootstrap_style');
  wp_enqueue_style('chevrolet-slick-style');
  wp_enqueue_style('chevrolet-slick-style-theme');
  wp_enqueue_style('chevrolet-style');
  wp_enqueue_style('chevrolet-style-mobile');
  wp_enqueue_style('chevrolet-fontawesome');

}
function chevrolet_load_scripts(){

  $script  = '<script>';
  $script .= 'var ajaxurl = "' . admin_url('admin-ajax.php') . '";';
  $script .= '</script>';
  echo $script; 
  
  //inclusao scripts bootstrap
  wp_register_script('chevrolet_bootstrap_script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true);
  wp_enqueue_script('chevrolet_bootstrap_script');

  //Jquery
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://code.jquery.com/jquery-2.2.0.min.js', false, '2.2.0', true);
  wp_enqueue_script('jquery');

  // Slick
  wp_register_script('chevrolet-slick', get_template_directory_uri() . '/js/slick-1.8.1/slick/slick.min.js', array(), '1.0.0', 'all');
  wp_enqueue_script('chevrolet-slick');

  // scripts
  wp_register_script('chevrolet-script', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', 'all');
  wp_enqueue_script('chevrolet-script');

  wp_register_script('chevrolet-ajax', get_template_directory_uri() . '/js/form-ajax.js', array(), '1.0.0', 'all');
  wp_enqueue_script('chevrolet-ajax');  

}
add_action('wp_enqueue_scripts','chevrolet_load_styles');
add_action('wp_enqueue_scripts','chevrolet_load_scripts');
