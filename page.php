<?php get_header() ?>

<main>
  <?php
  while( have_posts() ) : the_post();
  $banner = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
  ?>
  <header class="page-header" style="background: #f5f5f6 url('<?php echo $banner[0] ?>') center right no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1><?php the_title() ?></h1>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php the_content() ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>

</main>

<?php get_footer() ?>
