<?php
/*
Template Name: posts

*/
?>

<?php get_header(); ?>

<div id="content" role="main">

	<?php get_template_part( 'sidebar-2' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<?php toolbox_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'toolbox' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
			
			<?php endwhile; // end of the loop. ?>
	</article>
	<?php posts_nav_link(); ?>
	
</div><!-- #content -->

<?php get_footer(); ?>