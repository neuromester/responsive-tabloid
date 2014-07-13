<?php get_header(); ?>

<div id="content" role="main">
	<div class="page-content">
	
		<div id="kicker">
		<h3>Category: <?php single_cat_title(); ?></h3>
		</div>		
<?php while ( have_posts() ) : the_post(); ?>
			
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php the_time('F jS, Y') ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

		<?php endwhile; // end of the loop. ?>
	</div>		
		<div class="category_nav"> 
			<?php next_posts_link('&laquo; Older Entries'); ?> &#124; <?php previous_posts_link('Newer Entries &raquo;'); ?>	
		</div>
	
</div><!-- #content -->

<?php get_footer(); ?>