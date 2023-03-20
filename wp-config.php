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
define( 'DB_NAME', 'wp_digitalex' );

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
define( 'AUTH_KEY',         ' |JN2|WZVzgW{bxweIi*u jsmW~}f_?Y_SxnTYh g6mcv6L06*mA8dhrE<4J;m;D' );
define( 'SECURE_AUTH_KEY',  'YmM.I*}pOH$/g2MTF?_-9#Hmmn,R82xJG)DhSlk~<@w:iU{8G/V_ss0/`u+y#q.}' );
define( 'LOGGED_IN_KEY',    '^(qtS&QlOW-?%8KmQp64!bIH>.>Y+#Sr&5e3(c~gG>>OC)qh[s)OrKw-z24/:5aH' );
define( 'NONCE_KEY',        '63Qt FWogeKxx~YKIE)$Z!/,G~*q#a#V$i~J9-4vGb<Ze6jg4aE?GcBLDrty)d<4' );
define( 'AUTH_SALT',        '^A@RGI=,Y)CuWSI#wpyN>7($yak%jv_>bzr7-je.UZgSAV `R `kCl7cOt?5-7gj' );
define( 'SECURE_AUTH_SALT', 'Q^ 6t}k/5}*WGyeC:2YA#4ro!qeJ4}`Q%0eX?!Jpq7`/-|hSZiZo99B<rqRuv?(C' );
define( 'LOGGED_IN_SALT',   'kjPV=A=^) 62cJfmJA<hUXfjcl)-.@NC-FHUqcnjunv!&Vk4brT!=qKYlk^%Y(.L' );
define( 'NONCE_SALT',       'l]cGs[>?v7[ AH#g#uyhWg4S6<7lg9m,,./,UKpzuHLmoI/ZD$UsG@af<v2B5xL7' );

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
