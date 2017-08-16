<?php
/*
Template Name: Accordion JS Style
*/

get_header();


get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		
		<?php		
		$post_ID = get_the_ID();
		endwhile;?>
	

<?php 
	
$groups = apply_filters('acf/get_field_groups', array(), array('post_id' => $post_ID));

	
//var_dump($groups);
	
$meta = get_post_meta($post_ID, 'Types');
//var_dump($meta[0]);
$counter = 0;
foreach ($groups as $group){
	if (strpos($meta[0], $group['title']) !== false){
	$counter += 1;
	$group_id = $group['id'];
	$fields = array();
	$fields = apply_filters('acf/field_group/get_fields', $fields, $group_id);
	//echo '<p>' . var_dump($group) . '</p>';
	if($counter%2!=0){
	echo '<div class="row" id="zebra">
		<div class="small-6 large-6 columns" id="group"><h5 id="group-title">' . $group['title'] . '</h5></div>
		<div class="small-6 large-6 columns">';
		
			foreach( $fields as $field ) {
			$value = get_field( $field['name'] );
			echo
		'<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true" id="zebra">
  		<li class="accordion-item" data-accordion-item>
    	<a href="#" class="accordion-title">' . $field['label'] . '</a>
    	<div class="accordion-content" data-tab-content>' . $value . '
    		</div>
  			</li>
			</ul>';}
			echo
			'</div>
			</div>';}
	elseif($counter%2==0){
		echo '<div class="row">
		<div class="small-6 large-6 columns" id="group"><h5 id="group-title">' . $group['title'] . '</h5></div>
		<div class="small-6 large-6 columns">';
		
			foreach( $fields as $field ) {
			$value = get_field( $field['name'] );
			echo
		'<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">
  		<li class="accordion-item" data-accordion-item>
    	<a href="#" class="accordion-title">' . $field['label'] . '</a>
    	<div class="accordion-content" data-tab-content>' . $value . '
    		</div>
  			</li>
			</ul>';}
			echo
			'</div>
			</div>';
		
	}
	}}

	
	?>


<?php get_footer();