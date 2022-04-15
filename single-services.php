<?php

/* Template Name: Service */

get_header(); ?>



<section class="service">
    <div class="container">

        <section class="container">
            <div class="jumbotron bg-dark text-white">
                <div>
                    <h1>Découvrez nos services</h1>
                    <p>Bienvenue sur notre sur site <br> de détective private.</p>
                </div>
            </div>

        <div class="row carte-services">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-body">
                                <h4 class="card-title">Satisfaction cliente
                                    : <?php the_field('satisfaction_cliente'); ?> / 100</h4>
                                <div class="progress">
                                    <div class="progress-bar bg-orange" role="progressbar"
                                         style="width: <?php the_field('satisfaction_cliente'); ?>%"
                                         aria-valuenow="<?php the_field('satisfaction_cliente'); ?>" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>

                                <h2 class="font-medium mt-5 mb-0">Objectif de la mission</h2>
                                <span class="text-muted"><?php the_field('objectifs'); ?></span>

                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <h5 class="mb-0">Notre detective : <?php the_field('detective_name'); ?></h5>
                                        <span class="detect_pic"><?php

                                            $image_id = get_field('photo_detective');
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
