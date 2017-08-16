<?php
/**
 * Template Name: News Story
 * Template Post Type: post
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

	<div class="news-post-div" role="main">
        <div class="main-article">
    <!--Title of Post-->
    <h1><?php the_title(); ?></h1>
    <small><?php the_time('F j, Y');?></small>
	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<!-- Featured Image	-->
		<div class="featured-image event-thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<!-- News Article -->
		<article <?php post_class('event-content') ?> id="post-<?php the_ID(); ?>">
			
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<?php the_content(); ?>
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</article>
    <?php do_action('back_button'); ?>
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>

<!--sidebar-->
<?php get_sidebar();?>
</div>

<?php get_footer();?>

