<?php

/***********************************************************************
 * Integrate ACF directy in Theme
 *  https://support.advancedcustomfields.com/forums/topic/include-acf-to-my-plugin/
 ***********************************************************************/
if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('acf') ) {
    add_filter('acf/settings/path', 'cysp_acf_settings_path');
    function cysp_acf_settings_path( $path ) {
        $path = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $path;
    }
    add_filter('acf/settings/dir', 'cysp_acf_settings_dir');
    function cysp_acf_settings_dir( $path ) {
        $dir = get_stylesheet_directory_uri() . '/includes/acf/' ;
        return $dir;
    }
    add_filter('acf/settings/show_admin', '__return_true');
    include_once( get_stylesheet_directory() . '/includes/acf/acf.php' );
    add_filter('acf/settings/save_json', 'cysp_acf_json_save_point');
    function cysp_acf_json_save_point( $path ) {
        $path = get_stylesheet_directory() . '/acf-json' ;
        return $path;
    }
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
    add_filter( 'site_transient_update_plugins', 'cysp_stop_acf_update_notifications', 11 );
    function cysp_stop_acf_update_notifications( $value ) {
        unset( $value->response[ get_stylesheet_directory_uri() . '/includes/acf/acf.php' ] );
        return $value;
    }
} else {
    add_filter('acf/settings/load_json', 'cysp_acf_json_load_point');
}

function cysp_acf_json_load_point( $paths ) {
    $paths[] = get_stylesheet_directory_uri() . 'acf-json-load';
    return $paths;
}

/***********************************************************************
 * Blocks
 ***********************************************************************/
add_action( 'acf/init', 'register_hero_block' );
function register_hero_block() {

    if ( function_exists( 'acf_register_block_type' ) ) {

        // Register Hero block
        acf_register_block_type( array(
            'name' 					=> 'hero',
            'title' 				=> __( 'Hero' ),
            'description' 			=> __( 'A custom Hero block.' ),
            'category' 				=> 'formatting',
            'icon'					=> 'layout',
            'keywords'				=> array( 'hero' ),
            'post_types'			=> array( 'post', 'page' ),
            'mode'					=> 'auto',
            // 'align'				=> 'wide',
            'render_template'		=> 'template-parts/component/hero.php',
            // 'render_callback'	=> 'hero_block_render_callback',
            // 'enqueue_style' 		=> get_template_directory_uri() . '/template-parts/blocks/hero/hero.css',
            // 'enqueue_script' 	=> get_template_directory_uri() . '/template-parts/blocks/hero/hero.js',
            // 'enqueue_assets' 	=> 'hero_block_enqueue_assets',
        ));

    }

}



/***********************************************************************
 * Options pages
 ***********************************************************************/

/***********************************************************************
 * Columns - Salle
 ***********************************************************************/
function add_acf_columns ( $columns ) {
    return array_merge ( $columns, array (
        'nombre_de_place_totale' => __ ( 'Nombres de places totale' ),
        'nombre_de_place_disponible' => __ ( 'Places restantes' ),
        // 'nom_de_la_salle' => _ ('Nom'),
    ) );
}
add_filter ( 'manage_salle_posts_columns', 'add_acf_columns' );


/*
 * Add columns to Hosting CPT
 */
function salle_custom_column ( $column, $post_id ) {
    switch ( $column ) {
    case 'nombre_de_place_totale':
        // en dessous, mettre le nom exact du ACF Field
        echo get_post_meta ( $post_id, 'nombre_de_place_totale', true );
        break;
    case 'nombre_de_place_disponible':
        // en dessous, mettre le nom exact du ACF Field
        echo get_post_meta ( $post_id, 'nombre_de_place_disponible', true );
        break;
    // case 'nom_de_la_salle':
    //     // en dessous, mettre le nom exact du ACF Field
    //     echo get_post_meta ( $post_id, 'nom_de_la_salle', true );
    //     break;
    }
}
add_action ( 'manage_salle_posts_custom_column', 'salle_custom_column', 10, 2 );

/***********************************************************************
 * Nested Group
 ***********************************************************************/
if ( function_exists( 'get_field' ) ) {
	function get_group_field( string $group, string $field, $post_id = 0 ) {
		$group_data = get_field( $group, $post_id );
		if ( is_array( $group_data ) && array_key_exists( $field, $group_data ) ) {
			return $group_data[ $field ];
		}
		return null;
	}
}
