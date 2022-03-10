<?php get_header(); ?>

<?php
$file = get_field('pdf');
if( $file ):

    // Extract variables.
    $url = $file['url'];
    $title = $file['title'];
    $caption = $file['caption'];
    $icon = $file['icon'];

    // Display image thumbnail when possible.
    if( $file['type'] == 'image' ) {
        $icon =  $file['sizes']['thumbnail'];
    }

    // Begin caption wrap.
    if( $caption ): ?>
        <div class="wp-caption">
    <?php endif; ?>

    <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
        <img src="<?php echo esc_attr($icon); ?>" />
        <span><?php echo esc_html($title); ?></span>
    </a>

    <?php
    // End caption wrap.
    if( $caption ): ?>
        <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>
