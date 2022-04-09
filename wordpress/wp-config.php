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
define( 'AUTH_KEY',         'vwUg0Q~9q)A5$9T(~+}bw7AC?wo#wirE$>{r2{hIi3hEo-5?#DA` -+u/.xv3Di{' );
define( 'SECURE_AUTH_KEY',  'Na+dP.z()~CX]W)vt5b`2mWgS-u F_F@VFoPGO|9Xm-bJqK%,biwM{08OVtLNNVC' );
define( 'LOGGED_IN_KEY',    '|AFlX_tw_ bFB{cLaZ:==-vQe3(3b.oKZgd:ew)^^wgoZ9?Z]?@@dy*r1Ytf@VCD' );
define( 'NONCE_KEY',        'm}k^?EJQtRZ0180d>hMA}h{M2S)-Q#ucO8tZ>b$/,n@h/TJ}2)9s<=Is)pbNJSvf' );
define( 'AUTH_SALT',        '|wMa*}5m?oCnVOuEcRj84E~!%o, >}C,S2`pIBQX]>)!nc{syW]y~f{;eZXGkd-C' );
define( 'SECURE_AUTH_SALT', '@.LBy},@Ck=9O}Q6E71_YF#sQp?#iFSSuA-G[qu2xtXw0Bo9kZqQ^GHC?0 (9SH.' );
define( 'LOGGED_IN_SALT',   'h/aEHqr;VN~?GkX,9`<iza)F?@m`z&jj~ma,M;Ght/@h=F$^q,q{UR]:Il-$x>Q>' );
define( 'NONCE_SALT',       '8/bBa=xgJ!8T%;^{4,2foJ,Rz|}:R=9b**f*%Z|>.k|{/h1#T+k=;bX{uVS)j:go' );

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
