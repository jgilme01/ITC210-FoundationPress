<?php
/*
Template Name: Front
*/
get_header(); 
?>

<header class="front-banner" role="banner">
	<div class="front-banner-inner">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="button" href="#">Read More</a>
		</div>
	</div>
</header>

<div class="take-action">
	<div class="take-action-inner">
		<h2>Be the Change</h2>
		<div class="volunteer">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/images/front/volunteer.svg" alt="Volunteer">
			<a role="button" class="button small" href="<?php echo get_permalink( get_page_by_title( 'volunteer' ) ); ?>">Volunteer</a>
		</div>
		<div class="donate">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/images/front/donate.svg" alt="Donate">
			<a role="button" class="button small" href="<?php echo get_permalink( get_page_by_title( 'donate' ) ); ?>">Donate</a>
		</div>
		<div class="gift">
			<img src="<?php echo bloginfo('template_url'); ?>/assets/images/front/gift.svg" alt="Gift">
			<a role="button" class="button small" href="<?php echo get_permalink( get_page_by_title( 'donation needs' ) ); ?>">Gift</a>
		</div>
	</div>
</div>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>
	</div>
</section>

<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>

<?php get_footer();