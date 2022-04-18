<!--<div class="card text-center mb-4 slide-up" style="width: 18rem; min-width: 20rem; min-height: 15rem;" >
    <div class="card-header bg-primary text-white">
        <?php the_title(); ?>
    </div>
    <div class="card-body">
        <h5 class="card-title text-secondary text-title "></h5>
        <p class="card-text">
            <?php the_excerpt(); ?>
        </p>
        <a href="<?php the_permalink(); ?> " class="btn btn-secondary btn-services mt-4 ">Lire l'article</a>
    </div>
</div> -->


<div class="col-sm-2 col-lg-4 slide-left">


    <div class="card mb-4" style="width: 24rem; min-height: 26rem">
        <img <?php the_post_thumbnail(); ?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-dark">Lire l'article</a>
        </div>
    </div>
</div>