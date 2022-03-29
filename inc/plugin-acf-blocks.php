<?php

add_action( 'acf/init', 'lazuli_init_block_types' );

function lazuli_init_block_types()
{
    if (function_exists('acf_register_block_type')) {


        acf_register_block_type(array(
            'name' => 'lazuli/advantage',
            'title' => __('Advantage', 'lazuli'),
            'description' => __('Display an advantage block', 'lazuli'),
            'render_template' => 'template-parts/blocks/advantage.php',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array('advantage'),
            'supports' => array(
                'jsx' => true,
                'anchor' => true,
            )
        ));


        /**
         *
         *
         * Pages blocks
         *
         *
         */

        acf_register_block_type(array(
            'name' => 'lazuli/hero',
            'title' => __('Hero', 'lazuli'),
            'description' => __('Display a hero block', 'lazuli'),
            'render_template' => 'template-parts/blocks/hero.php',
            'category' => 'section',
            'icon' => 'admin-comments',
            'keywords' => array('hero'),
            'align' => 'full',
            'supports' => array(
                'jsx' => true,
                'anchor' => true,
            )
        ));

    }
}

function capitaine_register_acf_block_types() {


        acf_register_block_type(array(
            'name' => 'testimonial',
            'title' => 'Citation client',
            'description' => "Bloc d'avis client",
            'render_template' => 'template-parts/blocks/testimonial.php',
            'category' => 'formatting',
            'icon' => 'format-quote',
            'keywords' => array('quote', 'citation', 'add-on'),

        ));


        acf_register_block_type(array(
            'name' => 'plugin',
            'title' => 'Extension',
            'description' => "Présentation d'une extension WordPress",
            'render_template' => 'template-parts/block/plugin.php',
            'category' => 'formatting',
            'icon' => 'admin-plugins',
            'keywords' => array('plugin', 'extension', 'add-on'),

        ));
        /*
            // Notre nouveau bloc
            acf_register_block_type( array(
                'name'              => 'recipe',
                'title'             => 'Recette',
                'description'       => "Aperçu d'une recette",
                'render_template'   => 'blocks/recipe.php',
                'category'          => 'common',
                'icon'              => 'carrot',
                'keywords'          => array(),
                'enqueue_assets'    => function() {
                    wp_enqueue_style( 'capitaine-blocks', get_template_directory_uri() . '/css/blocks.css' );

                }
            ) );*/

}

add_action('acf/init', 'capitaine_register_acf_block_types');