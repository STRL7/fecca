<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AtkmWyW24mpXe8OLM676ofySF86ayQdcoKTsz058EdVdD3Cj7Il7A68TkJNmYW6M/4nj4wuU/0mxKAWNiwbSjg==');
define('SECURE_AUTH_KEY',  '4QlKdEGNUS5+ohdKRkELMUfn4INYvAmm5pXJFln4dCUX50MkiEMZTAHzpPT1H4Wc7JHeC3lNobcmIqgGUBFFaA==');
define('LOGGED_IN_KEY',    'Z2jAvFpXInTJFEXeLRwczvCgqiHahpX3FeOG2S2kJ/qVpuEje4AuzNmqGrF5lRjEa9DWZuRkwsbr1k8pZ7ljhQ==');
define('NONCE_KEY',        'ruHr96V4Zx2yFmbaCdQrxr+eSyGOHPyaZOgVgbkaYgfa7itkUilX6he+sDt48ClbLc6FnB7s3PGBZW2fxwzIBw==');
define('AUTH_SALT',        'pVKHiIimlhZj53dTtNCrOLgicLhGplJ4gLWh/KNC5BDd/Fr5WU+elH1420EH1GatGyYujy0zKYtDCJY2dYQQlA==');
define('SECURE_AUTH_SALT', 'dWDAhrWBEOWettxn0BKB+yppd6jeVfrhFcltcwraCQ0zgNxA0BlCBXYObubwTn84L3AjdurX0egU7Pwq2eroug==');
define('LOGGED_IN_SALT',   'jajoJMCWVo1BkfwFjpTg+JdRU+cTpzPUsv0qduVbrJZXL6vw4dkI93Bwi7NEXUVerlpwMI3krTpVPXtekw3n5g==');
define('NONCE_SALT',       'ltQDsNNKgI/K/YBkh/Vudf0Jc2X09mNhHjnRzf/G03dJ1Mn0jQEsFimJat0UnT1TeaBIFEeq1c0jLFnoYBfN1w==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
