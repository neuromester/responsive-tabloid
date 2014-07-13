<?php
/*
Template Name: archive

To use the archive page, you'll need to make a page and choose the "archive" page template for it. You can name it whatever you want.
*/
?>

<?php
get_header(); ?>
		<div id="content" role="main">
			<div class="page-content">
			<header class="entry-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div id="archive">
		<h3 class="archives">By Month:</h3>
		<ul>
		<?php wp_get_archives('type=monthly'); ?>
		</ul>
		</div>
	</div><!-- .entry-content -->
			</div>
		</div>
			
<?php get_footer(); ?>