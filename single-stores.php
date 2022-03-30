<?php

/* Template Name: Stores */

get_header(); ?>

<section class="service">
    <div class="container">

        <h1>Découvrez notre établissement : <?php the_title() ?></h1>


        <div class="row carte-services">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title">Satisfaction cliente
                                    : <?php the_field('building_name'); ?> </h4>


                                <h2 class="font-medium mt-5 mb-0">Objectif de la mission</h2>
                                <span class="text-muted"><?php the_field('building_adress'); ?></span>

                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <h5 class="mb-0">Notre detective : <?php the_field('detective_name'); ?></h5>
                                        <span class="detect_pic"><?php

                                            $image_id = get_field('building_pic');
                                            if ($image_id) {
                                                echo wp_get_attachment_image($image_id, 'thumbnail');
                                            }
                                            ?>
                                            </span>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <div>
                                            <h5>Description : </h5>
                                            <p><?php the_field('detective_desc'); ?></p>
                                        </div>
                                        <div class="price">

                                            <h5>Prix de l'enquête : <?php the_field('prix'); ?> €</h5>

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
