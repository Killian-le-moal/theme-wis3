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
                                <h4 class="card-title">Présentation du poste</h4>
                                <span><?php the_field('job_presentation'); ?> </span>


                                <h2 class="font-medium mt-5 mb-0">Compétences et profil requis</h2> <br>
                                <span class="text-muted"><?php the_field('job_profil'); ?></span>

                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="ml-2">
                                        <h5 class="mb-0">L'offre d'emploi<br></h5>
                                        <span class="pdf">

<?php
$file = get_field('pdf');
if ($file): ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
<?php endif; ?>
                                            </span>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="ml-2">
                                    <h5 class="mb-0">Présentation du groupe Détecteam<br></h5>
                                    <span><?php the_field('detecteam_presentation'); ?> </span>
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
