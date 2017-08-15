<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

	<div class="social-container">
		<div class="social-content">
			<div class="brand">
				<img src="<?php echo bloginfo('template_url'); ?>/assets/images/logo-black.svg" alt="Homeless Humans of Tacoma">
			</div>
			<div class="newsletter">
				<h4>Sign up to receive updates from us</h4>
				<?php //if (function_exists('newsletter_form')) newsletter_form(); ?>
				<div class="">
					<form method="post" action="//localhost:3000/hhot/?na=s" onsubmit="return newsletter_check(this)">
						<div>
							<input class="newsletter-email" type="email" name="ne" placeholder="Your email address" required> <input class="newsletter-submit button small" type="submit" value="Subscribe">
						</div>
					</form>
				</div>
			</div>
			<div class="social">
				<h4>Connect with us</h4>
				<a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
			</div>
		</div>			
	</div>
	<div class="footer-container" data-sticky-footer>
		<footer class="footer">
			<?php do_action( 'foundationpress_before_footer' ); ?>
			<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php do_action( 'foundationpress_after_footer' ); ?>
			<section class="copy">
				<small>&copy; 2017 Homeless Humans of Tacoma. All Rights Reserved.</small>
			</section>
		</footer>
	</div>

	<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas content -->
	</div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:80/browser-sync/browser-sync-client.js?v=2.18.13'><\/script>".replace("HOST", location.hostname));
//]]></script>
<!--not working on chrome or correct port-->
</body>
</html>
