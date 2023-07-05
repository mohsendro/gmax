<?php

/* MySQL database table prefix. */
$table_prefix = 'wpplus_';


/* Authentication Unique Keys and Salts. @link https://api.wordpress.org/secret-key/1.1/salt/ */
define('AUTH_KEY',         '0{s8w*c6?|NmAV!++d8T|JJBEKi{Ld}(]S#j/)e3a?g=e5Qs08^RyZ-S Np4#J*U');
define('SECURE_AUTH_KEY',  '`9cv`-PJQ|{Mh+b-3J8>cb{x9-_*?f/hkevPKZwC6sk*TLA,uCcT!z;<wDGm*6-Y');
define('LOGGED_IN_KEY',    '=V@&/wsg;0z|Q|$CB%=||fFn?XUy_+e]J=/M5(NO.@|{Ztgs-aY>q6~lx7a=z=*!');
define('NONCE_KEY',        '-n>DsgzDnP+Ox#1kVVaW$##2q*U_Mf2z!Pq0-m7/tEBQP!_8+r}h*C2YgIBH8&Pj');
define('AUTH_SALT',        '(Xq-|lVEuYShVrkQ+M;QR2F_UEHRw]r4O,rVA= ?y}-b{Z_5U,i9Q!W*Sus88vyY');
define('SECURE_AUTH_SALT', '@]N#MvG3r`t+zh1_(u:M8&ZK@3)qp.:< eVPa,C;>DNbZ`zZTkT=S/DfCOv:m?1H');
define('LOGGED_IN_SALT',   'S]yaS5f7@:-<zq.yMYWCDhft%ivDJ359%4kcK?x,?Wg{JpcD|MPwMP>Q%sXXWH`;');
define('NONCE_SALT',       '>g_ tt/;VW}^BS_FS=ijSTkxiDeYnu/-+4C%-fnvx]bcE455V^g#*$i4|./xal!s');


/* SSL */
define( 'FORCE_SSL_LOGIN', true );
define( 'FORCE_SSL_ADMIN', true );


/* Custom WordPress URL. */
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/extensions' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . 'wpplus-content' );
define( 'UPLOADS',        'wpplus-uploads' );
define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/extensions/plugins' );
define( 'WP_PLUGIN_URL',  'http://' . $_SERVER['HTTP_HOST'] . 'wpplus-plugins' );
define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
register_theme_directory( dirname( __FILE__ ) . '/themes-dev' );
define('WP_DEFAULT_THEME', 'twentyeleven');
define( 'WPMU_PLUGIN_DIR', dirname(__FILE__) . '/extensions/builtin' );
define( 'WPMU_PLUGIN_URL', 'http://mywebsite.com/extensions/builtin' );
define( 'NOBLOGREDIRECT', 'http://example.com' );


/* Disable Post Revisions. */
define( 'WP_POST_REVISIONS', false );
define( 'WP_POST_REVISIONS', 3 );
define('AUTOSAVE_INTERVAL', 86400 );
/* Media Trash. */
define( 'MEDIA_TRASH', true );
/* Trash Days. */
define( 'EMPTY_TRASH_DAYS', '7' );


/* WordPress debug mode for developers. */
define( 'WP_DEBUG',         true );
define( 'WP_DEBUG_LOG',     true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG',     true );
define( 'SAVEQUERIES',      true );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true );   // 5.2 and later
@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'On' );
@ini_set( 'error_log', '/home/example.com/logs/php_error.log' );


/* PHP Memory */
define( 'WP_MEMORY_LIMIT', '64M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );


/* WordPress Cache */
define( 'WP_CACHE', true );


/* Compression */
define( 'COMPRESS_CSS',        true );
define( 'COMPRESS_SCRIPTS',    true );
define( 'CONCATENATE_SCRIPTS', true );
define( 'ENFORCE_GZIP',        true );
define( 'DO_NOT_UPGRADE_GLOBAL_TABLES', true );


/* CRON */
define( 'DISABLE_WP_CRON',      'false' );
define( 'WP_CRON_LOCK_TIMEOUT', 30 );


/* Updates */
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );


define( 'WP_HTTP_BLOCK_EXTERNAL', true );
define( 'WP_ACCESSIBLE_HOSTS', 'api.wordpress.org,*.github.com' );
define( 'IMAGE_EDIT_OVERWRITE', true );
