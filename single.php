

<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<section class="container">
    <?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
endwhile;
else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
</section>
<?php get_footer(); ?>

