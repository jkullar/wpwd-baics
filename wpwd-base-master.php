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
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'dhvc woocommerce page', // The plugin name.
			'slug'         => 'dhvc-woocommerce-page', // The plugin slug (typically the folder name).
			'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/dhvc-woocommerce-page.zip', // The plugin source.
			'required'     => false, // If false, the plugin is only 'recommended' instead of required.
		),

array(
'name'         => 'domain-mapping', // The plugin name.
'slug'         => 'domain-mapping', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/domain-mapping.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'gp-premium', // The plugin name.
'slug'         => 'gp-premium', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/gp-premium.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'leadin', // The plugin name.
'slug'         => 'leadin', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/leadin.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'megamenu-pro', // The plugin name.
'slug'         => 'megamenu-pro', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/megamenu-pro.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'mpc-massive', // The plugin name.
'slug'         => 'mpc-massive', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/mpc-massive.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'multisite-enhancements', // The plugin name.
'slug'         => 'multisite-enhancements', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/multisite-enhancements.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),


array(
'name'         => 'multisite-plugin-manager', // The plugin name.
'slug'         => 'multisite-plugin-manager', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/multisite-plugin-manager.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'pro-sites', // The plugin name.
'slug'         => 'pro-sites', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/pro-sites.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),


array(
'name'         => 'snapshot', // The plugin name.
'slug'         => 'snapshot', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/snapshot.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'ts-visual-composer-extend', // The plugin name.
'slug'         => 'ts-visual-composer-extend', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/ts-visual-composer-extend.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'Ultimate_VC_Addons', // The plugin name.
'slug'         => 'Ultimate_VC_Addons', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/Ultimate_VC_Addons.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'visualizer', // The plugin name.
'slug'         => 'visualizer', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/visualizer.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),
		
array(
'name'         => 'js_composer', // The plugin name.
'slug'         => 'js_composer', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/js_composer.zip', // The plugin source.
'required'     => true, // If false, the plugin is only 'recommended' instead of required.
),	

array(
'name'         => 'paid-mymail', // The plugin name.
'slug'         => 'paid-mymail', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/paid-mymail.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'req-acf-pro', // The plugin name.
'slug'         => 'req-acf-pro', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/req-acf-pro.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
),

array(
'name'         => 'req-profile-builder-pro', // The plugin name.
'slug'         => 'req-profile-builder-pro', // The plugin slug (typically the folder name).
'source'       => 'http://prefr.co/df23sxdDAsSDf334q3422Dfggdsgsd23/req-profile-builder-pro.zip', // The plugin source.
'required'     => false, // If false, the plugin is only 'recommended' instead of required.
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
		

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
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
