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
define( 'DB_NAME', 'llc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'quc[5Zn#rA$jVF1X8JVd.E/gOvdw66mG^(g+`t-;4Sv M-1o!l/f0xm.A14m?(6Q' );
define( 'SECURE_AUTH_KEY',  ']66+Tf3{wi 7I&<JKR8t4Wb-#>{Bg&4^g56Y{AU2%G$jU$JR]1Isi0^x:pa~=icr' );
define( 'LOGGED_IN_KEY',    '{LBb/.ql9*VCo/0t6*ROUFz!bmarW4d]]UcgyKC#(3mA(~3|!>WLJ)NskRrC6t!6' );
define( 'NONCE_KEY',        'c9&cHY_WMPSqVy%[.${gxI}c60G:x!eD4O4406c<:`iL~5P8643Ois4&EyU[~/8l' );
define( 'AUTH_SALT',        ')J4.`T^Z})xf-{Dd*)2pyafIor=tr-$+MR2&lQ25nhX-j~IjbX1j`o{CS>|Y,>;W' );
define( 'SECURE_AUTH_SALT', '4s#`D<{Gjx HWQMUwFr-aJ/$bo!(}c r%Wj}-8aaF/B;S?U.#[`H%%FVh1I]K}!u' );
define( 'LOGGED_IN_SALT',   'pq4MQ<N04f=J.v|nk,9G$yZcJJ>2y(UGp}(gYkVVYyjcP4UI;N ;?`z}8-|~,{W}' );
define( 'NONCE_SALT',       '?lknYffg2&i/k>w~U9x5_#R2m,9@z`lN`H@1Pd0d2(+7>vdI,*pjVh.~pWOHfb$<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
