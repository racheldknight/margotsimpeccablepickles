<?php /* Template Name: Distribution */ ?>
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!-- BEGIN PAGE PHP -->
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
        			get_template_part( 'content', 'bottompic' );


    
                     
          

                endwhile;
               
 ?> 
        <div id="rtpannel">

        <?php dynamic_sidebar('distribution-widget');  ?>
        </div>
<!-- END PAGE PHP -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->



<?php get_footer(); ?>