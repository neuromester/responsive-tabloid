<?php get_header(); ?>

	<div id="content" role="main">		

		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php wpb_set_post_views(get_the_ID()); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
				<header class="entry-header">

                                <div id="kicker">
					<h3><?php the_category(); ?></h3>
				</div>	
	
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-meta">
						<?php the_time('F jS, Y') ?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
		<div class="article-tags">
<h4>In this article:</h4>
		<?php
		if(get_the_tag_list()) {
		    echo get_the_tag_list('<ul><li>','</li><li>','</li></ul>');
		}
		?>
<div class="text-size">
<p class="choose-text-size">Article Text Size:</p>
<p class="text-choices"><a id="smaller-text">A</a><a id="normal-text">A</a><a id="larger-text">A</a></p>
</div>
		</div>
				<div class="entry-content">
					<?php the_content(); ?>
				</div><!-- .entry-content -->

		<div class="nav-below">
					<div class="nav-previous">
					<?php previous_post_link(); ?>
					</div>
					<div class="nav-next">
					<?php next_post_link(); ?>
					</div>
		</div>

		<?php endwhile; // end of the loop. ?>

		<div class="related">
				<?php 
				global $wp_query;
				$cat_ID = get_the_category($post->ID);
				$cat_ID = $cat_ID[0]->cat_ID;
				$this_post = $post->ID;
				query_posts(array('cat' => $cat_ID, 'post__not_in' => array($this_post),'meta_key' => '_thumbnail_id', 'posts_per_page' => 3));
				?>
				<h4>More in <?php the_category(' '); ?> &raquo;</h4>
				<ul>
				<?php while(have_posts()) : the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(200,200)); ?>  
						<?php the_title(); ?></a> 
					</li>
				<?php endwhile; ?>
				</ul>
		</div>	

			</article>
	
	</div><!-- #content -->

<?php get_footer(); ?>