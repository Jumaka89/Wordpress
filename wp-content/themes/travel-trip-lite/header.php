<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="site_container">
 *
 * @package Travel Trip Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	} else {
		do_action( 'wp_body_open' );
	}
?>
<a class="skip-link screen-reader-text" href="#context_navigation">
<?php esc_html_e( 'Skip to content', 'travel-trip-lite' ); ?>
</a>
<?php
$travel_trip_lite_show_headerslider 	      		= esc_attr( get_theme_mod('travel_trip_lite_show_headerslider', false) );
$travel_trip_lite_show_headercontact_sections 	   	= esc_attr( get_theme_mod('travel_trip_lite_show_headercontact_sections', false) ); 
$travel_trip_lite_show_hdrsocialpanel  				= esc_attr( get_theme_mod('travel_trip_lite_show_hdrsocialpanel', false) ); 
$travel_trip_lite_show_fourpageboxes_panel   		= esc_attr( get_theme_mod('travel_trip_lite_show_fourpageboxes_panel', false) );
$travel_trip_lite_show_AboutsUsPage              	= esc_attr( get_theme_mod('travel_trip_lite_show_AboutsUsPage', false) ); 
?>
<div id="templatelayout" <?php if( get_theme_mod( 'travel_trip_lite_boxlayoutoptions' ) ) { echo 'class="boxlayout"'; } ?>>
<?php
if ( is_front_page() && !is_home() ) {
	if( !empty($travel_trip_lite_show_headerslider)) {
	 	$inner_cls = '';
	}
	else {
		$inner_cls = 'siteinner';
	}
}
else {
$inner_cls = 'siteinner';
}
?>

<div class="site-header <?php echo esc_attr($inner_cls); ?> ">  
        <div class="site_container">
          <div class="topinfostyle">
        <?php if( $travel_trip_lite_show_headercontact_sections != ''){ ?>         
          <div class="leftpart">            
          <?php $travel_trip_lite_header_contactno = get_theme_mod('travel_trip_lite_header_contactno');
               if( !empty($travel_trip_lite_header_contactno) ){ ?>              
                 <div class="infobox">
                     <i class="fas fa-phone-volume"></i>               
                     <span><?php echo esc_html($travel_trip_lite_header_contactno); ?></span>   
                 </div>       
         <?php } ?>          
         
         <?php 
            $email = get_theme_mod('travel_trip_lite_header_emailno');
               if( !empty($email) ){ ?>                
                 <div class="infobox">
                     <i class="fas fa-envelope-open-text"></i>
                     <span>
                        <a href="<?php echo esc_url('mailto:'.sanitize_email($email)); ?>"><?php echo sanitize_email($email); ?></a>
                    </span> 
                </div>            
         <?php } ?> 
         </div><!--end .leftpart-->
      <?php } ?>    
           
            
         <?php if( $travel_trip_lite_show_hdrsocialpanel != ''){ ?>                
                    <div class="topsocial_icons">                                                
					   <?php $travel_trip_lite_fblink = get_theme_mod('travel_trip_lite_fblink');
                        if( !empty($travel_trip_lite_fblink) ){ ?>
                        <a class="fab fa-facebook-f" target="_blank" href="<?php echo esc_url($travel_trip_lite_fblink); ?>"></a>
                       <?php } ?>
                    
                       <?php $travel_trip_lite_twlink = get_theme_mod('travel_trip_lite_twlink');
                        if( !empty($travel_trip_lite_twlink) ){ ?>
                        <a class="fab fa-twitter" target="_blank" href="<?php echo esc_url($travel_trip_lite_twlink); ?>"></a>
                       <?php } ?>
                
                      <?php $travel_trip_lite_inlink = get_theme_mod('travel_trip_lite_inlink');
                        if( !empty($travel_trip_lite_inlink) ){ ?>
                        <a class="fab fa-linkedin" target="_blank" href="<?php echo esc_url($travel_trip_lite_inlink); ?>"></a>
                      <?php } ?> 
                      
                      <?php $travel_trip_lite_iglink = get_theme_mod('travel_trip_lite_iglink');
                        if( !empty($travel_trip_lite_iglink) ){ ?>
                        <a class="fab fa-instagram" target="_blank" href="<?php echo esc_url($travel_trip_lite_iglink); ?>"></a>
                      <?php } ?> 
                 </div><!--end .topsocial_icons--> 
               <?php } ?>  
               <div class="clear"></div>
           </div><!-- .topinfostyle -->  
           
           
  <div class="logo_and_menubar">        
      <div class="logo">
           <?php travel_trip_lite_the_custom_logo(); ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <p><?php echo esc_html($description); ?></p>
            <?php endif; ?>
     </div><!-- logo --> 
     <div class="header_right">      
        <div id="mainnavigator">       
		   <button class="menu-toggle" aria-controls="main-navigation" aria-expanded="false" type="button">
			<span aria-hidden="true"><?php esc_html_e( 'Menu', 'travel-trip-lite' ); ?></span>
			<span class="dashicons" aria-hidden="true"></span>
		   </button>

		  <nav id="main-navigation" class="site-navigation primary-navigation" role="navigation">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'site_container' => 'ul',
				'menu_id' => 'primary',
				'menu_class' => 'primary-menu menu',
			) );
			?>
		  </nav><!-- .site-navigation -->
	    </div><!-- #mainnavigator -->                 
     
       </div><!-- .header_right -->     
     <div class="clear"></div>
   </div><!-- .logo_and_menubar -->           
 </div><!-- .site_container -->        


