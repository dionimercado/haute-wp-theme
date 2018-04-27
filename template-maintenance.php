<?php /* Template Name: Maintenance */ ?>
<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">

  <?php wp_head() ?>
  <style media="screen">
    body {
      background-color: #000;
      color: #fff;
      text-align: center;
    }
    a {
      margin: 0 3px;
      font-size: 20px;
      color: #bbb;
    }
    .wrapper {
      max-width: 800px;
      margin: auto;
    }
    .logo {
      margin: 5rem 0;
    }
    img {
      max-width: 500px;
    }
    .body h1{
      border-top: 1px solid rgb(170, 226, 6);
      border-bottom: 1px solid rgb(170, 226, 6);
      padding: 4rem 0;
      font-size: 60px;
      font-family: 'Helvetica Neue', 'Raleway', sans-serif;
      font-weight: 300;
    }
  </style>
</head>
<body <?php body_class() ?>>
  <div class="wrapper">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri() ?>/assets/images/haute.svg" alt="<?php bloginfo('name') ?>">
    </div>
    <div class="body">
      <h1>Under Construction</h1>
    </div>
    <div class="social-networks">
      <a href="https://www.facebook.com/" class="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <a href="http://instagram.com/" class="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://twitter.com/" class="twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://youtube.com/" class="youtube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
    </div>
  </div>
  <?php wp_head() ?>
</body>
</html>