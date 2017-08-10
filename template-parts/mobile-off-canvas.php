<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-right" id="<?php foundationpress_mobile_menu_id(); ?>" data-off-canvas data-position="right" data-auto-focus="false" role="navigation">
  <?php foundationpress_mobile_nav(); ?>
	<aside><?php get_search_form(); ?></aside>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
