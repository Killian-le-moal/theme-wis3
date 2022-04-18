<?php get_header(); ?>
    <main id="main" class="site-main" role="main">

        <section class="container">
            <div class="jumbotron bg-dark text-white">
                <div>
                    <h1>Détecteam</h1>
                    <p>Bienvenue sur notre sur site <br> de détective private.</p>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 align-items-start">
                    <div class="col-12">
                    </div>
                </div>

                <h2 class="titre-2 mt-4 mb-4">Nos dernières enquêtes ...  </h2>

                <?php $query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 10
                )); ?>

                <?php if ($query->have_posts()): ?>
                    <div class="row g-4">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="col-md-6 col-xl-4">
                                <?php get_template_part('template-parts/post'); ?>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <?php get_template_part('template-parts/pagination'); ?>
                <?php endif; ?>

            </div>
        </section>


        <section class="py-5">
            <div class="container">

                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="test">
                            <div class="card mb-3 slide-left">
                                <div class="card-body">
                                    <h5 class="card-title">Les 7 étapes pour vous venger de votre ex-conjoint.e</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis metus eu lacus eleifend gravida id eget nunc. In hac habitasse platea dictumst. Proin in nunc id odio consectetur ultricies et vel quam. Nam sodales tempor nulla non condimentum. Maecenas sed maximus ipsum. Quisque aliquam lacus nec felis commodo finibus. Morbi sed neque congue, luctus dui sed, dictum turpis. Ut feugiat lorem id magna semper convallis. Morbi dictum sodales odio quis semper.</p>
                                    <a href="#" class="btn btn-dark">Lire la suite</a>
                                </div>
                                <img src="https://www.topchrono.biz/wp-content/uploads/2021/09/se-venger-de-son-ex-1024x576.jpg"
                                     class="card-img-bottom" alt="...">
                            </div>
                        </div>


                        <div class="newsletter">

                            <h2 class="slide-left">S'abonner à la newsletter</h2>

                            <div class="card card-body mt-5 mx-auto formulaire flip-form">
                                <form id="form" action="" method="POST">

                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="first_name">Prénom</label>
                                                <input class="form-control" name="first_name" id="first_name" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-3">
                                                <label for="last_name">Nom</label>
                                                <input class="form-control" name="last_name" id="last_name" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input class="form-control" name="email" id="email" required>
                                    </div>


                                    <div class="text-right">
                                        <button id="form-submit" type="submit" class="btn btn-primary">
                            <span id="button-spinner" class="spinner-border spinner-border-sm"
                                  style="display: none;"></span>
                                            Envoyer
                                        </button>
                                    </div>

                                </form>

                            </div>


                        </div>

                        <div class="carte slide-up">
                            <h2 class="slide-left">Notre agence
                                </h2>

                            <div id="map" style="width: 800px; height: 500px; background-color: #444;"></div>

                        </div>

                    </div>


                    <div class="col-lg-4">

                        <div id="sticker" class="card ml-5 sticky">
                            <div class="card-body">
                                <p class="card-text">Vous voulez plus de détails ? Détecteam vous donne toutes les clés pour tout savoir !</p>
                                <button class="btn btn-dark">Contactez nous pour un devis</button>
                            </div>
                        </div>


                    </div>


                </div>


            </div>
        </section>





    </main><!-- #main -->

    <script>

        let map;
        let coords = {lat: 47.219317, lng: -1.557755}

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: coords,
                zoom: 8,
            });

            new google.maps.Marker({
                position: coords,
                map: map,
                title: "Tlemcen",
            });
        }
    </script>
    <script defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>

<?php get_footer();
