<?php get_header() ?>

<section class="hf-hero">
  <?php echo do_shortcode( '[rev_slider alias="home-slider"]' ) ?>
</section>

<section class="hf-featured my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <a class="home-cat d-block mb-5" href="#">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/glasses.jpg" class="img-fluid" alt="" />
        </a>
        <a class="home-cat d-block mb-5" href="#">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/bags.jpg" class="img-fluid" alt="" />
        </a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-6">
            <a href="#">
              <figure>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/chie-collection.jpg" width="360" height="552" alt="Front Image">
                <figcaption>
                  <h3>Chie Mahara</h3>
                  <p>New Fall</p>
                  <span>Collection</span>
                </figcaption>
              </figure>
            </a>
          </div>
          <div class="col-6">
            <a href="#">
              <figure>
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/images/chie-collection.jpg" width="360" height="552" alt="Front Image">
                <figcaption>
                  <h3>Chie Mahara</h3>
                  <p>New Fall</p>
                  <span>Collection</span>
                </figcaption>
              </figure>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hf-arrivals">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="hf-arrivals__heading">
          <h2><?php _e( 'New Arrivals' ) ?></h2>
          <small>ITEMS THAT WORTH THE HYPE</small>
          <p class="my-5">Here are our best-selling products on Haute Couture. They are picked up by fashionistas, fashion bloggers, as well as those who want to use fashion items to mark their personal style.</p>
          <a href="#" class="btn btn-primary btn-rounded"><?php _e( 'Shop Now' ) ?> <i class="fas fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-4"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/chie.jpg" alt="" class="img-fluid"></a></div>
          <div class="col-md-4"><a href="#"><img src="https://hautefootwear.com/wp-content/uploads/2018/06/karia.jpg" alt="" class="img-fluid"></a></div>
          <div class="col-md-4"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/chie.jpg" alt="" class="img-fluid"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hf-trending bg-light py-5 my-5">
  <div class="hf-trending__heading">
    <h2><?php _e( 'What\'s Hot' ) ?></h2>
    <small>NEWEST TRENDS FROM TOP BRANDS</small>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="hf-trending__nav">
          <li><a class="active" href="#">Best Sellers</a></li>
          <li><a href="#">Featured Products</a></li>
          <li><a href="#">Latest Products</a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-md-3"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/chie.jpg" alt="" class="img-fluid"></a></div>
          <div class="col-md-3"><a href="#"><img src="https://hautefootwear.com/wp-content/uploads/2018/06/karia.jpg" alt="" class="img-fluid"></a></div>
          <div class="col-md-3"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/chie.jpg" alt="" class="img-fluid"></a></div>
          <div class="col-md-3"><a href="#"><img src="https://hautefootwear.com/wp-content/uploads/2018/06/karia.jpg" alt="" class="img-fluid"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>
