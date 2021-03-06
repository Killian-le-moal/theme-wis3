<?php get_header(); ?>
    <main id="main" class="site-main" role="main">
        <section class="container">
            <div class="text-center mb-4">
                <h1>Nos dernières actus...</h1>
                <p>Découvrez les dernières actus qui rythme le quotidien de notre agence. </p>
            </div>
            <?php $query = new WP_Query(array(
                'post_type' => 'post',
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
    </main><!-- #main -->
<?php get_footer();
