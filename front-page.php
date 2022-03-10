<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section>
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-6">
                        <h1>Detecteam</h1>
                        <p>Bienvenue sur notre sur site de détective private.</p>
                    </div>
                    <div class="col-6">
                        <img class="fit-picture" src="#" alt="image">
                    </div>
                </div>

                <h2 class="titre-2">Lorem Ipsum</h2>

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

            </div>
        </section>

        <section>
            <div class="container text-center">
                <h2>Lorem Ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer efficitur faucibus mi, et
                    tempus
                    odio
                    convallis sed. Nulla luctus mi sed nisl faucibus, a ullamcorper risus ornare. Quisque commodo
                    viverra purus,
                    sed sollicitudin enim dignissim vel. Suspendisse potenti. Nam sit amet massa in felis vestibulum
                    tempus. In
                    efficitur dictum lectus. Etiam quis mi arcu. Etiam feugiat euismod tortor, eget aliquet erat
                    molestie vel.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Nulla scelerisque
                    eleifend
                    convallis.
                </p>
            </div>

            <div class="container">
                <div class="row align-items-start">
                    <div class="col">
                        <img class="fit-picture"
                             src="#"
                             alt="imagee">
                    </div>
                    <div class="col">
                        <img class="fit-picture"
                             src="#"
                             alt="imagee">
                    </div>
                    <div class="col">
                        <img class="fit-picture"
                             src="#"
                             alt="imagee">
                    </div>
                </div>

                <div class="row align-items-start">
                    <div class="col">
                        <img class="fit-picture"
                             src="#"
                             alt="imagee">
                    </div>
                    <div class="col">
                        <img class="fit-picture"
                             src="#"
                             alt="imagee">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
<?php get_footer();
