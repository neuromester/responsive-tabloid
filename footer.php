	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Home</a>
			<?php do_action( 'toolbox_credits' ); ?>
			<span class="sep"> | </span>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
</body>
</html>