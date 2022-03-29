<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-secondary text-title"><?php the_title(); ?></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?> " class="btn btn-primary btn-services">Découvrir le service</a>
    </div>
</div>