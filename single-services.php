<?php

/* Template Name: Service */

get_header(); ?>

<section>
    <div class="container">

        <h1>Bienvenue sur l'article qui parle du sujet suivant :  <?php the_title() ?></h1>

        <div class="review">
            <div class="review__score">Note : <?php the_field( 'satisfaction_cliente' ); ?> / 100</div>

            <div class="review__cols">
                <div class="review__pros">Les plus : <?php the_field( 'objectifs' ); ?></div>
                <div class="review__cons">Les moins : <?php the_field( 'detectives' ); ?></div>
            </div>

            <div class="review__date">Sortie le <?php the_field( 'date_de_sortie' ); ?></div>

            <?php
            if( get_field( 'illustration' ) ):
                $picture = get_field( 'illustration' );
                //var_dump( $picture );
                ?>
                <div class="review__picture">
                    <img
                        src="<?php echo $picture['sizes']['post-thumbnail']; ?>"
                        alt="Pochette de <?php $picture['title']; ?>">
                </div>
            <?php endif; ?>
        </div>






</section>

<?php get_footer(); ?>
