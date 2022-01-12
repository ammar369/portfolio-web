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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=&L;M;PS;$$#y{ dB:DXg$RC=*5azTjRCE&q.&5>m)Q<EBjGhX6p&#e7QnwG4<0$' );
define( 'SECURE_AUTH_KEY',  '4T-E.;c-uPE.6,%h],8~5Eut.QlVxCD K[Mh1UC$4_hVR`g7.&SQAe*ORm`Gud|3' );
define( 'LOGGED_IN_KEY',    ';N_9avf?@0$U>gSiibV|%#28V<zg$Kv]X4<o.S:a2]x`}5H2h@iD01A1;]zV2)}[' );
define( 'NONCE_KEY',        '*N*pTYaI#m&zgo>4Tkfe0z`.(CC4p8(n1wMa])#8o*L,WQw(MjH;!@$,$:9/iK;6' );
define( 'AUTH_SALT',        '[R~I|84mz^mc.ByI&NMUrc#5/a.nrfe0+=iVR<GSsdu}?zkquKsxjt}61x}L.5F#' );
define( 'SECURE_AUTH_SALT', 'SU:!WSjso*Al3<5LDjmW_!yTeB]fnpf+cp7^iA`9mA3a4-VwP=wZT9{$%K,%Bw^.' );
define( 'LOGGED_IN_SALT',   '7Tl:s!:x7~BD8mxB$[e.8JF:Jr)v`#k67: 4KNXOS6oc BC:u)pb_L<<sIGeO&=k' );
define( 'NONCE_SALT',       '{b.]ah-yYxd<ExQV$JmRT9ELOg1#9:82h,X2rHQ70,_d0fA`@>5Yg -DoGp&O!>}' );

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
