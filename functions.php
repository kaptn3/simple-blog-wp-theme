<?php 

add_theme_support('post-thumbnails'); // разрешение на превьюшки

add_action('after_setup_theme', function(){
  register_nav_menus( array(
    'right_header_menu' => 'Right top menu',
    'left_header_menu' => 'Left top menu'
  ) );
});

function load_scripts() {
  wp_enqueue_style ('bootstrap-grid', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap-grid.min.css' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/normalize.css' );
  wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
  wp_deregister_script( 'jquery-core' );
  wp_register_script( 'jquery-core', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
  wp_enqueue_script( 'jquery' );
  
  wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.4/js/all.js', false, null, true); 
  
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

function icon() {
  if ( is_404() ) {
    _e('fa-frown');
  } elseif ( in_category( 'Сервера и администрирование' ) ) {
    _e('fa-microchip');
  } elseif ( in_category( 'Веб-разработка' ) ) {
    if ( has_tag( 'github' ) ) {
	 _e('fab fa-github-alt');
	} else { 
	  _e('far fa-file-code');
	}
  } else {
    _e('fa-laptop');
  }
  //data-fa-mask="fas fa-circle"
}