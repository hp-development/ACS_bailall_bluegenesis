<?php 
/*
Plugin Name:  Extra Contact Meta
Plugin URI:   #
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       AnupChauhan 
Author URI:   #
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-tutorial
*/

/*
*
* HOW TO USE
*
* USE get_option(); FUNCTION
* Eg. get_option( 'ex_contact_meta_google_pluse', '' );
*
*
*/
defined( 'ABSPATH' ) || exit;

class EX_Contact_Meta {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'add_sections' ) );
	}

    /**
	 * Add settings to the customizer.
	 *
	 */

	public function add_sections( $wp_customize ) {
		$wp_customize->add_panel(
			'ex_contact_meta',
			array(
				'priority'       => 300,
				'capability'     => 'edit_theme_options',
				'theme_supports' => '',
				'title'          => __( 'Extra Contact Meta', 'ex_contact_meta' ),
			)
		);

		$this->add_social_media_link_section( $wp_customize );
		$this->add_contact_details( $wp_customize );
	}

    private function add_social_media_link_section( $wp_customize ) {
		
        $wp_customize->add_section(
			'ex_contact_meta_social_media_links',
			array(
				'title'    => __( 'Store Social Media Links', 'ex_contact_meta' ),
				'priority' => 10,
				'panel'    => 'ex_contact_meta',
			)
		);

		$wp_customize->add_setting(
			'ex_contact_meta_demo_facebook',
			array(
				'default'           => __( 'https://www.facebook.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_youtube',
			array(
				'default'           => __( 'https://www.youtube.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_whatsapp',
			array(
				'default'           => __( 'https://www.whatsapp.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_instagram',
			array(
				'default'           => __( 'https://www.instagram.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);
        
        $wp_customize->add_setting(
			'ex_contact_meta_linkedin',
			array(
				'default'           => __( 'https://www.linkedin.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_twitter',
			array(
				'default'           => __( 'https://www.twitter.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_pinterest',
			array(
				'default'           => __( 'https://www.pinterest.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_reddit',
			array(
				'default'           => __( 'https://www.reddit.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);
        
        $wp_customize->add_setting(
			'ex_contact_meta_tiktok',
			array(
				'default'           => __( 'https://www.tiktok.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_snapchat',
			array(
				'default'           => __( 'https://www.snapchat.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_setting(
			'ex_contact_meta_google_pluse',
			array(
				'default'           => __( 'https://www.google.com' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);
        
		$wp_customize->add_control(
			'ex_contact_meta_demo_facebook',
			array(
				'label'       => __( 'Facebook', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_demo_facebook',
				'type'        => 'text',
			)
		);

        $wp_customize->add_control(
			'ex_contact_meta_youtube',
			array(
				'label'       => __( 'Youtube', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_youtube',
				'type'        => 'text',
			)
		);

        $wp_customize->add_control(
			'ex_contact_meta_whatsapp',
			array(
				'label'       => __( 'Whatsapp', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_whatsapp',
				'type'        => 'text',
			)
		);

        $wp_customize->add_control(
			'ex_contact_meta_instagram',
			array(
				'label'       => __( 'Instagram', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_instagram',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_linkedin',
			array(
				'label'       => __( 'LinkedIn', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_linkedin',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_twitter',
			array(
				'label'       => __( 'Twitter', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_twitter',
				'type'        => 'text',
			)
		);
        
        $wp_customize->add_control(
			'ex_contact_meta_pinterest',
			array(
				'label'       => __( 'Pinterest', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_pinterest',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_reddit',
			array(
				'label'       => __( 'Reddit', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_reddit',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_tiktok',
			array(
				'label'       => __( 'TikTok', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_tiktok',
				'type'        => 'text',
			)
		);
		
        $wp_customize->add_control(
			'ex_contact_meta_snapchat',
			array(
				'label'       => __( 'Snapchat', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_snapchat',
				'type'        => 'text',
			)
		);
		$wp_customize->add_control(
			'ex_contact_meta_google_pluse',
			array(
				'label'       => __( 'Google Pluse', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_social_media_links',
				'settings'    => 'ex_contact_meta_google_pluse',
				'type'        => 'text',
			)
		);
        
	}

    private function add_contact_details( $wp_customize ) {
		
        $wp_customize->add_section(
			'ex_contact_meta_address_links',
			array(
				'title'    => __( 'Store Address & Other Links', 'ex_contact_meta' ),
				'priority' => 10,
				'panel'    => 'ex_contact_meta',
			)
		);

		$wp_customize->add_setting(
			'ex_contact_meta_address_one',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_address_two',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_contact_number',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);
        
        $wp_customize->add_setting(
			'ex_contact_meta_contact_number_two',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_contact_email',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

        $wp_customize->add_setting(
			'ex_contact_meta_contact_email_two',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_setting(
			'ex_contact_meta_contact_store_name',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);

		$wp_customize->add_setting(
			'ex_contact_meta_store_copyright',
			array(
				'default'           => __( '' ),
				'type'              => 'option',
				'capability'        => 'edit_theme_options',
				'sanitize_callback' => 'wp_kses_post',
				'transport'         => 'postMessage',
			)
		);
		
        
        
		$wp_customize->add_control(
			'ex_contact_meta_address_one',
			array(
				'label'       => __( 'Address One', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_address_one',
				'type'        => 'text',
			)
		);

        $wp_customize->add_control(
			'ex_contact_meta_address_two',
			array(
				'label'       => __( 'Address Two', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_address_two',
				'type'        => 'text',
			)
		);

        $wp_customize->add_control(
			'ex_contact_meta_contact_number',
			array(
				'label'       => __( 'Contact Number', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_contact_number',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_contact_number_two',
			array(
				'label'       => __( 'Contact Number Two', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_contact_number_two',
				'type'        => 'text',
			)
		);
        $wp_customize->add_control(
			'ex_contact_meta_contact_email',
			array(
				'label'       => __( 'Contact Email', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_contact_email',
				'type'        => 'text',
			)
		);
        
        $wp_customize->add_control(
			'ex_contact_meta_contact_email_two',
			array(
				'label'       => __( 'Contact Email Two', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_contact_email_two',
				'type'        => 'text',
			)
		);

		$wp_customize->add_control(
			'ex_contact_meta_contact_store_name',
			array(
				'label'       => __( 'Store Name', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_contact_store_name',
				'type'        => 'text',
			)
		);

		$wp_customize->add_control(
			'ex_contact_meta_store_copyright',
			array(
				'label'       => __( 'Store Copyright', 'ex_contact_meta' ),
				'description' => '',
				'section'     => 'ex_contact_meta_address_links',
				'settings'    => 'ex_contact_meta_store_copyright',
				'type'        => 'text',
			)
		);
        
	}
}

new EX_Contact_Meta();