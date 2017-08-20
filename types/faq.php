<?php

$labels = array(
	'name'                => _x( 'FAQ', 'Questions'),
	'singular_name'       => _x( 'FAQ', 'Question'),
	'menu_name'           => __( 'FAQ'),
	'name_admin_bar'      => __( 'FAQ : question'),
	'parent_item_colon'   => __(''),
	'all_items'           => __( 'Toutes les questions', 'text_domain' ),
	'add_new_item'        => __( 'Ajouter une question', 'text_domain' ),
	'add_new'             => __( 'Ajouter', 'text_domain' ),
	'new_item'            => __( 'Nouvelle question', 'text_domain' ),
	'edit_item'           => __( 'Editer la question', 'text_domain' ),
	'update_item'         => __( 'Mettre-à-jour la question', 'text_domain' ),
	'view_item'           => __( 'Voir la question', 'text_domain' ),
	'search_items'        => __( 'Chercher une question', 'text_domain' ),
	'not_found'           => __( 'Aucune', 'text_domain' ),
	'not_found_in_trash'  => __( 'Rien dans la corbeille', 'text_domain' ),
);

$args = array(
	'labels'              => $labels,
	'supports'            => array('title', 'editor'),
	'hierarchical'        => false,
	'public'              => true,
	'show_ui'             => true,
	'show_in_menu'        => true,
	'menu_position'       => 5,
	'menu_icon'           => 'dashicons-welcome-learn-more',
	'show_in_admin_bar'   => true,
	'show_in_nav_menus'   => true,
	'can_export'          => true,
	'has_archive'         => true,		
	'exclude_from_search' => false,
	'publicly_queryable'  => true,
	'capability_type'     => 'post',
	);

register_post_type( 'faq', $args );

$labels = array(
	'name' =>  'Types',
	'singular_name' => 'Type',
	'search_items' =>  'Rechercher un type',
	'all_items' => 'Tous les types',
	'parent_item' => 'Type parent',
	'parent_item_colon' => 'Type parent,',
	'edit_item' => 'Editer ce type', 
	'update_item' => 'Mettre à jour ce type',
	'add_new_item' => 'Ajouter un nouveau type',
	'new_item_name' => 'Nouveau type',
	'menu_name' => 'Types',
); 	
                
register_taxonomy('type',array('faq'), array(
	'hierarchical' => true,
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'type', 'with_front' => false)
));  

?>