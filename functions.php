<?php

/*

Styles and Bootstrap

*/

require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function load_scripts() {

    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', [], '5.0.2', true );
    wp_enqueue_style ( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', [], '5.0.2', 'all' );
    wp_enqueue_style ( 'style', get_template_directory_uri() . '/styles/css/main.css', [], '1.0', 'all' );
    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css2?family=Inter&family=Montserrat:wght@300;500;600;700;800;900&display=swap' );
    
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );

function my_custom_scripts() {
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'menu-transparente', get_template_directory_uri() . '/assets/js/menu.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'slick-carousel', get_template_directory_uri() . '/assets/js/slick-carousel.js', array( 'jquery', 'slick-js' ), '1.0', true );
    wp_enqueue_script( 'portifólio', get_template_directory_uri() . '/assets/js/portifolio.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/js/slick.css', array(), '1.0', 'all' );
    wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/js/slick-theme.css', array(), '1.0', 'all' );
  }
  add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );
  

/*

Ceaf Config

*/

function ceaf_config() {

    register_nav_menus(
        array(
            'menu_home' => 'Menu Home',
            'menu_blog' => 'Menu Blog',
            'menu_portfolio' => 'Menu Portifólio',
            'menu_perguntas' => 'Menu Perguntas',
            'menu_politica' => 'Menu Política',
            'menu_artigo' => 'Menu Artigo',
            'menu_quem_sou' => 'Menu Quem Sou'
        )
    );

    add_theme_support( 'title-tag' );
    
    add_theme_support( 'custom-logo', [
        'height' => 44,
		'width'  => 44,
    ]);

    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'ceaf_config', 0);

/*

Número de caracters the_excerpt

*/

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



/***********************************************
ACF Options
***********************************************/

if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title'    => 'Rodapé',
        'menu_title'    => 'Rodapé',
        'menu_slug'     => 'rodape',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);

    acf_add_options_page([
        'page_title'    => 'Cabeçalho',
        'menu_title'    => 'Cabeçalho',
        'menu_slug'     => 'cabecalho',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);

    acf_add_options_page([
        'page_title'    => 'Redes Sociais Artigos',
        'menu_title'    => 'Redes Sociais Artigos',
        'menu_slug'     => 'redes-sociais-artigos',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}




/***********************************************
Custom Post Type / Taxonomy / Imagem
***********************************************/

// function imagem_register() {
//     $labels = array('name' => __('Imagens'),
//     'singular_name' => __('Imagem'),
//     'add_new' => __('Adicionar Novo'));

//     $args = array(
//             'labels' => $labels,
//             'public'             => true,
//             'publicly_queryable' => true,
//             'show_ui'            => true,
//             'show_in_menu'       => true,
//             'query_var'          => true,
//             'rewrite'            => array( 'slug' => 'imagem' ),
//             'capability_type'    => 'post',
//             'has_archive'        => true,
//             'hierarchical'       => false,
//             'menu_position'      => 15,
//             'supports' => array('title','thumbnail', 'custom-thumbnail'),
//             'menu_icon'   => 'dashicons-format-image',


//     );
//     register_post_type('imagem',$args);
// }
// add_action('init', 'imagem_register');


// function type_imagem_taxonomy() {

//         $labels = array(
//             'name'              => _x( 'Categorias', 'taxonomy general name', 'textdomain' ),
//             'singular_name'     => _x( 'Categoria', 'taxonomy singular name', 'textdomain' ),
//             'search_items'      => __( 'Procurar Categoria', 'textdomain' ),
//             'all_items'         => __( 'Todas CAtegorias', 'textdomain' ),
//             'view_item'         => __( 'Ver Categoria', 'textdomain' ),
//             'parent_item'       => __( 'Categoria Pai', 'textdomain' ),
//             'parent_item_colon' => __( 'Categoria Pai:', 'textdomain' ),
//             'edit_item'         => __( 'Editar Categoria', 'textdomain' ),
//             'update_item'       => __( 'Atualizar Categoria', 'textdomain' ),
//             'add_new_item'      => __( 'Adicionar Categorias', 'textdomain' ),
//             'menu_name'         => __( 'Categorias', 'textdomain' ),
//         );

//         $args = array(
//             'labels'            => $labels,
//             'hierarchical'      => true,
//             'public'            => true,
//             'show_ui'           => true,
//             'show_admin_column' => true,
//             'query_var'         => true,
//             'rewrite'           => array( 'slug' => 'categoria' ),
//             'show_in_rest'      => true,
//         );
//         register_taxonomy( 'categoria', 'imagem', $args );
//     } 

//     add_action( 'init', 'type_imagem_taxonomy', 0 );



    function custom_category_single_template($single_template) {
        global $post;
        $categories = get_the_category($post->ID);
        if ( !empty($categories) ) {
            $template = '';
            foreach( $categories as $category ) {
                $template = locate_template( array( "single-{$category->slug}.php", 'single.php' ) );
                if ( !empty($template) ) {
                    break;
                }
            }
            if ( !empty($template) ) {
                return $template;
            }
        }
        return $single_template;
    }
    add_filter( 'single_template', 'custom_category_single_template' );


    add_filter( 'wpcf7_validate_configuration', '__return_false' );
