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
$id = 'plugin-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'plugin';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

$title = get_field('title') ?: 'Titre par défaut';
$description = get_field('description') ?: 'Integer arcu eros, gravida vel aliquet in, vulputate vitae mi. Praesent mattis facilisis est. Nullam id scelerisque arcu. Nam sed velit ante. Morbi ornare elit ac luctus porta. Cras iaculis massa massa, tincidunt viverra tellus rutrum in. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec eros elit, molestie id sodales eget, hendrerit non ex.';

?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <h2><?php echo $title ?></h2>
        <p><?php echo $description; ?></p>
    </div>
</section>