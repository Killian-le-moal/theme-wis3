<?php

/* Template Name: Contact */

get_header(); ?>

<section class="main py-5 ">
    <div class=" container">
        <div class="card card-header bg-light text-primary mb-4 text-center">
            <h2>Nous contacter</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus ad aliquid amet aspernatur
                blanditiis corporis deleniti, dicta ea iste laborum neque officiis repellat sint unde vel voluptas
                voluptatibus! A commodi consequatur cumque deleniti eveniet ipsam laboriosam laudantium maiores modi,
                mollitia nihil officia quisquam repellendus sapiente tenetur velit voluptas?</p>
        </div>
        <div class="card card-body form-wrapper mx-auto" style="max-width: 800px;">
            <?php echo do_shortcode('[contact-form-7 id="71"]'); ?>
        </div>

    </div>
</section>

<?php get_footer(); ?>

