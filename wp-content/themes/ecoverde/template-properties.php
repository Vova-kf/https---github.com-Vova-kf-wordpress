<?php

/**
 * Template name: Template-properties
 */
get_header();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php the_field('background-image_properties') ?>');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Properties</h1>
      </div>
    </div>
  </div>
</section>



<section class="ftco-section goto-here">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 heading-section text-center ftco-animate mb-5">
        <span class="subheading">What we offer</span>
        <h2 class="mb-2">Properties</h2>
      </div>
    </div>
    <div class="row">


      <?php
      $args = array(
        'post_type' => 'products',
        'posts_per_page' => 6,
        'order' => 'DESC',
        'orderby' => 'date',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

          <div class="col-md-4">
            <div class="property-wrap ftco-animate">
              <a href="#" class="img" style="background-image: url(<?php echo get_field('real_estate_foto'); ?>);">
                <div class="rent-sale">
                  <?php
                  $real_estate_rent_sale = get_field('real_estate_rent_sale');

                  // Display the selected value.
                  if ($real_estate_rent_sale) : ?>
                    <span class="<?php echo $real_estate_rent_sale == 'Sale' ? 'sale' : 'rent'; ?>">
                      <?php echo $real_estate_rent_sale; ?>
                    </span>
                  <?php endif; ?>
                </div>
                <?php
                $real_estate_rent_sale = get_field('real_estate_rent_sale');
                $price = get_field('real_estate_price');
                ?>

                <?php if ($real_estate_rent_sale) : ?>
                  <p class="price <?php echo $real_estate_rent_sale == 'Sale' ? 'sale' : 'rent'; ?>">
                    <span class="orig-price">
                      <?php echo $price; ?>
                      <?php if ($real_estate_rent_sale == 'Rent') : ?>
                        /mo
                      <?php endif; ?>
                    </span>
                  </p>
                <?php endif; ?>
              </a>
              <div class="text">
                <ul class="property_list">
                  <li>Bedrooms: <?php echo get_field('real_estate_bedrooms'); ?> </li>
                  <li>Bathrooms: <?php echo get_field('real_estate_bathrooms'); ?> </li>
                  <li><?php echo get_field('real_estate_sqft'); ?> sqft </li>
                </ul>
                <h3><a href="#"><?php echo get_field('real_estate_name'); ?></a></h3>
                <span class="location"><?php echo get_field('real_estate_location'); ?></span>

              </div>
            </div>
          </div>


      <?php endwhile;
      endif;
      wp_reset_postdata(); ?>



    </div>
  </div>
</section>

<?php get_footer(); ?>