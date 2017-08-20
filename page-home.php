<?php
/**
 * Template Name: Home
 */
 
get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="deuxcolonnes">
		<?php echo get_post_meta($post->ID, 'home-1', true); ?>
		<?php echo get_post_meta($post->ID, 'home-2', true); ?>
	</div>
		<br /><br /><br />
	<div class="deuxcolonnes">

		<?php echo get_post_meta($post->ID, 'home-3', true); ?>
		<?php echo get_post_meta($post->ID, 'home-4', true); ?>
	</div>
	<br /><br />
		
	<?php echo get_post_meta($post->ID, 'home-5', true); ?>

	<div id="fleche" class="right">
		<?php
			$titre_page_suivante = get_post_meta($post->ID, 'page-suivante', true); 
			if(!$titre_page_suivante) {}
			else {
				$page_suivante = get_page_by_title($titre_page_suivante);
				$id_page_suivante = $page_suivante->ID; 
				$lien_page_suivante = get_page_link($id_page_suivante); ?>
					<a href="<?php echo $lien_page_suivante; ?>"><span id="textefleche"><?php echo $titre_page_suivante; ?>&nbsp;&nbsp;</span><i class="fa fa-angle-double-right fa-lg"></i></a>
		<?php } ?>	
	</div>
		
<?php endwhile; else: ?>
<p><?php _e('Pas de post correspondant.'); ?></p>
<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>