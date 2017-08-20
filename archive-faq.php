<?php
/**
 * Template Name: FAQ
 */

get_header(); ?>

	<div style="margin: auto; text-align: left;">	
		<h5 align="center">Questions fréquentes</h5>
			<br />
			<div class="faq">
				<ul class="fa-ul">
					<?php $args = array('post_type' => 'faq', 'posts_per_page' => 999);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); ?>
					  <li><h6><i class="fa fa-li fa-asterisk"></i> <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h6>
					  <p><?php echo the_content(); ?></p></li><br />
					<?php endwhile; ?>
				</ul>
			</div>
			<br /><br />
	</div>
		
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>