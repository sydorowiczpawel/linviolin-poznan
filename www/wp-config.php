<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'FORCE_SSL_ADMIN', true ); // Redirect All HTTP Page Requests to HTTPS - Security > Settings > Enforce SSL
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'linvioo628');

/** MySQL database username */
define('DB_USER', 'linvioo628');

/** MySQL database password */
define('DB_PASSWORD', 'J8FaXva9ZxBX');

/** MySQL hostname */
define('DB_HOST', 'linvioo628.mysql.db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iTO4vduNl6uG1gOUC+Cofm/xlBF8UegYoSUzF0uEfHK3JHialNLstFVFOqpU');
define('SECURE_AUTH_KEY',  'FCCuNNgO/zG2r6ls8OnjhU7NbsgeMqiJkc3ZZ9poy4t319l6vraW1f3CqGzh');
define('LOGGED_IN_KEY',    'QPAie1AOyDJ209iDkfEPjTQfQm7U3mUa7mZOi8ZmyzD78zQDg8B0BoGEGBbm');
define('NONCE_KEY',        'J+HZqWZUKdS+MoUQaaRd19eWJNyZRSmBQSg/YJ7VZy9k6VNKX7NXvy5MnXpS');
define('AUTH_SALT',        '5LC9ulFjuF5sPZCDChfCZ5P+o3jPy6TwAtPdGGmhTF0sJ1s83GBQqzl/d5sH');
define('SECURE_AUTH_SALT', 'Bo+LwAvMXEeZwnj7zKBvtUicfZ5OVdP8aj23a46rs4HTvnRdbQJxgNsAVQby');
define('LOGGED_IN_SALT',   'LJ3gRR23xB1MAucAFIOXEIU1Y2vi48Q/3p32tIRGtJTKmjp1JK1SUrkqeN28');
define('NONCE_SALT',       '8Dd8myy9uETGgJjCUQ+neIXeomts2sYWFXdjdfujnTEkA5p4LAouZxPVt0fk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod194_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
