<?php
/*
Template Name: Liens
*/

get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div style="width: 500px; margin: auto; text-align: center;">	

	<h5><?php the_title() ?></h5>
	<br>
	<div class="liens-utiles">
	<?php wp_list_bookmarks('
		title_before=<h2>&
		title_after=</h2>&title_li=&category_before=&category_after=&show_description=0'); ?>
	</div>
</div>
		<br />
		
<?php endwhile; else: ?>
<p><?php _e('Pas de post correspondant.'); ?></p>
<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>