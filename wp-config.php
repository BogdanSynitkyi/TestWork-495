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
define( 'DB_NAME', 'AbeloHost' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '!BW`oX=R0i{?7Z}w4qQDKnzM9)K^)f(<B&9Qod]-POxGj}MTiVE5)w(zez@!,c/9' );
define( 'SECURE_AUTH_KEY',  '!&bS>^>B,t4ZMx=%2r0g=)cqXS;[XZDGWe}LBa~e?O(44Zdxl=+e?sakwu[.mW1%' );
define( 'LOGGED_IN_KEY',    'P5fqXSM! iOxHAe <`qw/&qDWw>I7C+~qWRuaSnPf:10b(8AD^)j?$0*QU[(aAwq' );
define( 'NONCE_KEY',        'Bm<Rmh(T`8Gs-e*Z,;}hP_]@p|s$!+Md%]9-Qx.i5?kwITHoT%adidMgHuFYDM&E' );
define( 'AUTH_SALT',        '4U.g[A1eXUS$nuDM,PBpL(WI$6WIiaWXs<idO;{K5`t+<8ZmQd!&vSjeI$D?$tKE' );
define( 'SECURE_AUTH_SALT', 'H:j:=gGjVl+(TL$J6Y[,Uz$V!+FUa6U7p+H=>Bm&uFnc:+6t,B9rq_r:u2MS]3o@' );
define( 'LOGGED_IN_SALT',   'r3wJjhkY-)Qh)Yecv@n5QEWPO148qZyXc89FDhdn|$&(Xt7ES}^uSH2qnVl|?I9*' );
define( 'NONCE_SALT',       ',Uzc9zC39p0A[Z$E*Ye5wcp@}0~?wU~tc3n]hQ4CaxC^@j{oHapjMh32Zc@t<5K;' );

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
