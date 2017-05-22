<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Quatro_Rodas
 * @since Quatro Rodas
 */
?>
	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Quatro Rodas footer text for footer customization.
				 *
				 * @since Quatro Rodas
				 */
				do_action( 'twentyfifteen_credits' );
			?>
			<a href="<?php echo esc_url( __( 'http://www.adrianonakamura.com.br/', 'quatro_rodas' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'quatro_rodas' ), 'Adriano K. Nakamura' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>