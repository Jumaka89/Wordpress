<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Travel Trip Lite
 */
 
?>

<div class="site-footer">
         
    <div class="site_container fixfooter">
      <div class="footer_holder">
          <?php if ( is_active_sidebar( 'footer-widget-column-1' ) ) : ?>
                <div class="widget-column-1">  
                    <?php dynamic_sidebar( 'footer-widget-column-1' ); ?>
                </div>
           <?php endif; ?>
          
          <?php if ( is_active_sidebar( 'footer-widget-column-2' ) ) : ?>
                <div class="widget-column-2">  
                    <?php dynamic_sidebar( 'footer-widget-column-2' ); ?>
                </div>
           <?php endif; ?>
           
           <?php if ( is_active_sidebar( 'footer-widget-column-3' ) ) : ?>
                <div class="widget-column-3">  
                    <?php dynamic_sidebar( 'footer-widget-column-3' ); ?>
                </div>
           <?php endif; ?> 
           
           <?php if ( is_active_sidebar( 'footer-widget-column-4' ) ) : ?>
                <div class="widget-column-4">  
                    <?php dynamic_sidebar( 'footer-widget-column-4' ); ?>
                </div>
           <?php endif; ?>          
           
           <div class="clear"></div>
        </div><!--.footer_holder-->
      </div><!--.fixfooter-->




        <div class="copyrigh-wrapper"> 
            <div class="site_container">               
                <div class="left_fter">
				   <?php bloginfo('name'); ?> - <?php esc_html_e('Theme by Grace Themes','travel-trip-lite'); ?>  
                </div>
                <div class="menu_fter"><?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?></div>
                <div class="clear"></div>                                
             </div><!--end .site_container-->             
        </div><!--end .copyrigh-wrapper-->  
                             
     </div><!--end #site-footer-->
</div><!--#end templatelayout-->
<?php wp_footer(); ?>
</body>
</html>