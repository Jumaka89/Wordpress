<?php    
/**
 *travel-trip-lite Theme Customizer
 *
 * @package Travel Trip Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travel_trip_lite_customize_register( $wp_customize ) {	
	
	function travel_trip_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	  // Ensure $input is an absolute integer.
	  $page_id = absint( $page_id );
	
	  // If $page_id is an ID of a published page, return it; otherwise, return the default.
	  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
	}

	function travel_trip_lite_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	} 
	
	function travel_trip_lite_sanitize_phone_number( $phone ) {
		// sanitize phone
		return preg_replace( '/[^\d+]/', '', $phone );
	} 
		
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	 //Panel for section & control
	$wp_customize->add_panel( 'travel_trip_lite_panel_section', array(
		'priority' => null,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings Panel', 'travel-trip-lite' ),		
	) );
	
	//Site Layout Options
	$wp_customize->add_section('travel_trip_lite_layout_sections',array(
		'title' => __('Site Layout Options','travel-trip-lite'),			
		'priority' => 1,
		'panel' => 	'travel_trip_lite_panel_section',          
	));		
	
	$wp_customize->add_setting('travel_trip_lite_boxlayoutoptions',array(
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
	));	 

	$wp_customize->add_control( 'travel_trip_lite_boxlayoutoptions', array(
    	'section'   => 'travel_trip_lite_layout_sections',    	 
		'label' => __('Check to Show Box Layout','travel-trip-lite'),
		'description' => __('If you want to show box layout please check the Box Layout Option.','travel-trip-lite'),
    	'type'      => 'checkbox'
     )); //Site Layout Options 
	
	$wp_customize->add_setting('travel_trip_lite_template_coloroptions',array(
		'default' => '#00bded',
		'sanitize_callback' => 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'travel_trip_lite_template_coloroptions',array(
			'label' => __('Color Options','travel-trip-lite'),			
			'description' => __('More color options available in PRO Version','travel-trip-lite'),
			'section' => 'colors',
			'settings' => 'travel_trip_lite_template_coloroptions'
		))
	);
	
	 //Header Contact info section
	$wp_customize->add_section('travel_trip_lite_headercontact_sections',array(
		'title' => __('Header Contact Section','travel-trip-lite'),				
		'priority' => null,
		'panel' => 	'travel_trip_lite_panel_section',
	));		
	
	
	$wp_customize->add_setting('travel_trip_lite_header_contactno',array(
		'default' => null,
		'sanitize_callback' => 'travel_trip_lite_sanitize_phone_number'	
	));
	
	$wp_customize->add_control('travel_trip_lite_header_contactno',array(	
		'type' => 'text',
		'label' => __('Enter phone number here','travel-trip-lite'),
		'section' => 'travel_trip_lite_headercontact_sections',
		'setting' => 'travel_trip_lite_header_contactno'
	));	
	
	$wp_customize->add_setting('travel_trip_lite_header_emailno',array(
		'sanitize_callback' => 'sanitize_email'
	));
	
	$wp_customize->add_control('travel_trip_lite_header_emailno',array(
		'type' => 'email',
		'label' => __('enter email id here.','travel-trip-lite'),
		'section' => 'travel_trip_lite_headercontact_sections'
	));		
		
	
	$wp_customize->add_setting('travel_trip_lite_show_headercontact_sections',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_show_headercontact_sections', array(
	   'settings' => 'travel_trip_lite_show_headercontact_sections',
	   'section'   => 'travel_trip_lite_headercontact_sections',
	   'label'     => __('Check To show This Section','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Contact section
	
		 
	 //Social icons Section
	$wp_customize->add_section('travel_trip_lite_hdrsocialpanel',array(
		'title' => __('Header Social Area','travel-trip-lite'),
		'description' => __( 'Add social icons link here to display icons in header ', 'travel-trip-lite' ),			
		'priority' => null,
		'panel' => 	'travel_trip_lite_panel_section', 
	));
	
	$wp_customize->add_setting('travel_trip_lite_fblink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'	
	));
	
	$wp_customize->add_control('travel_trip_lite_fblink',array(
		'label' => __('Add facebook link here','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrsocialpanel',
		'setting' => 'travel_trip_lite_fblink'
	));	
	
	$wp_customize->add_setting('travel_trip_lite_twlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('travel_trip_lite_twlink',array(
		'label' => __('Add twitter link here','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrsocialpanel',
		'setting' => 'travel_trip_lite_twlink'
	));

	
	$wp_customize->add_setting('travel_trip_lite_inlink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('travel_trip_lite_inlink',array(
		'label' => __('Add linkedin link here','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrsocialpanel',
		'setting' => 'travel_trip_lite_inlink'
	));
	
	$wp_customize->add_setting('travel_trip_lite_iglink',array(
		'default' => null,
		'sanitize_callback' => 'esc_url_raw'
	));
	
	$wp_customize->add_control('travel_trip_lite_iglink',array(
		'label' => __('Add instagram link here','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrsocialpanel',
		'setting' => 'travel_trip_lite_iglink'
	));
	
	$wp_customize->add_setting('travel_trip_lite_show_hdrsocialpanel',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_show_hdrsocialpanel', array(
	   'settings' => 'travel_trip_lite_show_hdrsocialpanel',
	   'section'   => 'travel_trip_lite_hdrsocialpanel',
	   'label'     => __('Check To show This Section','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Social icons Panel
	 
	 	
	// Header Slider Section		
	$wp_customize->add_section( 'travel_trip_lite_hdrslider_section', array(
		'title' => __('Header Slider Sections', 'travel-trip-lite'),
		'priority' => null,
		'description' => __('Default image size for slider is 1400 x 860 pixel.','travel-trip-lite'), 
		'panel' => 	'travel_trip_lite_panel_section',           			
    ));
	
	$wp_customize->add_setting('travel_trip_lite_hdrslidepage1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('travel_trip_lite_hdrslidepage1',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 1:','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrslider_section'
	));	
	
	$wp_customize->add_setting('travel_trip_lite_hdrslidepage2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('travel_trip_lite_hdrslidepage2',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 2:','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrslider_section'
	));	
	
	$wp_customize->add_setting('travel_trip_lite_hdrslidepage3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
	
	$wp_customize->add_control('travel_trip_lite_hdrslidepage3',array(
		'type' => 'dropdown-pages',
		'label' => __('Select page for slider 3:','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrslider_section'
	));	// Homepage Slider Section
	
	$wp_customize->add_setting('travel_trip_lite_hdrslidepagebutton',array(
		'default' => null,
		'sanitize_callback' => 'sanitize_text_field'	
	));
	
	$wp_customize->add_control('travel_trip_lite_hdrslidepagebutton',array(	
		'type' => 'text',
		'label' => __('enter slider Read more button name here','travel-trip-lite'),
		'section' => 'travel_trip_lite_hdrslider_section',
		'setting' => 'travel_trip_lite_hdrslidepagebutton'
	)); // header Slider Read More Button Text
	
	$wp_customize->add_setting('travel_trip_lite_show_headerslider',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_show_headerslider', array(
	    'settings' => 'travel_trip_lite_show_headerslider',
	    'section'   => 'travel_trip_lite_hdrslider_section',
	    'label'     => __('Check To Show This Section','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));//Show Header Slider Section	
	 
	 
	 //four page boxes Section
	$wp_customize->add_section('travel_trip_lite_fourpageboxes_panel', array(
		'title' => __('Four Page Boxes Section','travel-trip-lite'),
		'description' => __('Select pages from the dropdown for four page boxes panel','travel-trip-lite'),
		'priority' => null,
		'panel' => 	'travel_trip_lite_panel_section',          
	));	
	
	
	$wp_customize->add_setting('travel_trip_lite_fourpagesetting1',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travel_trip_lite_fourpagesetting1',array(
		'type' => 'dropdown-pages',			
		'section' => 'travel_trip_lite_fourpageboxes_panel',
	));		
	
	$wp_customize->add_setting('travel_trip_lite_fourpagesetting2',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travel_trip_lite_fourpagesetting2',array(
		'type' => 'dropdown-pages',			
		'section' => 'travel_trip_lite_fourpageboxes_panel',
	));
	
	$wp_customize->add_setting('travel_trip_lite_fourpagesetting3',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travel_trip_lite_fourpagesetting3',array(
		'type' => 'dropdown-pages',			
		'section' => 'travel_trip_lite_fourpageboxes_panel',
	));	
	
	$wp_customize->add_setting('travel_trip_lite_fourpagesetting4',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travel_trip_lite_fourpagesetting4',array(
		'type' => 'dropdown-pages',			
		'section' => 'travel_trip_lite_fourpageboxes_panel',
	));	
	
	
	$wp_customize->add_setting('travel_trip_lite_show_fourpageboxes_panel',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	
	$wp_customize->add_control( 'travel_trip_lite_show_fourpageboxes_panel', array(
	   'settings' => 'travel_trip_lite_show_fourpageboxes_panel',
	   'section'   => 'travel_trip_lite_fourpageboxes_panel',
	   'label'     => __('Check To Show This Section','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));//Show four page boxes Panel
	 
	 
	 //AboutUs page Panel
	$wp_customize->add_section('travel_trip_lite_aboutus_panel', array(
		'title' => __('AboutUs Panel','travel-trip-lite'),
		'description' => __('Select Pages from the dropdown for aboutus page section','travel-trip-lite'),
		'priority' => null,
		'panel' => 	'travel_trip_lite_panel_section',          
	));		
	
	$wp_customize->add_setting('travel_trip_lite_AboutsUsPage',array(
		'default' => '0',			
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'travel_trip_lite_sanitize_dropdown_pages'
	));
 
	$wp_customize->add_control(	'travel_trip_lite_AboutsUsPage',array(
		'type' => 'dropdown-pages',			
		'section' => 'travel_trip_lite_aboutus_panel',
	));		
	
	$wp_customize->add_setting('travel_trip_lite_show_AboutsUsPage',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_show_AboutsUsPage', array(
	    'settings' => 'travel_trip_lite_show_AboutsUsPage',
	    'section'   => 'travel_trip_lite_aboutus_panel',
	    'label'     => __('Check To Show This Section','travel-trip-lite'),
	    'type'      => 'checkbox'
	));//Show AboutUs Page Panel
	 
 
	//Sidebar Settings
	$wp_customize->add_section('travel_trip_lite_sidebar_options', array(
		'title' => __('Sidebar Options','travel-trip-lite'),		
		'priority' => null,
		'panel' => 	'travel_trip_lite_panel_section',          
	));	
	
	$wp_customize->add_setting('travel_trip_lite_hidesidebar_from_homepage',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_hidesidebar_from_homepage', array(
	   'settings' => 'travel_trip_lite_hidesidebar_from_homepage',
	   'section'   => 'travel_trip_lite_sidebar_options',
	   'label'     => __('Check to hide sidebar from latest post page','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));// Hide sidebar from latest post page
	 
	$wp_customize->add_setting('travel_trip_lite_gridwithoutsidebar',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_gridwithoutsidebar', array(
	   'settings' => 'travel_trip_lite_gridwithoutsidebar',
	   'section'   => 'travel_trip_lite_sidebar_options',
	   'label'     => __('Check to anable grid type post without sidebar','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));// grid type posts with sidebar 
	
	
	 $wp_customize->add_setting('travel_trip_lite_gridtypepostwithsidebar',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_gridtypepostwithsidebar', array(
	   'settings' => 'travel_trip_lite_gridtypepostwithsidebar',
	   'section'   => 'travel_trip_lite_sidebar_options',
	   'label'     => __('Check to anable grid type post with sidebar','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));// grid type posts with sidebar
	 
	 
	 $wp_customize->add_setting('travel_trip_lite_hidesidebar_singlepost',array(
		'default' => false,
		'sanitize_callback' => 'travel_trip_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'travel_trip_lite_hidesidebar_singlepost', array(
	   'settings' => 'travel_trip_lite_hidesidebar_singlepost',
	   'section'   => 'travel_trip_lite_sidebar_options',
	   'label'     => __('Check to hide sidebar from single post','travel-trip-lite'),
	   'type'      => 'checkbox'
	 ));// hide sidebar single post	 

		 
}
add_action( 'customize_register', 'travel_trip_lite_customize_register' );

function travel_trip_lite_custom_css(){ 
?>
	<style type="text/css"> 					
        a, .blogpost_liststyle h2 a:hover,
        #sidebar ul li a:hover,						
        .blogpost_liststyle h3 a:hover,		
        .postmeta a:hover,		
		.site-navigation .menu a:hover,
		.site-navigation .menu a:focus,
		.site-navigation .menu ul a:hover,
		.site-navigation .menu ul a:focus,
		.site-navigation ul li a:hover, 
		.site-navigation ul li.current-menu-item a,
		.site-navigation ul li.current-menu-parent a.parent,
		.site-navigation ul li.current-menu-item ul.sub-menu li a:hover,		 			
        .button:hover,
		.topsocial_icons a:hover,
		.nivo-caption h2 span,
		h2.services_title span,		
		.blog_postmeta a:hover,
		.blog_postmeta a:focus,
		.top4box:hover h4 a,
		.site-footer ul li::before,
		blockquote::before	
            { color:<?php echo esc_html( get_theme_mod('travel_trip_lite_template_coloroptions','#00bded')); ?>;}					 
            
        .pagination ul li .current, .pagination ul li a:hover, 
        #commentform input#submit:hover,		
        .nivo-controlNav a.active,
		.sd-search input, .sd-top-bar-nav .sd-search input,			
		a.blogreadmore,
		.top4box:hover,			
		.nivo-caption .slide_morebtn:hover,
		.learnmore:hover,		
		.copyrigh-wrapper:before,										
        #sidebar .search-form input.search-submit,				
        .wpcf7 input[type='submit'],				
        nav.pagination .page-numbers.current,		
		.blogreadbtn,		
		.top4box .thumbbx:before, 
		.top4box .thumbbx:after,
		.nivo-directionNav a:hover,
		.top4box:hover .topboxbg:after,		
        .toggle a,
		.aboutimgBx:after,
		.copyrigh-wrapper	
            { background-color:<?php echo esc_html( get_theme_mod('travel_trip_lite_template_coloroptions','#00bded')); ?>;}
			
		
		.tagcloud a:hover,		
		.topsocial_icons a:hover,		
		h3.widget-title::after,
		blockquote
            { border-color:<?php echo esc_html( get_theme_mod('travel_trip_lite_template_coloroptions','#00bded')); ?>;}
			
			
		 button:focus,
		input[type="button"]:focus,
		input[type="reset"]:focus,
		input[type="submit"]:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="search"]:focus,
		input[type="number"]:focus,
		input[type="tel"]:focus,
		input[type="range"]:focus,
		input[type="date"]:focus,
		input[type="month"]:focus,
		input[type="week"]:focus,
		input[type="time"]:focus,
		input[type="datetime"]:focus,
		input[type="datetime-local"]:focus,
		input[type="color"]:focus,
		textarea:focus,
		#templatelayout a:focus
            { outline:thin dotted <?php echo esc_html( get_theme_mod('travel_trip_lite_template_coloroptions','#00bded')); ?>;}				
							
	
    </style> 
<?php                                                                                                            
}
         
add_action('wp_head','travel_trip_lite_custom_css');	 

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function travel_trip_lite_customize_preview_js() {
	wp_enqueue_script( 'travel_trip_lite_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '19062019', true );
}
add_action( 'customize_preview_init', 'travel_trip_lite_customize_preview_js' );