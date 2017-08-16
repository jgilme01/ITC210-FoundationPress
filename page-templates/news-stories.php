<?php
/**
Template Name: News Page
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>


<?php $backImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
<header class="entry-title-header" style="background-image: url('<?php echo $backImg[0]; ?>');">
	<h1 class="entry-title events-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</header>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php 
query_posts( array(
	'category_name'  => 'news',
	'posts_per_page' => -1
) );
while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	<div class="news">
		<div class="news-card">
			<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="news-story-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<?php } ?>
				<div class="news-section">
					<h3><?php the_title(); ?></h3>
					<h4><?php echo get_the_date(); ?></h4>
				</div>
			</a>
		</div>
	</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
