		<div id="secondary" class="widget-area" role="complementary">
			<h4 class="below">Recent News &raquo;</h4>
		<ul>
<?php
	$args = array( 'numberposts' => '5' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
<?php wp_reset_query(); ?>
		</div>