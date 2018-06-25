<?php get_header() ?>

<main>

  <?php if( is_product() ) : ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <?php woocommerce_content() ?>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php woocommerce_content() ?>
        </div>
      </div>
    </div>
  <?php endif; ?>
</main>

<?php get_footer() ?>
