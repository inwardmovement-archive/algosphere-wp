<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<!-- META -->
	<title><?php wp_title('-','true','right'); bloginfo('name'); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="description" content="Alliance pour l'allègement de la souffrance" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
		
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/img/algo.png" />
		<!--[if gte IE 9]>
		<style type="text/css">
		.gradient {filter: none;}
		</style>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
		<![endif]-->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/kickstart.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.1.1.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script> <!-- Resource jQuery -->
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.js"></script> <!-- Modernizr -->

		<!-- jQuery library (served from Google) -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- bxSlider Javascript file -->
		<script src="/js/jquery.bxslider.min.js"></script>

		<!-- Background pattern from subtlepatterns.com -->
		<!-- This website was built with HTML KickStart (http://www.99lime.com/elements/) -->
		<!-- Icons from Font Awesome (http://fortawesome.github.io/Font-Awesome/) -->
		<?php wp_head(); ?>
</head>
	
<body>
	<div class="margeheader">
		<header>
			<!-- Sélecteur de langues -->
				<?php // Si WPML est actif, appelle la fonction du plugin
					if (!function_exists('is_plugin_active_for_network') || !function_exists('is_plugin_active')) {
						require_once( ABSPATH . '/wp-admin/includes/plugin.php' );
					}
					 
					if (is_plugin_active_for_network('sitepress-multilingual-cms/sitepress.php') || is_plugin_active('sitepress-multilingual-cms/sitepress.php')) { ?>
						<ul id="langue">
							<?php language_selector_flags();  ?>
						</ul>
					<?php }
					
					// Sinon affiche la structure de base du sélecteur
					else { ?>
						<ul id="langue">
							<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/css/img/drapeau/fr.png" alt="fr"></a>
								<ul>
									<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/css/img/drapeau/uk.png" alt="uk"></a></li>
									<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/css/img/drapeau/de.png" alt="de"></a></li>
									<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/css/img/drapeau/es.png" alt="es"></a></li>
								</ul>
							</li>
						</ul>
					<?php }
				?>

				<!-- Titres -->
					<h6>ALLIANCE</h6>
					<h1><?php bloginfo('name'); ?></h1>
					<h5><?php bloginfo('description'); ?></h5>
		</header>
	</div>

	<?php $menucourant = 'textesofficiels'; ?>
	
<div class="margeheader">
	<nav>
		<?php wp_nav_menu(array(
			'theme_location' => 'nav1'
			)
		); ?>
	</nav>
	<nav>
			<?php wp_nav_menu(array(
				'theme_location' => 'nav2',
				'menu_id' => 'connexion',
				'items_wrap' => '<div id="connexion">%3$s</div>'
				)
			); ?>

	</nav>
</div>

	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">

				<div id="content">
					<div class="post">
			
					<!-- Pagination -->
						<ul class="breadcrumbs">
						<li><span>Site public</span></li>
						<li><span><?php if(is_post_type_archive()) {echo post_type_archive_title();} else {echo get_the_title();} ?></span></li>
						</ul>
					<!-- /Pagination -->