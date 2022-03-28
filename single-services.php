<?php

/* Template Name: Service */

get_header(); ?>

<section class="service">
    <div class="container">

        <h1>Découvrez notre service :  <?php the_title() ?></h1>

        <div class="review">
            <div class="review_score">Taux de réussite : <?php the_field( 'satisfaction_cliente' ); ?> / 100</div>

            <div>
                <div class="review__pros">Notre objectif : <?php the_field( 'objectifs' ); ?></div>
                <div class="review__cons">Notre détective : <?php the_field( 'detectives' ); ?></div>
            </div>

            <div class="review__date">Prix de la prestation : <?php the_field( 'prix' ); ?> €</div>

            <?php

	$image_id = get_field( 'illustration' ); // On récupère cette fois l'ID
	if( $image_id ) {
		echo wp_get_attachment_image( $image_id, 'full' );
    }
                ?>


        </div>






</section>

<?php get_footer(); ?>
