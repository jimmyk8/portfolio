<?php
/**
 * The page widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

if ( ! is_active_sidebar( 'page-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area page-widget">
	<?php dynamic_sidebar( 'page-1' ); ?>
</aside><!-- #secondary -->

