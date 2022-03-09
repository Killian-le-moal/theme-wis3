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
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer efficitur faucibus mi, et tempus odio convallis sed. Nulla luctus mi sed nisl faucibus, a ullamcorper risus ornare. Quisque commodo viverra purus, sed sollicitudin enim dignissim vel. Suspendisse potenti. Nam sit amet massa in felis vestibulum tempus. In efficitur dictum lectus. Etiam quis mi arcu. Etiam feugiat euismod tortor, eget aliquet erat molestie vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Nulla scelerisque eleifend convallis.
                    </p>
                </div>
                <div class="col">
                    <img class="fit-picture"
                         src="#"
                         alt="imagee">
                </div>
            </div>
        </div>
        <H2 class="titre-2">Lorem Ipsum</H2>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <H2 class="titre-2">Lorem Ipsum</H2>
        <p class="paragraphe">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer efficitur faucibus mi, et tempus odio convallis sed. Nulla luctus mi sed nisl faucibus, a ullamcorper risus ornare. Quisque commodo viverra purus, sed sollicitudin enim dignissim vel. Suspendisse potenti. Nam sit amet massa in felis vestibulum tempus. In efficitur dictum lectus. Etiam quis mi arcu. Etiam feugiat euismod tortor, eget aliquet erat molestie vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Nulla scelerisque eleifend convallis.
        </p>
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
    </main><!-- #main -->
<?php get_footer();
