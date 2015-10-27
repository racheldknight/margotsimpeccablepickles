<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<!-- BEGIN PAGE PHP -->
		<?php dynamic_sidebar( 'home-widget1' ); ?>
		<?php dynamic_sidebar( 'home-widget2' ); ?>
		<?php dynamic_sidebar( 'home-widget3' ); ?>
		<?php dynamic_sidebar( 'home-widget4' ); ?>

<!-- END PAGE PHP -->

        </main><!-- .site-main -->
    </div><!-- .content-area -->