<?php 

function miihweb_customizer( $wp_customize ) {


	// Copyright

	$wp_customize->add_section(
		'sec_copyright', array(
			'title' => __( 'Copyright', 'miihweb' ),
			'description' => __( 'Copyright Section', 'miihweb' )
		)
	);

	$wp_customize->add_setting(
		'set_copyright', array(
			'type' => 'theme_mod',
			'default' => __('Copyright X - All rights reserved', 'miihweb' ),
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_copyright', array(
			'label' => __('Copyright', 'miihweb'),
			'description' => __( 'Choose whether to show the Services section or not', 'miihweb' ),
			'section' => 'sec_copyright',
			'type' => 'text'
		)
	);

// Map

	$wp_customize->add_section( 
		'sec_map', array(
			'title' => __( 'Map', 'miihweb' ),
			'description' => __( 'Map Section', 'miihweb' )
		)
	);	

	// API Key

	$wp_customize->add_setting(
		'set_map_apikey', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'wp_filter_nohtml_kses'
		)
	);

	$wp_customize->add_control(
		'set_map_apikey', array(
			'label' => __( 'API Key', 'miihweb' ),
			'description' => sprintf(  
				__( 'Get your key <a target="_blank" href="%s">here</a>', 'miihweb' ),
				'https://console.developers.google.com/flows/enableapi?apiid=maps_backend' 
				),
			'section' => 'sec_map',
			'type' => 'text'
		)
	);

	// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => __( 'Type your address here', 'miihweb' ),
			'description' => __( 'No special characters allowed', 'miihweb' ),
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	
	
// Slider

	$wp_customize->add_section( 
		'sec_slider', array(
			'title' => __( 'Slider', 'miihweb' ),
			'description' => __( 'Slider Section', 'miihweb' )
		)
	);

	// Design

	$wp_customize->add_setting(
		'set_slider_option', array(
			'type' => 'theme_mod',
			'default' => '1',
			'sanitize_callback' => 'miihweb_sanitize_select'
		)
	);

	$wp_customize->add_control(
		'set_slider_option', array(
			'label' => __('Choose your design type here', 'miihweb' ),
			'description' => __('Choose your design type', 'miihweb' ),
			'section' => 'sec_slider',
			'type' => 'select',
			'choices' => array(
				'1' => __( 'Design Type 1', 'miihweb' ),
				'2' => __( 'Design Type 2', 'miihweb' ),
				'3' => __( 'Design Type 3', 'miihweb' ),
				'4' => __( 'Design Type 4', 'miihweb' )
			)
		)
	);	

	// Limit

	$wp_customize->add_setting(
		'set_slider_limit', array(
			'type' => 'theme_mod',
			'default' => '5',
			'sanitize_callback' => 'absint'
		)
	);

	$wp_customize->add_control(
		'set_slider_limit', array(
			'label' => __('Number of posts to display', 'miihweb' ),
			'description' => __( 'Choose the number of posts to be displayed', 'miihweb' ),
			'section' => 'sec_slider',
			'type' => 'number'
		)
	);	




}
add_action( 'customize_register', 'miihweb_customizer' );

function miihweb_sanitize_select( $input, $setting ){
 
    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);

    //get the list of possible select options 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                     
    //return input if valid or return default option
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
     
}