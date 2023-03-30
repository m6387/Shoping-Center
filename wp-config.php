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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'zg`O(4eV4k_k$4j.q[!z ^PFCn(.lX`_zjS7L:LNC^MaEG3GgM%OZ-nArfxy,+/)' );
define( 'SECURE_AUTH_KEY',  'YKbBy6FhhuOWJyqC&`>Qq{&PU&zA.bV/jtYhXELhq]<^2!_+hn>VFZ1+#FjP#c/:' );
define( 'LOGGED_IN_KEY',    'r>wZn[8m;LYS09IJpIgW0AFIG`fs7w#FJyuV@2p>=%R:Sk*J@P>8n)FC3^8W.S%n' );
define( 'NONCE_KEY',        'BOo@@Rj_u};AL|i[-=O2xQ=@YOD4,1!_>R=?$K#aPUFYC3Dnkn9!vqAmFwC6^_xs' );
define( 'AUTH_SALT',        'GxZD!a/4;qP|%Qaa7p$e|l{6Zr5}:u3N}&mDe%d6Y&hL=<=7!jnQF<{7?zcbX5Ho' );
define( 'SECURE_AUTH_SALT', 'r4$cFcr)4$s}/ajLO^$R=a=S5}+]k,M-m!kGHoWE=jSS=_k%3=FUO(Yh^H^WTH?C' );
define( 'LOGGED_IN_SALT',   'Z`uB2]u2@=;OC$sK-)@D+gp_@Nh4l JX9$snH7R,RiFEx,T)+?O.K[H6hz_T<!Ui' );
define( 'NONCE_SALT',       'a=X+be[Shz.#JUn`qEhCrO~m3_O38Mx6f{k??6_ >.HWj)QC.|SXaC};7kFfx%m2' );

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
