<?php

/* Template Name: Service */

get_header(); ?>

<section class="container">

    <div class="titre_service">
        <h2>Découvrez nos services</h2>
    </div>

    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam eaque officiis sunt! Expedita harum minima praesentium quam quidem quisquam tempora. Commodi delectus dolores ea, harum ipsum laboriosam natus non nulla suscipit tenetur. A ab aliquid aut consectetur consequuntur ducimus eius eveniet explicabo id in ipsa iusto libero nihil nostrum numquam perspiciatis quaerat sed sit tempora, ut? Aliquid asperiores aut eligendi facilis, incidunt iusto nemo non perferendis praesentium, quod quos vero! A accusantium cumque distinctio doloremque dolores dolorum ea eius eveniet exercitationem fugiat, impedit itaque magnam maiores molestiae, mollitia nemo non nulla omnis quos similique, sit unde vel veritatis vero vitae.
    </p>

    <?php $query = new WP_Query(array(
        'post_type' => 'services',
        'posts_per_page' => 10
    )); ?>

    <?php if ($query->have_posts()): ?>
        <div class="row lg-4">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <div class="col-md-6 col-xl-4">
                    <?php get_template_part('template-parts/service'); ?>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
        <?php get_template_part('template-parts/pagination'); ?>
    <?php endif; ?>


</section>


<?php get_footer(); ?>
