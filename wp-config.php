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
define( 'DB_NAME', 'new' );

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
define( 'AUTH_KEY',         'blWgX=^?lylD&%V5ut!+ky?D@e69JdlK:zmb?,_#Io1jh)QKU[+<G]B%KH7|:K2H' );
define( 'SECURE_AUTH_KEY',  'r?#F702Ic<$E7F&K1uXO>[?~W4VFjBvtm_3OII;u#~yN#*<yoZ%eBHJU%(1OeVX*' );
define( 'LOGGED_IN_KEY',    '@}TSePF(Yu/T(fQQgh^BsahoL<zF%lk<wI#3Z4PC90MHf</OjBo>KvMXYd) %iuJ' );
define( 'NONCE_KEY',        'MM0~/Di%stv(k*3j.k~bjOlYj(>]>7FsO Mx% GJ5FT<1`kkazcoR},PX`N;=:sJ' );
define( 'AUTH_SALT',        'V& bH}rNJR@`+54fIfa2=K%yv>K/8=gwxeHx;{O3 2&7/DE:{S2a5EO{HIeS3>Pe' );
define( 'SECURE_AUTH_SALT', 'KSluB:Epe@FoD;1#p?Nm-i+yCNQETRe@Z..*Ug<LC_L>lR+^f=ui*%z>-HT%yHx/' );
define( 'LOGGED_IN_SALT',   '%Isl6 W]kHI(Mr+4yd7Rs0RT_ k)W;Zet5otM%Ux3i7H8nB`b+Eq/Z&4#0.wc,w-' );
define( 'NONCE_SALT',       'nnuE3}l*i5`>q2Szlmw08@!PqV5L-M[g.#>O|W0dp,G|$Vp!]gHNFI>SU~:CZuI=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
