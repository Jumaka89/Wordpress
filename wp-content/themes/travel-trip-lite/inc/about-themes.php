<?php
/**
 * Travel Trip Lite About Theme
 *
 * @package Travel Trip Lite
 */

//about theme info
add_action( 'admin_menu', 'travel_trip_lite_abouttheme' );
function travel_trip_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'travel-trip-lite'), __('About Theme Info', 'travel-trip-lite'), 'edit_theme_options', 'travel_trip_lite_guide', 'travel_trip_lite_mostrar_guide');   
} 

//Info of the theme
function travel_trip_lite_mostrar_guide() { 	
?>
<div class="wrap-GT">
	<div class="gt-left">
   		<div class="heading-gt">
		 <h3><?php esc_html_e('About Theme Info', 'travel-trip-lite'); ?></h3>
		</div>
       <p><?php esc_html_e('Travel Trip Lite is a amazing, stunning, multipurpose and modern WordPress theme for tour and travel companies. This tour operator WordPress theme is the best platform to create beautiful and professional websites for travel agencies, tour operator and travel blogs. It can also be used to create awesome websites for adventures, vacation, resorts, hotels, events, cruises and other tourism related business.', 'travel-trip-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'travel-trip-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'travel-trip-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'travel-trip-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'travel-trip-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'travel-trip-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'travel-trip-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'travel-trip-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'travel-trip-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'travel-trip-lite'); ?></div>
</div>
<hr />  
</div><!-- .gt-left -->
	
<div class="gt-right">    
     <a href="http://www.gracethemesdemo.com/documentation/travel-trip/#homepage-lite" target="_blank"><?php esc_html_e('Documentation', 'travel-trip-lite'); ?></a>    
</div><!-- .gt-right-->
<div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>