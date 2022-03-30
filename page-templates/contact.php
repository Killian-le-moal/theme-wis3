<?php

/* Template Name: Contact */

get_header(); ?>

<section class="main py-5 ">
    <div class=" container">

        <div class="card card-body form-wrapper mx-auto" style="max-width: 800px;">
        <?php echo do_shortcode('[contact-form-7 id="71"]');  ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>

