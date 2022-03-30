<?php

/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">

        <div class="row g-4">
            <div class="col-lg-5 align-self-center">
                <div class="content-wrapper">

                    <h1 class="h1">Lorem ipsum dolor amet sir</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Netus egestas tortor ornare mauris
                        posuere
                        mattis blandit. Volutpat morbi ac diam enim. Nisi, justo, non dictum diam. Auctor blandit morbi
                        ut
                        augue ultrices ut. Morbi facilisi leo eget gravida proin eu massa platea fermentum.</p>
                    <p>Donec cras ut diam pharetra in mi ultricies. Nibh rutrum lobortis tempus luctus. Cursus velit
                        porttitor amet, habitasse id diam nec. Nec scelerisque pulvinar posuere ridiculus mi aliquet
                        senectus. Ultricies nibh dui enim suscipit.</p>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 align-self-center">

                // IMAGE

            </div>
        </div>

    </div>
</section>