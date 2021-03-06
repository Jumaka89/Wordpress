<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Travel Trip Lite
 */

get_header(); ?>

<div class="site_container">
    <div id="context_navigation">
        <div class="theme_contentarea">
            <header class="page-header">
                <h1 class="entry-title"><?php esc_html_e( '404 Not Found', 'travel-trip-lite' ); ?></h1>                
            </header><!-- .page-header -->
            <div class="page-content">
                <p><?php esc_html_e( 'Looks like you have taken a wrong turn....Dont worry... it happens to the best of us.', 'travel-trip-lite' ); ?></p>  
            </div><!-- .page-content -->
        </div><!-- theme_contentarea-->   
        <?php get_sidebar();?>       
        <div class="clear"></div>
    </div>
</div>
<?php get_footer(); ?>