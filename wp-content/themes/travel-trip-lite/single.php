<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Travel Trip Lite
 */

get_header(); ?>

<div class="site_container">
     <div id="context_navigation">
        <div class="theme_contentarea <?php if( esc_attr( get_theme_mod( 'travel_trip_lite_hidesidebar_singlepost' )) ) { ?>fullwidth<?php } ?>">            
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', 'single' ); ?>
                    <?php the_post_navigation(); ?>
                    <div class="clear"></div>
                    <?php
                    // If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                    ?>
                <?php endwhile; // end of the loop. ?>                  
         </div>  <!-- .theme_contentarea-->        
          <?php if( esc_attr(get_theme_mod( 'travel_trip_lite_hidesidebar_singlepost' )) == '') { ?> 
          	  <?php get_sidebar();?>
          <?php } ?>       
        <div class="clear"></div>
    </div><!-- #context_navigation -->
</div><!-- site_container -->	
<?php get_footer(); ?>