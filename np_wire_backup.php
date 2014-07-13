
				<div id="np-wire-top">
				<?php query_posts('showposts=1&category_name=np-wire&offset=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="home-entry-header">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail();} ?>
			<h1 class="np-wire-top"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header><!-- .entry-header -->
			<?php endwhile; // end of the loop. ?>
			</article>
				</div>
			
				<div id="np-wire-rest">
				<?php query_posts('showposts=4&offset=2&category_name=np-wire'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="home-entry-header">
			<ul>
				<li><h1 class="np-wire"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></li>
			</ul>
			</header><!-- .entry-header -->
			<?php endwhile; // end of the loop. ?>
			</article>
				</div>