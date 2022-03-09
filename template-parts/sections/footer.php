<footer id="footer" class="site-footer" role="contentinfo">
    <div class="container">

        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <img class="fit-picture"
                         src="#"
                         alt="imagee">
                </div>
                <div class="col">
<H3>Title</H3>
                </div>
                <div class="col">
                    One of three columns
                </div>
            </div>
        </div>

        <div class="widgets-wrapper">
            <div class="row g-4">
                <?php if (is_active_sidebar('sidebar-footer-1')): ?>
                    <div class="col-md-6 col-lg-3">
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

        <div class="copyright-wrapper">
            <span class="copyright">
                &copy;
                <?php echo date('Y'); ?>
                <?php bloginfo('name'); ?>
            </span>
            <div class="menu-wrapper">
                <?php wp_nav_menu(array('theme_location' => 'footer_legal')); ?>
            </div>
        </div>

    </div>
</footer><!-- #colophon -->