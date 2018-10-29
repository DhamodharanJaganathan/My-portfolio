<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nisarg
 */
?>
	</div><!-- #content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php echo '&copy; '.date( 'Y' ); ?>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'designed by ','Dhamodharan' ) ); ?>
			<a href=" <?php echo esc_url( __( 'http://www.dhamodharan.com', 'Dhamodharan' ) ); ?>" >Dhamodharan</a>
	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
