<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

  <header class="header">
    <div class="header__topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul class="header__topbar-socials list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/hautefootwear" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/hautefootwear" target="_blank"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/hautefootwear/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/company/hautefootwear" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 text-center">
            <p><span>Free shipping</span> for all order over $200</p>
          </div>
          <div class="col-md-4 text-right">
            <ul class="header__topbar-nav list-inline">
              <li class="list-inline-item"><a href="#" target="_blank">Login / Register</a></li>
              <li class="list-inline-item"><a href="#" target="_blank"><i class="fas fa-shopping-bag"></i> <span>$0.00</span> </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <nav class="header__navbar navbar navbar-expand-lg bg-white">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="HauteFootwear" /></a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '', 'menu_id' => '', 'menu_class' => 'navbar-nav ml-auto', 'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback', 'walker' => new WP_Bootstrap_Navwalker() ) ); ?>
        </div>
      </div>
    </nav>
  </header>
