<footer id="footer" class="site-footer" role="contentinfo">
    <section class="container">

        <!-- Site footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h6>A propos</h6>
                        <p class="text-justify">

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et mi eget lorem auctor sollicitudin a quis augue. Ut turpis est, faucibus in consectetur vitae, tristique et nulla. Mauris scelerisque, felis vitae maximus suscipit, tellus massa lacinia nisi, vitae ullamcorper ex elit in libero. Fusce eget mi accumsan, vulputate augue a, pulvinar massa. </p>                  </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Catégories</h6>
                        <ul class="footer-links">
                            <li><a href="http://localhost:8888/wordpress_wis3/recrutements/">Offres d'emplois</a></li>
                            <li><a href="http://localhost:8888/wordpress_wis3/etablissements/">Nos agences</a></li>
                            <li><a href="http://localhost:8888/wordpress_wis3/le-groupe/">Le groupe Détecteam</a></li>
                            <li><a href="http://localhost:8888/wordpress_wis3/nos-services/">Nos services</a></li>
                            <li><a href="http://localhost:8888/wordpress_wis3/blog/">Le blog et ses astuces</a></li>
                        </ul>
                    </div>

                    <div class="col-xs-6 col-md-3">
                        <h6>Un besoin particlier ?</h6>
                        <ul class="footer-links">
                            <li><a href="http://localhost:8888/wordpress_wis3/">Accueil</a></li>
                            <li><a href="http://localhost:8888/wordpress_wis3/contact/">Nous contacter</a></li>
                            <li><a href="#">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <ul class="social-icons">
                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>


        <div class="widgets-wrapper">
            <div class="row g-4">
                <?php if (is_active_sidebar('sidebar-footer-1')): ?>
                    <div class="col-md-6 col-lg-3">
                        Notre fil Twitter
                        <?php dynamic_sidebar('sidebar-footer-1'); ?>
                    </div>
                <?php endif ?>
                <?php if (is_active_sidebar('sidebar-footer-2')): ?>
                    <div class="col-md-6 col-lg-3">
                        <?php dynamic_sidebar('sidebar-footer-2'); ?>
                    </div>
                <?php endif ?>
                <?php if (is_active_sidebar('sidebar-footer-3')): ?>
                    <div class="col-md-6 col-lg-3">
                        <?php dynamic_sidebar('sidebar-footer-3'); ?>
                    </div>
                <?php endif ?>
                <?php if (is_active_sidebar('sidebar-footer-4')): ?>
                    <div class="col-md-6 col-lg-3">
                        <?php dynamic_sidebar('sidebar-footer-4'); ?>
                    </div>
                <?php endif ?>
            </div>
        </div>



        <?php echo date('Y'); ?>
        <?php bloginfo('name'); ?>

        <div class="menu-wrapper">
            <?php wp_nav_menu(array('theme_location' => 'footer_legal')); ?>
        </div>


        <div class="copyright"> Réalisé avec ❤️ par Rémy et Killian - WIS 3 Nantes<!-- #app --> </div>

    </section>

    <script src="assets/js/app.js"></script>
</footer><!-- #colophon -->