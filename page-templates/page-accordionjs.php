<?php
/*
Template Name: Accordion JS Style
*/

get_header();


get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<!--<article <?php //post_class('main-content') ?> id="post-<?php //the_ID(); ?>">-->
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		
		<?php		
		$post_ID = get_the_ID();
		endwhile;?>
	<!--</article>-->
	
<?php /*
	$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name . ' '; 
  }
}
	*/?>


<?php 
	
$acf_field_group = new acf_field_group();
$groups = $acf_field_group->get_field_groups();
	
	//var_dump($groups);
	
foreach ($groups as $group){
	$group_id = $group['id'];
	$fields = array();
	$fields = apply_filters('acf/field_group/get_fields', $fields, $group_id);
	echo '<div class="row">
		<div class="small-6 large-6 columns" id="group"><h3 id="group-title">' . $group['title'] . '</h3></div>
		<div class="small-6 large-6 columns">';
		
			foreach( $fields as $field ) {
			$value = get_field( $field['name'] );
			echo
		'<ul class="accordion" data-accordion>
  		<li class="accordion-item" data-accordion-item>
    	<a href="#" class="accordion-title">' . $field['label'] . '</a>
    	<div class="accordion-content" data-tab-content>
      	<div id="map">' . $value . '</div>
    		</div>
  			</li>
			</ul>';}
			echo
			'</div>
			</div>';}
	
	?>


<?php get_footer();