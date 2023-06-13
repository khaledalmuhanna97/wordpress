<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'fsu1v}S&#KWW=;rSLYw-zyAnIGKx3eC2*7rNWKgvFcAcMS`pLN6FoK%Ptc&A-, /' );
define( 'SECURE_AUTH_KEY',  '|#puO[D=6o7i@t3R>a_OcNT 4Z4%QQSryX6cx)C@8k~,nPDJ6l~.+c7OVy,~g<&7' );
define( 'LOGGED_IN_KEY',    'D0{T!>?@0Lqz96lzo >lL/~%^J_.|o 3V>0IHPExay?B3>iH4H|4=)_ ^Nd<i~;;' );
define( 'NONCE_KEY',        ')_ohB0&RrdsTFhtF4J0J%V9@3&+90sL4N#-& lo9rsTVkZx; YMWY-+LMrg|?4Fm' );
define( 'AUTH_SALT',        '4t2jV`Z8Tc7ceyas9UG)dXa#0p!7G&zj)2N!^7G+H8.{#R[)-DFA}7@&>Tj#;:5)' );
define( 'SECURE_AUTH_SALT', '_}4ac$%J59d9%Ts=lO7[xh~i&n<O>|-)XQlL.Yk[EHRC&b`xdYE&lH}uUuB-Kx~1' );
define( 'LOGGED_IN_SALT',   '#(/TR%@_q&PLH[OW{?^ov9!gy[3p_8ne]/lXAb,4)Y_^!76?{_=JuCR>Gp~zZE:Q' );
define( 'NONCE_SALT',       'V^4(=sGx_[)3!QA+]$[p#IzX(839:D?|#rUv<nx{mTvH3>Ea{Tv<M}tvcpcVY[d_' );

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
