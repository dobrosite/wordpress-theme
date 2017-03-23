<?php
/**
 * Шаблон боковой панели с главной областью виджетов.
 *
 * @copyright 2017, Добро.сайт, http://добро.сайт/
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since     1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="site__sidebar site__sidebar_primary widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
