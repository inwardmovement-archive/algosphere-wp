<?php 
require('panel-info.php');

// Framework Grafikart
	require TEMPLATEPATH.'/framework/theme.php';
	$theme = new Theme(array(
		'help'    => false,
		'menus'   => array(
			'nav1' => 'Menu Principal',
			'nav2' => 'Menu Secondaire'
			),
		'sidebar' => array(
			'Pied de page'      => array(
				'before_widget' => '',
				'after_widget'  => '',
				'before_title'  => '<h4>',
				'after_title'   => '</h4>'
				)
			),
		'types'   => array('faq')
	));
	
// Active le Link Manager
add_filter( 'pre_option_link_manager_enabled', '__return_true' );

// Charge la feuille de style corrective pour IE
wp_enqueue_style( 'algo-public-ie', get_template_directory_uri() . '/style-ie.css');
wp_style_add_data( 'algo-public-ie', 'conditional', 'lt IE 10' );

// Sélecteur de langues (si plugin WPML activé)
function language_selector_flags(){
    $languages = icl_get_languages('skip_missing=1&orderby=custom');
    if(!empty($languages)){
        foreach($languages as $l){
            if($l['active'])
				echo '<li><a href="'.$l['url'].'"><img src="<?php bloginfo(\'template_directory\'); ?>/css/img/drapeau/'.$l['language_code'].'.png" alt="'.$l['language_code'].'"></a><ul>'; 
			elseif(!$l['active'])
				echo '<li><a href="'.$l['url'].'" title="'.$l['native_name'].'"><img src="'.$l['country_flag_url'].'" alt="'.$l['language_code'].'"></a></li>';
		}
		echo '</ul></li>';
    }
}

// Masque la toolbar Wordpress si pas admin
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
	if (!current_user_can('administrator') && !is_admin()) {
	  show_admin_bar(false);
	}
}



?>