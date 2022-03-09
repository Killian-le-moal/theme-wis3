<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <div class="entry-content">
            <?php while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; ?>
        </div>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <H2>
                        Lorem Ipsum
                    </H2>
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>
    </main><!-- #main -->
<?php get_footer();
