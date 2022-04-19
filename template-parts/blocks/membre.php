<?php

/**
 * Plugin Block Template.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'membre-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'membre';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$name = get_field('name') ?: 'Nom du membre';
$description = get_field('description') ?: 'Description par défaut du membre';
$role = get_field('role') ?: 'Role du membre ';
$photo = get_field('photo') ?: 100;
$background_color = get_field('background_color');
$text_color = get_field('text_color');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5 align-self-center">
                <div class="content-wrapper">
                    <div class="card">
                        <div class="card-header"
                            <span><?php echo $name; ?></span>
                            <span>"<?php echo $role; ?>"</span>
                        </div>
                        <div class="card-body">
                            <span class="testimonial-text"><?php echo $description; ?></span>
                        </div>
                    </div>


                </div>
            </div>

            <div class="col-lg-6 offset-lg-1 align-self-center">
                <div class="img-fluid rounded-start">
                    <?php echo wp_get_attachment_image( $photo, '100, 100' ); ?>
                </div>
            </div>
    </div>
</div>
<style type="text/css">
    #<?php echo $id; ?> {
        background: <?php echo $background_color; ?>;
        color: <?php echo $text_color; ?>;
    }
</style>
</div>