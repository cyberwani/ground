<?php

/*  ==========================================================================
	MySQL settings
	==========================================================================  */

/* Switch database connections crendiantials between enviroments */

define('ENVIRONMENT', 'testing');

switch(ENVIRONMENT){

	case 'testing':

		define( 'DB_NAME',		'database_name_here' );
		define( 'DB_USER',		'username_here' );
		define( 'DB_PASSWORD',	'password_here' );
		define( 'DB_HOST',		'localhost' );
		define( 'DB_CHARSET',	'utf8' );
		define( 'DB_COLLATE',	'' );

		break;

	case 'deploy':

		define( 'DB_NAME',		'database_name_here' );
		define( 'DB_USER',		'username_here' );
		define( 'DB_PASSWORD',	'password_here' );
		define( 'DB_HOST',		'localhost' );
		define( 'DB_CHARSET',	'utf8' );
		define( 'DB_COLLATE',	'' );

		break;

}


/*  ==========================================================================
	MySQL database table prefix
	==========================================================================  */

/* Change default prefix for security */

$table_prefix = 'wp_';


/*  ==========================================================================
	Authentication Unique Keys and Salts (https://api.wordpress.org/secret-key/1.1/salt/)
	==========================================================================  */

define( 'AUTH_KEY',			'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',	'put your unique phrase here' );
define( 'LOGGED_IN_KEY',	'put your unique phrase here' );
define( 'NONCE_KEY',		'put your unique phrase here' );
define( 'AUTH_SALT',		'put your unique phrase here' );
define( 'SECURE_AUTH_SALT',	'put your unique phrase here' );
define( 'LOGGED_IN_SALT',	'put your unique phrase here' );
define( 'NONCE_SALT',		'put your unique phrase here' );


/*  ==========================================================================
	WordPress Localized Language, defaults to English (wp-content/languages)
	==========================================================================  */

define('WPLANG', '');
// define( 'WPLANG', 'it_IT' );
// define('WP_LANG_DIR', $_SERVER['DOCUMENT_ROOT'].'wordpress/languages');  // If WP_LANG_DIR is not defined WordPress looks first to wp-content/languages and then wp-includes/languages for the .mo defined by WPLANG file. 


/*  ==========================================================================
	Debug
	==========================================================================  */

define( 'WP_DEBUG',			false );	// Display errors and warnings.
define( 'WP_DEBUG_LOG',		false );	// Log errors and warnings.(/wp-content/debug.log)
define( 'SAVEQUERIES',		false );	// Save database queries in an array. if (current_user_can('administrator')){ global $wpdb;  echo "<pre>"; print_r($wpdb->queries);  echo "</pre>"; }
define( 'WP_DEBUG_DISPLAY',	false );	// Display errors and warnings.
//@ini_set('display_errors',0);


/*  ==========================================================================
	Custom WordPress URL
	==========================================================================  */


// define( 'WP_SITEURL',		'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );		// Your Wordpress blog/site URI. define('WP_HOME', 'http://' .$_SERVER['HTTP_HOST']. '');
// define( 'WP_HOME',			'http://' . $_SERVER['HTTP_HOST'] . '/path/to/wordpress' );		// WordPress core files URI. define('WP_SITEURL', 'http://' .$_SERVER['HTTP_HOST']. '');


/* Defines default location of folders */

// define( 'WP_CONTENT_URL',	'http://example.com/wp-content' );								// Content URL
// define( 'WP_PLUGIN_URL',		'http://example.com/wp-content/plugins' );						// Plugins URL
// define( 'UPLOADS',			'/img' );														// Uploads URL 


/*  ==========================================================================
	Enable Multisite
	==========================================================================  */

 define( 'WP_ALLOW_MULTISITE', false );


/*  ==========================================================================
	 Disable the plugin and theme editor for security
	==========================================================================  */
	
 define('DISALLOW_FILE_EDIT', true );


 /*  ==========================================================================
	Increasing memory allocated to PHP
	==========================================================================  */

// define('WP_MEMORY_LIMIT', '64M');


/*  ==========================================================================
	Absolute path to the WordPress directory
	==========================================================================  */

if ( !defined('ABSPATH') ) {
		
	define('ABSPATH', dirname(__FILE__) . '/');
	
}


/*  ==========================================================================
	Sets up WordPress vars and included files
	==========================================================================  */

require_once(ABSPATH . 'wp-settings.php');
