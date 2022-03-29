<?php

/* Template Name: Service */

get_header(); ?>

<section class="container">

    <div class="titre_service">
        <h2>Découvrez nos services</h2>
    </div>

    <?php $query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => 10
    )); ?>

    <?php if ($query->have_posts()): ?>
        <div class="row g-4">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-6 col-xl-4">
                    <?php get_template_part('template-parts/post'); ?>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
        <?php get_template_part('template-parts/pagination'); ?>
    <?php endif; ?>


</section>


<?php get_footer(); ?>
