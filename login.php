<?php
/**
 * Template Name: Connexion
 */
?>
<?php
$error = false;
if(!empty($_POST)) {
	$user = wp_signon($_POST);
	if(is_wp_error($user)) {
		$error = $user->get_error_message();
	}
	
	else {
		header('Location: index.php');
	}
}

$user = wp_get_current_user();
if($user->ID != 0) {
	header('Location: index.php');
}
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
			
			</ul>
		  </div>
		  <!--/.nav-collapse --> 
		</div>
		<!-- /container --> 
	  </div>
	  <!-- /navbar-inner --> 
	</div>
	<!-- /navbar -->
			
		<!-- <div class="alert alert-success" style="text-align: center;">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <p><strong>Inscription réussie !</strong><br />
		  Votre mot de passe vous a été envoyé par mail.</p>
		</div> -->
		<br>
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php if($error) : ?>
			<div class="alert alert-error" style="text-align: center;">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <p><?php echo $error; ?></p>
			</div>
			<br>
		<?php endif ?>
		 
		<div class="alert alert-info" style="text-align: center;">
		  <p><strong><?php echo get_post_meta($post->ID, 'login-pas-inscrit', true); ?></strong><br><br>
		  <a class="btn btn-success" href="register.php" tabindex="6"><?php echo get_post_meta($post->ID, 'login-inscription', true); ?></a></p>
		</div>

<div class="account-container">
	<div class="content clearfix">
		<form action="<?php echo $_SERVER['$REQUEST_URI']; ?>" method="post">
		<!-- action = <?php echo $_SERVER['$REQUEST_URI']; ?> -->
		
			<h1><?php the_title(); ?></h1>		
			<div class="login-fields">
				<p><?php echo get_post_meta($post->ID, 'login-info', true); ?></p>
				
				<div class="field">
					<input type="text" id="user_login" name="user_login" value="" placeholder="<?php echo get_post_meta($post->ID, 'login-identifiant', true); ?>" class="login username-field" tabindex="1"/>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="password" id="user_password" name="user_password" value="" placeholder="<?php echo get_post_meta($post->ID, 'login-motdepasse', true); ?>" class="login password-field" tabindex="2"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="remember" name="remember" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="3"/>
					<label class="choice" for="remember"><?php echo get_post_meta($post->ID, 'login-souvenir', true); ?></label>
				</span>
				<br /><br /><br />
					
				<div style="text-align: center;">
					<input class="btn btn-large btn-info" type="submit" name="pseudo" value="<?php the_title(); ?>" tabindex="4">
				</div>
				
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->
</div> <!-- /account-container -->

<div class="login-extra">
	<a href="#" tabindex="5"><?php echo get_post_meta($post->ID, 'login-motdepasseoublie', true); ?></a>
</div> <!-- /login-extra -->

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
