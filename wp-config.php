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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'h]CH`5)~2(5|lR^{zHaj;$#>:emCr(rGb@kl_[8|oit6Ywz:,NNb~jG=W|wUDYrR' );
define( 'SECURE_AUTH_KEY',  '93~eVZw%i}>x8`|wqQCA>^MZH1A7[{_k;q#{@Sj`IM.B)02aAj96 jyvNtOwBao8' );
define( 'LOGGED_IN_KEY',    'Yfk#x`7Ud dGr[RF_]N^M2*:Q:eq88LSEdqLbRS~N2?v9kQ&!D7p:g8|ieO{cT8a' );
define( 'NONCE_KEY',        ';!W+iiEqB6p%R9i27?t4%`_PW3Cs$:X]P{L]*<3kXp;pdJe&!}O&nSGL&d7*ewhD' );
define( 'AUTH_SALT',        '+-jl-ry.)m@-,xu+rt7`4pWgh1ltj^`2zH}IuPC}7RnyPCv_LiNdDAh$48GYL,Da' );
define( 'SECURE_AUTH_SALT', 'GBu92w^jebig%Uv7n6<ft#RNk61Gwzs+ii3rgUZ`3Z)J<dt=dcCu1).k:@emv y}' );
define( 'LOGGED_IN_SALT',   '@I4s1{>_Z9Jl`NW~i83/4.,jYvL:Igx?E1^}MbLjd, a~h:)>E[Qcj{).EoPnajP' );
define( 'NONCE_SALT',       'YL$S@[0~UDbN6L~*K2M[mRlP]D[Kf1Mq%:%?gSg}?/v#cZ;Gg-OT!3t4;la uO7g' );

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
