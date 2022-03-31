<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Travel Trip Lite
 */

get_header(); 
?>
<div class="site_container">
     <div id="context_navigation">
        <div class="theme_contentarea <?php if( esc_attr( get_theme_mod( 'travel_trip_lite_hidesidebar_from_homepage' )) || esc_attr( get_theme_mod( 'travel_trip_lite_gridwithoutsidebar' )) ) { ?>fullwidth<?php } ?>">
        	 <div class="postlayout_basic <?php if( esc_attr( get_theme_mod( 'travel_trip_lite_gridtypepostwithsidebar' )) ) { ?>gridlayout<?php } ?>">
					<?php
                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();
                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content' );
                    
                        endwhile;						
                        // Previous/next post navigation.
                        the_posts_pagination();
                    
                    else :
                        // If no content, include the "No posts found" template.
                         get_template_part( 'no-results' );
                    
                    endif;
                    ?>
              </div><!-- postlayout_basic -->
                   
             </div><!-- theme_contentarea-->   
           <?php if( esc_attr( get_theme_mod( 'travel_trip_lite_hidesidebar_from_homepage' )) || esc_attr( get_theme_mod( 'travel_trip_lite_gridwithoutsidebar' )) == '') { ?> 
          		<?php get_sidebar();?>
        	<?php } ?>  
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- content -->
<?php get_footer(); ?>