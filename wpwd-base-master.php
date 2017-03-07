<?php
/*
 * Plugin Name: WPWD Base Master
 * Plugin URI: https://wpwd.io
 * Version: 17.03.06.2 
 * Description: Filter particular scripts and style to load in posts or pages that don't need it.
 * Author: Jass SK
 * Author URI: http://wpwd.io/
*/


require_once('wp-updates-plugin.php');
new WPUpdatesPluginUpdater_1584( 'http://wp-updates.com/api/2/plugin', plugin_basename(__FILE__));

// source http://tgmpluginactivation.com/installation/
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php'; 
add_action( 'tgmpa_register', 'wpwd_register_required_plugins_pg' );

function wpwd_register_required_plugins_pg() {

	$plugins = array(
			array(
				'name'         => 'dhvc woocommerce page',
				'slug'         => 'dhvc-woocommerce-page',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/dhvc-woocommerce-page.zip',
				'required'     => false,
			),
			
			array(
				'name'         => 'wp remove assets',
				'slug'         => 'wp-remove-assets',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/wp-remove-assets.zip',
				'required'     => false,
			),
		

			array(
				'name'         => 'domain-mapping',
				'slug'         => 'domain-mapping',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/domain-mapping.zip',
				'required'     => false,
			),

			array(
				'name'         => 'gp-premium',
				'slug'         => 'gp-premium',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/gp-premium.zip',
				'required'     => false,
			),

			array(
				'name'         => 'leadin',
				'slug'         => 'leadin',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/leadin.zip',
				'required'     => false,
			),

			array(
				'name'         => 'megamenu-pro',
				'slug'         => 'megamenu-pro',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/megamenu-pro.zip',
				'required'     => false,
			),

			array(
				'name'         => 'mpc-massive',
				'slug'         => 'mpc-massive',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/mpc-massive.zip',
				'required'     => false,
			),

			array(
				'name'         => 'multisite-enhancements',
				'slug'         => 'multisite-enhancements',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/multisite-enhancements.zip',
				'required'     => false,
			),


			array(
				'name'         => 'multisite-plugin-manager',
				'slug'         => 'multisite-plugin-manager',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/multisite-plugin-manager.zip',
				'required'     => false,
			),

			array(
				'name'         => 'pro-sites',
				'slug'         => 'pro-sites',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/pro-sites.zip',
				'required'     => false,
			),


			array(
				'name'         => 'snapshot',
				'slug'         => 'snapshot',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/snapshot.zip',
				'required'     => false,
			),

			array(
				'name'         => 'ts-visual-composer-extend',
				'slug'         => 'ts-visual-composer-extend',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/ts-visual-composer-extend.zip',
				'required'     => false,
			),

			array(
				'name'         => 'Ultimate_VC_Addons',
				'slug'         => 'Ultimate_VC_Addons',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/Ultimate_VC_Addons.zip',
				'required'     => false,
			),

			array(
				'name'         => 'visualizer',
				'slug'         => 'visualizer',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/visualizer.zip',
				'required'     => false,
			),

			array(
				'name'         => 'js_composer',
				'slug'         => 'js_composer',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/js_composer.zip',
				'required'     => true,
			),	

			array(
				'name'         => 'paid-mymail',
				'slug'         => 'paid-mymail',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/paid-mymail.zip',
				'required'     => false,
			),

			array(
				'name'         => 'req-acf-pro',
				'slug'         => 'req-acf-pro',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/req-acf-pro.zip',
				'required'     => false,
			),

			array(
				'name'         => 'req-profile-builder-pro',
				'slug'         => 'req-profile-builder-pro',
				'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/req-profile-builder-pro.zip',
				'required'     => false,
			),		

			array(
				'name'      => 'Admin Columns',
				'slug'      => 'codepress-admin-columns',
				'required'  => false,
			),	
			array(
				'name'      => 'Contact Form 7',
				'slug'      => 'contact-form-7',
				'required'  => false,
			),
			array(
				'name'      => 'Contact Form 7 Dynamic Text Extension',
				'slug'      => 'contact-form-7-dynamic-text-extension',
				'required'  => false,
			),
			array(
				'name'      => 'Max Mega Menu',
				'slug'      => 'megamenu',
				'required'  => false,
			),
			array(
				'name'      => 'Simple Custom CSS',
				'slug'      => 'simple-custom-css',
				'required'  => false,
			),
			array(
				'name'      => 'Toolset Types',
				'slug'      => 'types',
				'required'  => false,
			),
			array(
				'name'      => 'Yoast SEO',
				'slug'      => 'wordpress-seo',
				'required'  => false,
			),

		
	);

		$config = array(
		'id'           => 'wpwd',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'plugins.php',            // Parent menu slug.
		'capability'   => 'manage_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa( $plugins, $config );
}
