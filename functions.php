<?php

show_admin_bar( false );

function haute_maintenance() {
	if( ! is_user_logged_in() && ! is_page( '11' ) ) {
		wp_redirect( get_the_permalink( '11' ));
	}elseif( get_current_user_id() > 1 && ! is_page( '11' ) ) {
		wp_redirect( get_the_permalink( '11' ));
	}
}
add_action( 'template_redirect', 'haute_maintenance' );


// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1110;

// Register Theme Features
function haute_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 150,
		'single_image_width'    => 300,
    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
	) );

  // Add support for two custom navigation menus.
  register_nav_menus( array(
      'primary'   => __( 'Primary Menu', 'haute' ),
      'footer-links' => __('Footer Links', 'haute' )
  ) );

	// Register Sidebars
	function haute_sidebars() {

		$args = array(
			'id'            => 'sidebbar',
			'class'         => 'sidebar',
			'name'          => __( 'Sidebar', 'haute' ),
		);
		register_sidebar( $args );

	}
	add_action( 'widgets_init', 'haute_sidebars' );
}
add_action( 'after_setup_theme', 'haute_theme_features' );


// Register Custom Navigation Walker
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';






function add_theme_scripts() {
	// wp_dequeue_style('woocommerce-layout');
	// wp_dequeue_style('woocommerce-general');

  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.9/css/all.css', array(), '5.0.6', 'all' );
  wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css', array(), '4.0.0', 'all' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,900|Roboto+Condensed:700|Open+Sans:300,400,700', array(), null, 'all' );

  wp_enqueue_style( 'haute', get_template_directory_uri() . '/assets/css/haute.css', array(), uniqid(), 'all');

  wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
  wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'popper' ), '4.0.0', true );
  // wp_enqueue_script( 'jquery.easing', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array( 'jquery' ), '1.4.1', true );

  // wp_enqueue_script( 'jquery.countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', array ( 'jquery' ), '2.2.0', true);
  wp_enqueue_script( 'haute', get_template_directory_uri() . '/assets/js/haute.js', array ( 'jquery' ), uniqid(), true);

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
