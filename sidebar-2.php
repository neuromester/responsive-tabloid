<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
			<div class="related">
				<?php 
				global $wp_query;
				$cat_ID = get_the_category($post->ID);
				$cat_ID = $cat_ID[0]->cat_ID;
				$this_post = $post->ID;
				query_posts(array('cat' => $cat_ID, 'post__not_in' => array($this_post), 'posts_per_page' => 3));
				?>
				<h4>More in <?php the_category(' '); ?></h4>
				<ul>
				<?php while(have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?>  
						<?php the_title(); ?></a> 
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
<?php endif; ?>
<?php wp_reset_query(); ?>