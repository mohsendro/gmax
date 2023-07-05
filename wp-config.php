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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gmax' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         '>C+<W`5~r~a:l$+PXE#,+8f%3k}~Ee,hGjHh;tTkblvkEbba|U9d(!>>}s!*p[t)');
define('SECURE_AUTH_KEY',  '^?t| #cg!7gI2if~u=KJ-^>G1so#D`+tFj.O9rqkwNB|8K>DJkMn^9_?tX#Xi~z4');
define('LOGGED_IN_KEY',    'WlfK$v-trP<@Sy`2|Jd;}SJ+$F1Y|XFddG8vt%`Rk+s_FRrX-(G.+gX.:a4])Yr-');
define('NONCE_KEY',        '8B8*~I+(0L)ecsC[]M;<]H}B@U*$cgiz3:dS!U)Dz@jYf:+ ufQZ1zMLi?A{:EGP');
define('AUTH_SALT',        'a+oslIG}h?X`xHp79y,j-O,r!KRhxu#n3aO$L--hD4qlvXjfvIX[sVU--fDu*!K,');
define('SECURE_AUTH_SALT', 'm|}gccc5p;,fEg=:#Uqu+`$D?p2/uH|(~*A9w=H`XV@GR7oT&<fL`_?-&8+wI|2:');
define('LOGGED_IN_SALT',   'o(mHXWgXW!50ua{/eTXCY-Wf|H)#+:%qVt`,(~O.^rTvHLU_}6h}O?1t,9{4,Z|^');
define('NONCE_SALT',       '-xU6f2(FTg&@DX(845/Oox__cvd-iP%_9O-QGM!jABHhpQq$?-M4b?X@IQQDxwl*');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gm_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG',  true );
// define( 'WP_DEBUG_LOG',     true );
// define( 'WP_DEBUG_DISPLAY', true );
// define( 'SCRIPT_DEBUG',     true );
// define( 'SAVEQUERIES',      true );
// define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
// @ini_set( 'log_errors', 'Off' );
// @ini_set( 'display_errors', 'On' );
// @ini_set( 'error_log', '/home/example.com/logs/php_error.log' );

/* Add any custom values between this line and the "stop editing" line. */
/* SSL */
// define( 'FORCE_SSL_LOGIN', true );
// define( 'FORCE_SSL_ADMIN', true );

/* Disable Post Revisions. */
define( 'WP_POST_REVISIONS', false );
// define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400 );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );

/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );

/* WordPress Cache */
// define( 'WP_CACHE', true );

/* Compression */
// define( 'COMPRESS_CSS',        true );
// define( 'COMPRESS_SCRIPTS',    true );
// define( 'CONCATENATE_SCRIPTS', true );
// define( 'ENFORCE_GZIP',        true );
// define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true );

/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
