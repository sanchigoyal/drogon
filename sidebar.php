<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Drogon
 */

if ( ! is_active_sidebar( 'drogon-sidebar' ) ) {
	return;
}
?>

<div id="primary-sidebar" class="widget-area">
	<?php dynamic_sidebar( 'drogon-sidebar' ); ?>
</div>