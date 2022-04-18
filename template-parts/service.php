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



<div class="card mb-4" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
            img
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?php the_title(); ?></h5>
                <p class="card-text"> <?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?> " class="btn btn-primary btn-services mt-4 ">Voir notre service</a>
            </div>
        </div>
    </div>
</div>