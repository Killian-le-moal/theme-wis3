<footer id="footer" class="site-footer" role="contentinfo">
    <section class="container">

        <div>
            <div class="col text-center">
                <H3>Le footer</H3>
            </div>
        </div>


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

        <div>Réalisé avec ❤️ par Rémy et Killian - WIS 3 Nantes</div>

        <div class="copyright-wrapper">
            <span class="copyright">

                <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>
            </span>
            <div class="menu-wrapper">
                <?php wp_nav_menu(array('theme_location' => 'footer_legal')); ?>
            </div>
        </div>


    </section>
</footer><!-- #colophon -->