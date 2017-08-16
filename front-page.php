<?php
/*
Template Name: Front
*/
get_header(); 
?>

<!-- Banner -->
<header class="front-banner" role="banner">
	<div class="front-banner-inner">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="button" href="#">Read More</a>
		</div>
	</div>
</header>

<!-- Take Action -->
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

<!-- News -->
<div class="front-news">
	<h2><a href="<?php echo get_permalink( get_page_by_title( 'news' ) ); ?>">News</a></h2>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php query_posts('category_name="news"&showposts=1');
	while (have_posts()) : the_post(); ?>
	<div class="content">
		<div class="card">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			<div class="card-section">
				<a href="<?php the_permalink(); ?>">
					<h5><?php the_title(); ?></h5>
				</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
	
	<?php query_posts('category_name="events"&showposts=1');
	while (have_posts()) : the_post(); ?>
	<div class="content">
		<div class="card">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			<div class="card-section">
				<a href="<?php the_permalink(); ?>">
					<h5><?php the_title(); ?></h5>
				</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
	
	<?php query_posts('category_name="donor-recognition"&showposts=1');
	while (have_posts()) : the_post(); ?>
	<div class="content">
		<div class="card">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
			<div class="card-section">
				<a href="<?php the_permalink(); ?>">
					<h5><?php the_title(); ?></h5>
				</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>

<?php get_footer();