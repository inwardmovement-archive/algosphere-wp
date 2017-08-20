<?php
/**
 * Template Name: Inscription
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title('-','true','right'); bloginfo('name'); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php bloginfo('template_directory'); ?>/css/login/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/login/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/login/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/css/login/signin.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_directory'); ?>/css/login/font-awesome.css" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/css/img/algo.png" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/login/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/login/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/login/signin.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>

<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container">
			<a class="brand"><?php bloginfo('name'); ?></a>
		  <div class="nav-collapse">
			<ul class="nav pull-right">
				<!-- boutons droite -->
					<!-- <a class="btn btn-info" href="connexion.php">Connexion</a> -->
			</ul>
		  </div>
		  <!--/.nav-collapse --> 
		</div>
		<!-- /container --> 
	  </div>
	  <!-- /navbar-inner --> 
	</div>
	<!-- /navbar -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="span6" style="margin-top: 60px; margin-bottom: 15px;">     		
	      		<div class="widget">
	      			<div class="widget-content">
	      				<?php the_content(); ?>
		      		</div> <!-- /widget-content -->
		      		
	      		</div> <!-- /widget -->
	      		
      		</div> <!-- /span6 -->
			

<div class="account-container-inscription register">
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1><?php the_title(); ?></h1>			
			<div class="login-fields">
				<p><?php echo get_post_meta($post->ID, 'register-creer-un-compte', true); ?> :</p>
				<div class="field">
					<input type="text" id="id" name="id" value="" placeholder="<?php echo get_post_meta($post->ID, 'register-identifiant', true); ?>" class="login" tabindex="1"/>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="text" id="email" name="email" value="" placeholder="<?php echo get_post_meta($post->ID, 'register-email', true); ?>" class="login" tabindex="2"/>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="text" id="langue" name="langue" value="" placeholder="<?php echo get_post_meta($post->ID, 'register-langue', true); ?>" class="login" tabindex="3"/>
				</div> <!-- /field -->
				
				<p><?php echo get_post_meta($post->ID, 'register-si-contact', true); ?> :</p>
				<div class="field">
					<input type="text" id="contact" name="contact" value="" placeholder="<?php echo get_post_meta($post->ID, 'register-contact', true); ?>" class="login" tabindex="4"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			<div class="login-actions">
							<br />		
				<div style="text-align: center;">
				<a href="login.php" class="btn btn-success btn-large" tabindex="5"><?php the_title(); ?></a>
				</div>
				
			</div> <!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->

<?php endwhile; else: ?>
<p><?php _e('Pas de page correspondante.'); ?></p>
<?php endif; ?>

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="<?php bloginfo('template_directory'); ?>/js/login/jquery-1.7.2.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/login/excanvas.min.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/login/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/login/base.js"></script> 
<?php wp_footer(); ?>

</body>
</html>
