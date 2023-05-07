<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecoverde
 */

get_header();
?>

<section class="hero-wrap" style="background-image: url('<?php the_field('background-image') ?>');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center">
			<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
				<div class="text">
					<h1 class="mb-4"><?php the_field('title_home') ?></h1>
					<p style="font-size: 18px;"><?php the_field('subtitle_home') ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
				<span class="subheading"><?php the_field('property_subtitle') ?></span>
				<h2 class="mb-2"><?php the_field('property_title') ?></h2>
			</div>
		</div>
		<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-properties owl-carousel">
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

          <div class="item">
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
		</div>
	</div>
</section>



<?php get_footer();
