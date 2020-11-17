<?php
/* Template Name:  Slider */
get_header();

?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-4.1.3.min.css">       
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.min.css">
		
		<!-- Font Icon CSS -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/linearicons.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		
		<!-- Owl Carousel CSS --> 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
        
		
        <!-- Style CSS -->
        <link rel="stylesheet"type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet"type="text/css" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">



<h2>Slider</h2>



<div class="slider-container">
			<div class="owl-carousel owl-theme home-slider">
				<?php 
				$args = array(  
					'post_type' => 'slider',
					'post_status' => 'publish',
					'posts_per_page' => 4, 
					
					'order' => 'ASC', 
				); 

				$loop = new WP_Query( $args ); 
					
				while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<!--slider-post-->
				<div class="slider-post slider-item-box-bkg">
					<div class="slider-img" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
					<div class="container slider-caption">
						<div class="slider-text">							
							<!-- <div class="green-box">Plot Holders LLC</div> -->
							<h2><?php the_title(); ?></h2>
							<p><?php echo wp_trim_words(get_the_content(), 20, ''); ?></p>
						</div>
					</div>
					<!--slider-caption-->
				</div>
				<?php endwhile;

			wp_reset_postdata();  ?>
		
				<!--slider-post-->
			</div>
</div>











<?php
get_footer();

?>


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/wow.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/script-all.js"></script>	