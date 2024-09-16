<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'demo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '#i|xdmb5?Fh{R_J4l8>tHkNaxB;aa >;rc!=S?36O06jqVldwdsxmJ/HBI3F/DQ_' );
define( 'SECURE_AUTH_KEY',  ':(#l=`*BB$b_swC`)6ae8jL3lG)p;hKPb{rsbG`*Xt<2g`5,0Za7ab0i5kNUd?>I' );
define( 'LOGGED_IN_KEY',    'E3z5m2 h#c5x1S 1WGr~#l?_U51x%8,j$/333sw5^>Wn.>%mz8BL$y]0o,zv<Sc.' );
define( 'NONCE_KEY',        '$Miva)w0TAqnsHM&{PBtKYZiMnxH%f CF-7a3c82`9ob 9+B;w.qk`( _0&J<f2`' );
define( 'AUTH_SALT',        '3IJN^~Om$sn{KzkxP@{EK#5@S19mI?>~tjF|IHwjNOum9Ds3zf8)/(F|yrH[,a,x' );
define( 'SECURE_AUTH_SALT', 'Q~M.YOsiIh:VaJ{Ak9`[oPJ6y}3Um~q?w9+6%m=*v0IP)|V,jAV<-=4w>T8O.:MY' );
define( 'LOGGED_IN_SALT',   'Y<=m-B%w+Ox_F}Upg32QN&v_XI8*Cl<ci+[)!fNhsK _/_v,?V^.W(E(+;rqP=OH' );
define( 'NONCE_SALT',       '6sX s=7W7l}ee_,}$ipJ}_c2!h}X}[z{4:Vb8-DETEALJ@>BtX,;^0[3c6X)<=hm' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
