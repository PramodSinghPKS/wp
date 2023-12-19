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
define( 'DB_NAME', 'xxxx' );

/** Database username */
define( 'DB_USER', 'xxxx' );

/** Database password */
define( 'DB_PASSWORD', 'xxxx' );

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
define( 'AUTH_KEY',         'TdF9YwO O/-PG$B 1.ZkX9Qi+0uhw21xw]v$I;gYSeMB+69oEy^7{RYXJT1nQ#9p' );
define( 'SECURE_AUTH_KEY',  'ini7ue|7pG5tvBzK&lAbN/xrV.3J2&iF.Zel 28k&zSk (g.^(nthxxVA*aEhmu`' );
define( 'LOGGED_IN_KEY',    '?sY@.(N#<#B,3A0M70e%gsaqfDI(?s569Xwi<G})C _/s5$bGuM!,#TFZP49xbH5' );
define( 'NONCE_KEY',        ';G=(DZ:]Rc3v$YunxNs_=j3$>b5X||$Aig.XGB]Fs}ia|Sz2)E_eZtF!i;v!%B2,' );
define( 'AUTH_SALT',        'jByXD`J>iwykM6zgeX^Py%RSIf=lg2|*e;4w/6V&Gn/ymi<*Jzl1Vsdn/;-<{qdE' );
define( 'SECURE_AUTH_SALT', 'm[S+p%LpX*my%SoHlnAm?iT}`V*}K`4rI#P,Ad3`GQK|*I,%/bA7u-ds;wd_N9}n' );
define( 'LOGGED_IN_SALT',   ')Qsr{Fb-YH!U*}zMwvY#4au6cv?2Y:o} Ursr5qh^%FBCy!Fah=8IO6)y*tWf</N' );
define( 'NONCE_SALT',       'z9&+/-Y<WlixFb (c.FM10%(h,*2xUg2uX{cH,LU/YJ8E+Pe -RO!7uBN+`D45>5' );

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
