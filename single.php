<?php get_header(); ?>
    <main id="main" class="site-main" role="main">
        <section>
            <div class="container">

                <h1>Bienvenue sur l'article qui parle du sujet suivant :  <?php the_title() ?></h1>

            </div>
            <div class="entry-content">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>
            </div>
        </section>

    </main><!-- #main -->
<?php get_footer();
