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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'multicolor' );

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
define( 'AUTH_KEY',         '/%(a#kv$gR (A: _iAu`bY092nlu#3c;u^Ji&/e6V9uTWH>MAR4L){QQIIZ$)db|' );
define( 'SECURE_AUTH_KEY',  'er^c3)?i,8[6; k`C_x0z!li+uhc8ptHUgoT{MO@5|;w;* :)n7Fpi>fMPiL(4g9' );
define( 'LOGGED_IN_KEY',    ';fV1mIgvYosJ&IIm)Um.4/;x<0EWX]Qa.[DGA^medSWe[f-r^P>VdfJMkn4]U10i' );
define( 'NONCE_KEY',        'w,@x5@Z$<Ila5W.6.cn4{x;.M(h[Rw&vd#l`~]X+z!zf<(f:<PWX6UNQia8mx%6n' );
define( 'AUTH_SALT',        'V5%#1b4f=m{6zJ^sE88p2U)&:.Uk_Jlh&<uapZll/^FkZ>I{<Na6c.}:n|Z@G|nx' );
define( 'SECURE_AUTH_SALT', 'fi{Z@H+=3d,}~^-)*g$d&0.6J! 9mD-R=M@0LAd|fl?seyYM3LhW-x*[E,r6,S4{' );
define( 'LOGGED_IN_SALT',   'b%U;G|^TO{j-s]N;hToXUS|7p&g)88Ej9I?*,^rN*Q}Y^o@.Xx[cf+ U8_Z6gz(B' );
define( 'NONCE_SALT',       '(mA7/dQL^hc$oT;(bMK`ecsr>z^4-tL|rs`k4-qr)E+x_`P5UM]9fhmT4hh>p[?f' );

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
