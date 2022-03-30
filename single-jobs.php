<?php

/* Template Name: Jobs */

get_header(); ?>

<section class="service">
    <div class="container">

        <h1>Découvrez nos offres d'emplois : <?php the_title() ?></h1>


        <div class="row carte-services">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card-body">
                                <h4 class="card-title">Horaires d'ouvertures : </h4>
                                <span><?php the_field('hours'); ?> </span>


                                <h2 class="font-medium mt-5 mb-0">Adresse de l'établissement</h2> <br>
                                <span class="text-muted"><?php the_field('building_adress'); ?></span>

                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <h5 class="mb-0">Illustration de la batisse : <br></h5>
                                        <span class="buiding_pic"><?php

                                            $image_id = get_field('building_pic');
                                            if ($image_id) {
                                                echo wp_get_attachment_image($image_id, 'full');
                                            }
                                            ?>
                                            </span>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<?php get_footer(); ?>
