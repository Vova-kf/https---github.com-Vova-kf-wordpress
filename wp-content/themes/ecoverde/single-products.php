<?php 
/* Template Name: Products */ 
?>

<?php get_header(); ?>

<div class="container">
    <h1>Наші товари</h1>
    <?php
    $args = array(
        'post_type' => 'products',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="product">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p><?php _e('No products found.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>