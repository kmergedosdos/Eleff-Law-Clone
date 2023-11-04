<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'local');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}


define('AUTH_KEY',         'JTQ0noNK7fB2dQGcLNbkaaaoHRZDCAuqHpngjc9CVuvQHWMWXbcXKJiIu7ic1/gX+GyZ7Osryvxb5xwYXjlnXQ==');
define('SECURE_AUTH_KEY',  'bgJV1XIsTxXgR6Ohlnc3LXAH3dqOTTiZ+Iv0FmTBw1YtASWL3QzSXjnfv5FvqDQImmcTkK8k95FqXamKXtEB3A==');
define('LOGGED_IN_KEY',    'AxyTCHSb1poqFUL6B0c2/okS250H8aB0+fm9vmRk0FAlGj9XMomkGZMQWfMxT5rwN6pzY3fi4q0shygyr75/jw==');
define('NONCE_KEY',        'l6raJ8lCIhly8WTQs3xr3GmawmJd7R/dPBUdpuNDptaY61MykFosZkxC6KYkKCUR2uMoIvxZ67uMq1ea44oiIw==');
define('AUTH_SALT',        'Aq00Oh5n1Mc6T/4vUGp1+wJ6H/1picVRWyUwJqr7P5VTDI41l9y1VT+3wiv2dP4tsamTjeMlf3FmFFzyJiNwVA==');
define('SECURE_AUTH_SALT', 'uhj64zNVXb48mG49olrU+fQ2FNVnNIfD4uN3TMIwdXR++FynX+Z8va2Xo6Xr4LpvR0emuqSeSkCAYE4mK8+CtQ==');
define('LOGGED_IN_SALT',   'pOdGHstROe0t7oceLb3YDc3BsRSt6yg/+Xizn0U/sYmuGCxiNH6OdBzja0KmVTmooWVYC+dqPoVFXsTsC/zh/Q==');
define('NONCE_SALT',       'zBUdDZVZpNyBKmPG8OmBrQpJfAOdS8xPwlxMBhhhFXiTkpR4TS4v238WOXMg/Jz9tN0U2wcfWdOKHU68kE9PQw==');
define('WP_ENVIRONMENT_TYPE', 'local');

define('SMTP_USERNAME', 'username@gmail.com'); //replace with your gmail
define('SMTP_PASSWORD', 'whsi bcuc mbcr bapb'); //replace with your gmail password
define('SMTP_SERVER', 'smtp.gmail.com');
define('SMTP_FROM', 'username@gmail.com'); //replace with your gmail
define('SMTP_NAME', 'Eleff Law Clone'); //replace with your name or website name
define('SMTP_PORT', '587');
define('SMTP_SECURE', 'tls');
define('SMTP_AUTH', true);
define('SMTP_DEBUG', 0);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
