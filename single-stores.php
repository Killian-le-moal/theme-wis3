<?php
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}
?>

<h3>Product Description</h3>
<?php the_field('product_description'); ?>


