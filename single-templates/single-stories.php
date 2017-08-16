<?php
/**
 * Template Name: Featured Story
 * Template Post Type: post
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- Story -->
<div class="story">
	<div class="story-inner" role="main">
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Featured Image	-->
		<div class="featured-image">
			<?php the_post_thumbnail('medium'); ?>
		</div>
		<!-- Story -->
		<article <?php post_class('story-content') ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<?php the_content(); ?>
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
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
		</article>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
</div>

<!-- More Stories -->
<div class="more-stories">
	<div class="more-stories-inner">
		<header>
			<h2>More Stories</h2>
		</header>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php query_posts(array(
		'showposts' => 3,
		'orderby' => 'rand',
		'category_name' => 'Stories',
		'post__not_in' => array( $post->ID )
	)); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="human">
			<div class="card">
				<a href="<?php the_permalink() ?>">
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="story-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<?php } ?>
					<div class="card-section">
						<h3><?php the_title(); ?></h3>
					</div>
				</a>
			</div>
		</div>
	<?php endwhile; ?>
	<?php wp_reset_query(); ?>
	<?php do_action( 'foundationpress_after_content' ); ?>


	</div>
</div>
<?php get_footer();