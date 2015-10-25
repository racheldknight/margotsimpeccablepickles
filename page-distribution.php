<?php /* Template Name: Distribution */ ?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- BEGIN PAGE PHP -->
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
        			get_template_part( 'content', 'page' );


    
                     
          

                endwhile;
                dynamic_sidebar('distribution-widget'); 
 ?>
<!-- END PAGE PHP -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->



<?php get_footer(); ?>