</div><!--.site-header --> 
 
<?php 
if ( is_front_page() && !is_home() ) {
if($travel_trip_lite_show_headerslider != '') {
	for($i=1; $i<=3; $i++) {
	  if( get_theme_mod('travel_trip_lite_hdrslidepage'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('travel_trip_lite_hdrslidepage'.$i,true));
	  }
	}
?> 
<div class="frontslider-sections">              
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$j=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $j ); ?>" class="nivo-html-caption">         
    	<h2><?php the_title(); ?></h2>
    	<?php the_excerpt(); ?>
		<?php
        $travel_trip_lite_hdrslidepagebutton = get_theme_mod('travel_trip_lite_hdrslidepagebutton');
        if( !empty($travel_trip_lite_hdrslidepagebutton) ){ ?>
            <a class="slide_morebtn" href="<?php the_permalink(); ?>"><?php echo esc_html($travel_trip_lite_hdrslidepagebutton); ?></a>
        <?php } ?>                  
    </div>   
<?php $j++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
 </div><!-- .frontslider-sections -->    
<?php } } ?>   
        
<?php if ( is_front_page() && ! is_home() ) { ?>

   <?php if( $travel_trip_lite_show_fourpageboxes_panel != ''){ ?> 
   <section id="services_section">
     <div class="site_container">      
               <?php 
                for($n=1; $n<=4; $n++) {    
                if( get_theme_mod('travel_trip_lite_fourpagesetting'.$n,false)) {      
                    $queryvar = new WP_Query('page_id='.absint(get_theme_mod('travel_trip_lite_fourpagesetting'.$n,true)) );		
                    while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>     
                    <div class="top4box <?php if($n % 4 == 0) { echo "last_column"; } ?>">
                       <div class="topboxbg">                                                   
							 <?php if(has_post_thumbnail() ) { ?>
                                <div class="thumbbx"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>        
                             <?php } ?>
                             <div class="pagecontent">              	
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
                                <?php the_excerpt(); ?>                                     
                             </div> 
                        </div>                                     
                    </div>
                    <?php endwhile;
                    wp_reset_postdata();                                  
                } } ?>                                 
            <div class="clear"></div>        
      </div><!-- .site_container -->
    </section><!-- #services_section -->
  <?php } ?>

<?php if( $travel_trip_lite_show_AboutsUsPage != ''){ ?>  
    <section id="AboutUs_Section">
    <div class="site_container">                               
		<?php 
        if( get_theme_mod('travel_trip_lite_AboutsUsPage',false)) {     
        $queryvar = new WP_Query('page_id='.absint(get_theme_mod('travel_trip_lite_AboutsUsPage',true)) );			
            while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>            
              <div class="aboutimgBx">
			    <?php the_post_thumbnail();?>
              </div>
              <div class="aboutDecBx">   
                <h3><?php the_title(); ?></h3>   
                <?php the_content();  ?>      
              </div>                                          
            <?php endwhile;
             wp_reset_postdata(); ?>                                    
            <?php } ?>                                 
      <div class="clear"></div>                       
     </div><!-- .site_container -->
    </section><!-- #AboutUs_Section-->
 <?php } ?>
<?php } ?>