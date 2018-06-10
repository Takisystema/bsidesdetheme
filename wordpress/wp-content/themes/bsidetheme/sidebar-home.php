<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bsidetheme
 */

if ( ! is_active_sidebar( 'home' ) ) {
	return;
}
?>

<div class="cf-text-box">
	<h1>About</h1>
		<?php dynamic_sidebar( 'home' ); ?>
</div>
