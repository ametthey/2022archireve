<?php
function _themename_create_evenement_cpt() {

    $labels = array(
        'name' => _x( 'evenements', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'evenement', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Évenements', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'evenement', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives evenement', '_themename' ),
        'attributes' => __( 'Attributs evenement', '_themename' ),
        'parent_item_colon' => __( 'Parents evenement:', '_themename' ),
        'all_items' => __( 'Tous les évenements', '_themename' ),
        'add_new_item' => __( 'Ajouter nouvel évenement', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvel évenement', '_themename' ),
        'edit_item' => __( 'Modifier l\'évenement', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'évenement', '_themename' ),
        'view_item' => __( 'Voir évenement', '_themename' ),
        'view_items' => __( 'Voir évenements', '_themename' ),
        'search_items' => __( 'Rechercher dans les evenement', '_themename' ),
        'not_found' => __( 'Aucun évenement trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucun évenement trouvé dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans evenement', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cet evenement', '_themename' ),
        'items_list' => __( 'Liste evenements', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste evenements', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste evenements', '_themename' ),
    );
    $args = array(
        'label' => __( 'evenement', '_themename' ),
        'description' => __( 'Les événements', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-feedback',
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array( 'rubrique' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'evenement', $args );

}
add_action( 'init', '_themename_create_evenement_cpt', 0 );

function _themename_create_intervenant_cpt() {

    $labels = array(
        'name' => _x( 'intervenantes', 'Post Type General Name', '_themename' ),
        'singular_name' => _x( 'intervenante', 'Post Type Singular Name', '_themename' ),
        'menu_name' => _x( 'Intervenantes', 'Admin Menu text', '_themename' ),
        'name_admin_bar' => _x( 'intervenante', 'Add New on Toolbar', '_themename' ),
        'archives' => __( 'Archives intervenante', '_themename' ),
        'attributes' => __( 'Attributs intervenante', '_themename' ),
        'parent_item_colon' => __( 'Parents intervenante:', '_themename' ),
        'all_items' => __( 'Tous les intervenantes', '_themename' ),
        'add_new_item' => __( 'Ajouter nouvelle intervenante', '_themename' ),
        'add_new' => __( 'Ajouter', '_themename' ),
        'new_item' => __( 'Nouvelle intervenante', '_themename' ),
        'edit_item' => __( 'Modifier l\'intervenante', '_themename' ),
        'update_item' => __( 'Mettre à jour l\'intervenante', '_themename' ),
        'view_item' => __( 'Voir intervenante', '_themename' ),
        'view_items' => __( 'Voir intervenantes', '_themename' ),
        'search_items' => __( 'Rechercher dans les intervenantes', '_themename' ),
        'not_found' => __( 'Aucune intervenante trouvé.', '_themename' ),
        'not_found_in_trash' => __( 'Aucune intervenante trouvée dans la corbeille.', '_themename' ),
        'featured_image' => __( 'Image mise en avant', '_themename' ),
        'set_featured_image' => __( 'Définir l’image mise en avant', '_themename' ),
        'remove_featured_image' => __( 'Supprimer l’image mise en avant', '_themename' ),
        'use_featured_image' => __( 'Utiliser comme image mise en avant', '_themename' ),
        'insert_into_item' => __( 'Insérer dans intervenante', '_themename' ),
        'uploaded_to_this_item' => __( 'Téléversé sur cette intervenante', '_themename' ),
        'items_list' => __( 'Liste des intervenantes', '_themename' ),
        'items_list_navigation' => __( 'Navigation de la liste intervenantes', '_themename' ),
        'filter_items_list' => __( 'Filtrer la liste intervenantes', '_themename' ),
    );
    $args = array(
        'label' => __( 'intervenantes', '_themename' ),
        'description' => __( 'Les intervenantes', '_themename' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title'),
        'taxonomies' => array( 'rubrique' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'hierarchical' => false,
        'exclude_from_search' => false,
        'show_in_rest' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type( 'intervenante', $args );

}
add_action( 'init', '_themename_create_intervenant_cpt', 0 );
