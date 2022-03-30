<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section>
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-12">
                        <h1>Detecteam</h1>
                        <p>Bienvenue sur notre sur site de détective private.</p>
                    </div>
                </div>

                <h2 class="titre-2">Titre du site </h2>

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
                <h2>Welcome to the website</h2>
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
                             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJP_Op_XN9WnFnqeOVe4uN9EEYU7i9f9e9iA&usqp=CAU"
                             alt="imagee">
                    </div>
                    <div class="col">
                        <img class="fit-picture"
                             src="https://www.adetef.fr/wp-content/uploads/2020/12/detective-prive-service.jpg"
                             alt="imagee">
                    </div>
                    <div class="col">
                        <img class="fit-picture"
                             src="https://st.depositphotos.com/1550494/2731/i/950/depositphotos_27313551-stock-photo-retro-detective-man-with-mustache.jpg"
                             alt="imagee">
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
<?php get_footer();
