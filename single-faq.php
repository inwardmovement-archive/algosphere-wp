<?php
/**
 * Template Name: FAQ
 */

get_header(); ?>

	<div style="margin: auto; text-align: left;">	
		<h5 align="center"><?php echo the_title(); ?></h5>
			<br />
			<div style="width: 500px; margin: auto; text-align: justify;">	
				<ul class="fa-ul">
					<?php $args = array('post_type' => 'faq', 'posts_per_page' => 999);
					while ( have_posts() ) : the_post(); ?>
					  <p><?php echo the_content(); ?></p></li><br />
					<?php endwhile; ?>
				</ul>
			</div>
		
			<br /><br />
			
	</div>
	<br><br>
	
	<div id="fleche" class="left">
		<a href="../"><span id="textefleche"><i class="fa fa-angle-double-left fa-lg"></i>&nbsp;&nbsp;Foire aux questions</span></a>
	</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>