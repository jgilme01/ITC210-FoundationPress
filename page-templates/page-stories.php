<?php
/*
 * Template Name: Stories
 */

get_header(); ?>	

<?php $backImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
<header class="entry-title-header" style="background-image: url('<?php echo $backImg[0]; ?>');">
	<h1 class="entry-title"><?php the_title(); ?></h1>
</header>

<div class="humans" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>
	<?php 
	query_posts( array(
		'category_name'  => 'Stories',
		'posts_per_page' => 5
	) );
	
	while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
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
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();