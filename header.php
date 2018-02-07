<!DOCTYPE html>
<html>
<head>
  <title>
    <?php $title = wp_title('',false); ?>
    <?php if ( is_front_page() ) { _e("Главная"); } else { echo $title; } ?> | <?php  bloginfo('name'); ?>
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="yandex-verification" content="a30d72f24b0ef0ac" />
  <link rel="icon" type="image/svg+xml" href="<?php bloginfo('template_url'); ?>/img/logo.svg">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/img/logo.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap-grid.min.css">
  <!--link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css"-->
  <?php wp_head(); ?>
</head>
<body>
<header>
  <div class="image-head">
    <div class="logo">
	  <a href="<?php _e( home_url() ); ?>"></a> 
	</div>
  </div>
  <nav class="nav">
    <a class="btn-menu"><img class="mobile-logo" src="<?php bloginfo('template_url') ?>/img/logo.svg"><i class="fas fa-bars"></i></a>
    <div class="menu">
      <div class="right-left-menu">
        <?php wp_nav_menu( array(
          'menu' => 'Left top menu',
          'container' => false,
          'menu_class' => 'left',
          ) ); 
        ?>
        <?php wp_nav_menu( array(
          'menu' => 'Right top menu',
          'container' => false,
          'menu_class' => 'right',
          ) ); 
        ?>
      </div>
    </div>
  </nav>
  <script src="<?php bloginfo('template_url'); ?>/js/navbar.js"></script>
  <div class="hello">
    <h1>
    <?php $title = wp_title('',false); ?>
    <?php 
	  if ( $title == "" ) {
	    echo "Добро пожаловать на IT-Notes!";
	  } elseif ( is_single() ) {
	  	_e( "<style> .hello { display: none; } header { margin-bottom: 70px; } </style>" );
	  } else {
		echo $title;
	  } 
    ?>
    </h1>
  </div>
</header>