<?php
// Register Custom Taxonomy
function _themename_create_taxonomy_categorie_evenement() {

	$labels = array(
		'name'                       => _x( 'Rubriques', 'Taxonomy General Name', '_themename' ),
		'singular_name'              => _x( 'Rubrique', 'Taxonomy Singular Name', '_themename' ),
		'menu_name'                  => __( 'Rubriques', '_themename' ),
		'all_items'                  => __( 'Toutes les rubriques', '_themename' ),
		'parent_item'                => __( 'La rubrique aprent', '_themename' ),
		'parent_item_colon'          => __( 'Parent Item:', '_themename' ),
		'new_item_name'              => __( 'Ajouter un nouveau nom de rubrique', '_themename' ),
		'add_new_item'               => __( 'Ajouter une nouvelle rubrique', '_themename' ),
		'edit_item'                  => __( 'Modifier une rubrique', '_themename' ),
		'update_item'                => __( 'Mettre à jour une rubrique', '_themename' ),
		'view_item'                  => __( 'Voir la rubrique', '_themename' ),
		'separate_items_with_commas' => __( 'Séparer les rubriques par des virgules', '_themename' ),
		'add_or_remove_items'        => __( 'Ajouter ou Supprimer des rubriques', '_themename' ),
		'choose_from_most_used'      => __( 'Choisir parmi les plus utilisées', '_themename' ),
		'popular_items'              => __( 'Rubriques populaires', '_themename' ),
		'search_items'               => __( 'Chercher les rubriques', '_themename' ),
		'not_found'                  => __( 'Not Found', '_themename' ),
		'no_terms'                   => __( 'No items', '_themename' ),
		'items_list'                 => __( 'Items list', '_themename' ),
		'items_list_navigation'      => __( 'Items list navigation', '_themename' ),
	);
	$capabilities = array(
/* 'manage_terms'               => '', */
/* 'edit_terms'                 => '', */
/* 'delete_terms'               => '', */
        /* 'assign_terms'               => '', */
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'capabilities'               => $capabilities,
		'show_in_rest'               => false,
	);
	register_taxonomy( 'rubrique', array( 'evenement' ), $args );

}
add_action( 'init', '_themename_create_taxonomy_categorie_evenement', 0 );

// Register Taxonomy date
function create_date_tax() {

	$labels = array(
		'name'              => _x( 'Date', 'taxonomy general name', '_themename' ),
		'singular_name'     => _x( 'Date', 'taxonomy singular name', '_themename' ),
		'search_items'      => __( 'Search Date', '_themename' ),
		'all_items'         => __( 'All Date', '_themename' ),
		'parent_item'       => __( 'Parent Date', '_themename' ),
		'parent_item_colon' => __( 'Parent Date:', '_themename' ),
		'edit_item'         => __( 'Edit Date', '_themename' ),
		'update_item'       => __( 'Update Date', '_themename' ),
		'add_new_item'      => __( 'Add New Date', '_themename' ),
		'new_item_name'     => __( 'New Date Name', '_themename' ),
		'menu_name'         => __( 'Date', '_themename' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'date of event', '_themename' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy( 'date', array('evenement'), $args );

}
add_action( 'init', 'create_date_tax' );
