<!--<div class="card text-center mb-4" style="width: 18rem; min-width: 20rem; min-height: 15rem;" >
    <div class="card-header bg-secondary text-white">
      Service :  <?php the_title(); ?>
    </div>
    <div class="card-body">
        <h5 class="card-title text-secondary text-title "></h5>
        <p class="card-text">
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?> " class="btn btn-primary btn-services mt-4 ">Voir notre service</a>
    </div>
</div>
-->


<div class="service">
    <div class="col-sm-2 col-lg-3 slide-left">


        <div class="card mb-4" style="width: 20rem; min-height: 18rem">
            <img <?php the_post_thumbnail(); ?>
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <a href="<?php the_permalink(); ?>" class="btn btn-dark">Lire l'article</a>
            </div>
        </div>
    </div>
</div>