<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<!-- BEGIN PAGE PHP -->
		<div id="ltpannel">
		<?php dynamic_sidebar( 'home-widget1' ); ?>
		<?php dynamic_sidebar( 'home-widget2' ); ?>
        </div>
        <div id="rtpannel">
		<?php dynamic_sidebar( 'home-widget3' ); ?>
		<?php dynamic_sidebar( 'home-widget4' ); ?>
        </div>
        
<!-- END PAGE PHP -->

        </main><!-- .site-main -->
    </div><!-- .content-area -->
	
	
<?php get_footer(); ?>