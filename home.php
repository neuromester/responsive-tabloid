<?php get_header(); ?>

<div id="content" role="main">

<div id="above_fold">
	<div id="top_story">
		<?php query_posts('showposts=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
					<h1 class="home-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1>
					<?php the_post_thumbnail( $size, $attr ); ?></a>
						<div class="home-entry-meta">
							<?php the_date(); ?>
						</div>
									
					<div class="home-entry-content">
					</div>
			<?php endwhile; // end of the loop. ?>
	</div>
	
	<div id="column_2">
		<?php query_posts('showposts=3&offset=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="home-entry-header">
				<h1 class="home-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				
					<div class="home-entry-meta">
						<?php the_date(); ?>
					</div>
				</header>
							
				<div class="home-entry-content">
				<?php the_excerpt(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
	</div>
	
	<div id="np-wire">
	
		<h4>More News &raquo;</a></h4>
		
		<div id="np-wire-top">
			<?php query_posts('showposts=1&offset=4'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="home-entry-header">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(100,100)); ?>  
				<h1 class="home-entry-title"><?php the_title(); ?></a></h1>
				</header>
			<?php endwhile; // end of the loop. ?>
		</div>
		
		<div id="np-wire-rest">
			<?php query_posts('showposts=5&offset=5'); ?>
				<ul>
			<?php while ( have_posts() ) : the_post(); ?>
				<li><h1 class="home-entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></li>
			<?php endwhile; // end of the loop. ?>
				</ul>
		</div>
	</div>

</div>
	
	<div id="below-fold">

		<div id="below-fold-left">
		<h4 class="below">Even More News &raquo;</h4>
			<?php query_posts('showposts=5&offset=11'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="home-entry-header">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(100,100)); ?> 
				<h1 class="home-entry-title"><?php the_title(); ?></a></h1>
					<?php the_excerpt(); ?>
				</header>
							
				<div class="home-entry-content">
					<p class="more_in">More in <?php the_category(' '); ?> &raquo;</p>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
		
		<div id="below-fold-right">
			<h4 class="below">Most Popular &raquo;</h4>
		<ol>
			<?php $popularpost = new WP_Query( array( 'posts_per_page' => 10, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
			while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile;
			?>
		</ol>
		</div>
	</div>
</div> 

<?php get_footer(); ?>