<?php

/*

Styles and Bootstrap

*/

function load_scripts() {

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], '5.0.2', true );
    wp_enqueue_style ( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], '5.0.2', 'all' );
    wp_enqueue_style ( 'style', get_template_directory_uri() . '/styles/css/main.css', [], '1.0', 'all' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@300;500;600;700;800;900&display=swap' );
    
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

/*

Ceaf Config

*/

function ceaf_config() {

    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu'
        )
    );

    add_theme_support( 'title-tag' );
    
    add_theme_support( 'custom-logo');
}

add_action('after_setup_theme', 'ceaf_config', 0);



/***********************************************
Custom Post Type / Taxonomy
***********************************************/

function video_register() {
    $labels = array('name' => __('Vídeos'),
    'singular_name' => __('Vídeo'),
    'add_new' => __('Adicionar Novo'));

    $args = array(
            'labels' => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'video' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'supports' => array('title','thumbnail', 'custom-thumbnail'),
            'menu_icon'   => 'dashicons-video-alt3',


    );
    register_post_type('video',$args);
}
add_action('init', 'video_register');


function type_video_taxonomy() {

        $labels = array(
            'name'              => _x( 'Gêneros', 'taxonomy general name', 'textdomain' ),
            'singular_name'     => _x( 'Gênero', 'taxonomy singular name', 'textdomain' ),
            'search_items'      => __( 'Procurar Gênero', 'textdomain' ),
            'all_items'         => __( 'Todos os Gêneros', 'textdomain' ),
            'view_item'         => __( 'Ver Gênero', 'textdomain' ),
            'parent_item'       => __( 'Gênero Pai', 'textdomain' ),
            'parent_item_colon' => __( 'Gênero Pai:', 'textdomain' ),
            'edit_item'         => __( 'Editar Gênero', 'textdomain' ),
            'update_item'       => __( 'Atualizar Gênero', 'textdomain' ),
            'add_new_item'      => __( 'Adicionar Gêneros', 'textdomain' ),
            'menu_name'         => __( 'Gêneros', 'textdomain' ),
        );

        $args = array(
            'labels'            => $labels,
            'hierarchical'      => true,
            'public'            => true,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'genero' ),
            'show_in_rest'      => true,
        );
        register_taxonomy( 'genero', 'video', $args );
    }    

add_action( 'init', 'type_video_taxonomy', 0 );