<?php
/* Plugin Name: My Plugin 
Plugin URI: plugin url
Description: Basic WordPress Plugin Custom Post Type
Version: 1.0
Author:
Author name Author URI:
Author URL License: GPL2 License URI: Licence URL */


function custom_setup_post_type() 

{ $args = array( 'public' => true,
        'label'     => __( 'Custom Post', 'textdomain' )
    );
    register_post_type( 'custom_post', $args );
}
add_action( 'init', 'custom_setup_post_type' );


add_shortcode( 'custom-post-list', 'custom_post_listing' );


function custom_post_listing( $atts ) {
	ob_start();
	$args=array(
      'post_type' => 'custom_post', // Post Type Slug
      'posts_per_page' => -1, // Show All
	  'order'=> 'ASC'
    );
	    $new = new WP_Query($args);
    while ($new->have_posts()) : $new->the_post();?>
	
	

	<div class="col-md-4">
		<div class="item">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		</div>
	</div>	
	
	
	<?php endwhile;
}
	
	?>