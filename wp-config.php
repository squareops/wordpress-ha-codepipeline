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

define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
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

define('AUTH_KEY',         'kq44lKFbpE$X[]&NT!}s7KfBy-nXi,-R-z;MU5n?:^*Ti}$,^f+G~?yH57U.^TQ|');
define('SECURE_AUTH_KEY',  'oX>6 XI+Iy5D`H}p?.O34F]JGQ0+RLza0S{pL17d>7jrlbGkH+*Z`U,sa?=q0<6-');
define('LOGGED_IN_KEY',    '}I>DI-NOA5T%SI3GeTq)k>}ou7#wQo>cXE5/c`d26TSSoV!Q)cE y.N*ngD)oVpx');
define('NONCE_KEY',        '^IGkSQ;Z9gj|oLp:An^*tIOPK+)k9>7.>cNUK<C__,21* %(JqM_C?^_P+I&{a8>');
define('AUTH_SALT',        'bR|@a/zH3u)k7rrK9RiSm61{QY1r,_JYhxlD @8u<kd9Hw5uCB{K#gYn}HoFxau.');
define('SECURE_AUTH_SALT', '1?Y<QQrGYkLp@=EzF8.D(Hl<$vBWG1}2K|I(7!CQqDx^}[pdQ9(W^|&$KiVd<y*a');
define('LOGGED_IN_SALT',   '#O;d9i?Z3d+NkE@aL<Bf-r-MJJL4Hnw8Ni=#a&rcECw~oO/_bXq |F2-Io-aJ9Gn');
define('NONCE_SALT',       'g*:]Vxxr?x#<@_Ukn}5Mo_1]ByR-2!:LR]1Yb`oUE#z>|RFEH&?ms&6Q*V|GM2Zr');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)  $_SERVER['HTTPS']='on';
