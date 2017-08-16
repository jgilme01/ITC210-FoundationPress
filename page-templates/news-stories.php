<?php
/**
Template Name: News Page
 */

get_header(); ?>

<?php //get_template_part( 'template-parts/featured-image' ); ?>


<?php $backImg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );?>
<header class="entry-title-header" style="background-image: url('<?php echo $backImg[0]; ?>');">
	<h1 class="entry-title news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
</header>

<div class="main-wrap" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php 
query_posts( array(
	'category_name'  => 'news',
	'posts_per_page' => 3
) );
while ( have_posts() ) : the_post(); ?>
	<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
	<div class="news">
		<div class="news-card">
			<a href="<?php the_permalink() ?>">
				<?php if ( has_post_thumbnail() ) { ?>
                <h3><?php the_title(); ?></h3>
				<div class="news-story-thumbnail">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="news-section">
					<h5><?php echo get_the_date(); ?></h5>
				</div>
			</a>
		</div>
  
	</div>
   
        
    
<?php endwhile;?>


<?php do_action( 'foundationpress_after_content' ); ?> 

<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

<!--pagination
    
    <ul class="pagination pagination-circular" role="navigation" aria-label="Pagination">
            <li class="disabled">« <span class="show-for-sr">Previous page</span></li>
            <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
            <li><a href="#" aria-label="Page 2">2</a></li>
            <li><a href="#" aria-label="Page 3">3</a></li>
            <li><a href="#" aria-label="Page 4">4</a></li>
            <li><a href="#" aria-label="Page 5">5</a></li>
            <li><a href="#" aria-label="Next page">» <span class="show-for-sr">Next page</span></a></li>
    </ul>

</div>-->

<?php get_footer();
