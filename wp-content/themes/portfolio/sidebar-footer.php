<?php
/**
 * The sidebar containing the footer widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

if ( ! is_active_sidebar( 'footer-1' ) ) {
	return;
}
?>

<aside id="footer-widget-area" class="widget-area footer-widget">
	<?php dynamic_sidebar( 'footer-1' ); ?>
</aside><!-- #secondary -->
