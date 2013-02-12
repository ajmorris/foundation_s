<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package foundation_s
 * @since foundation_s 1.0
 */
?>

	</div><!-- #main .site-main .row -->
    <div class="row">
    	<footer id="colophon" class="site-footer" role="contentinfo">
    		<div class="site-info">
    			<?php do_action( 'foundation_s_credits' ); ?>
    			<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'foundation_s' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'foundation_s' ), 'WordPress' ); ?></a>
    			<span class="sep"> | </span>
    			<?php printf( __( 'Theme: %1$s by %2$s.', 'foundation_s' ), 'foundation_s', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
    		</div><!-- .site-info -->
    	</footer><!-- #colophon .site-footer -->
    </div>
</div><!-- #page .hfeed .site .container -->

<?php wp_footer(); ?>

</body>
</html>