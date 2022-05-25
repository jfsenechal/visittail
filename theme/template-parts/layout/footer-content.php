<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package visittail
 */

?>

<footer id="colophon">
	<div>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'visittail' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'visittail' ), 'WordPress' );
			?>
		</a>
	</div>
</footer><!-- #colophon -->
