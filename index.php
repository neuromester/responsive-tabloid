<?php
get_header(); ?>
		<div id="content" role="main">
			<div class="page-content">
			<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
			<?php endwhile; ?>
			</div>
		</div>
			
<?php get_footer(); ?>