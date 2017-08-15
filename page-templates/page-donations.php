<?php
/**
Template Name: Donations Page
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>


<?php $backImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
<header class="entry-title-header" style="background-image: url('<?php echo $backImg[0]; ?>');">
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</header>

<?php if(have_posts()): while(have_posts()):the_post();?>
<?php the_content();?>
<?php endwhile; endif; ?>




<?php get_footer();