<?php


function lazuli_custom_post_types() {
	$cpt = array(
		'labels'              => array(
			'name'          => __( 'Etablissements', 'lazuli' ),
			'singular_name' => __( 'Etablissement', 'lazuli' ),
		),
		'show_ui'             => true,
		'show_admin_column'   => true,
		'show_in_rest'        => true,
		'hierarchical'        => true,
		'public'              => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'rewrite'             => array( 'slug' => 'etablissements', 'with_front' => true ),
		'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
		'menu_icon'           => 'dashicons-store',
	);

	register_post_type( 'etablissements', $cpt );
}

add_action( 'init', 'lazuli_custom_post_types' );

function detecteam_custom_post_types() {
    $cpt = array(
        'labels'              => array(
            'name'          => __( 'Offres d\'emploi', 'lazuli' ),
            'singular_name' => __( 'Offre d\'emploi', 'lazuli' ),
        ),
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'rewrite'             => array( 'slug' => 'recrutements', 'with_front' => true ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'menu_icon'           => 'dashicons-businessman',
    );

    register_post_type( 'jobs', $cpt );
}

add_action( 'init', 'detecteam_custom_post_types' );

function services_custom_post_types() {
    $cpt = array(
        'labels'              => array(
            'name'          => __( 'Nos services', 'lazuli' ),
            'singular_name' => __( 'Nos services', 'lazuli' ),
        ),
        'show_ui'             => true,
        'show_admin_column'   => true,
        'show_in_rest'        => true,
        'hierarchical'        => true,
        'public'              => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'rewrite'             => array( 'slug' => 'nos services', 'with_front' => true ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'excerpt' ),
        'menu_icon'           => 'dashicons-insert',
    );

    register_post_type( 'nos services', $cpt );
}

add_action( 'init', 'services_custom_post_types' );
