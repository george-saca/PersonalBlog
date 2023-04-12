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

define( 'FS_METHOD', 'direct' );
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'gM,)/Q3u0NfN.ZL8>Ae#<P:J<zPuTX62|,V@zd?3vNt)W?{s*l77,.@0$<lXVto;' );
define( 'SECURE_AUTH_KEY',  '$T{c+l+#<pjb<wvF[mIBGa|7P5((.-}&=_iR/JHzxG-Ba7D_p_NWQk;/(}=MSyzg' );
define( 'LOGGED_IN_KEY',    '9<A=@j4~|4zjC>O=7h`9yh+xw+]q~98J5`Y_gJfWg>4f%j|!=!^,xj*e$.X+:t[k' );
define( 'NONCE_KEY',        '..f0E*D-X-x*iPhcEk(.2zw}Wh8gjd5pP*KL~0JJ;,s[H!>wQoG:;yIso`G/PU|@' );
define( 'AUTH_SALT',        'l{%/k-7xyyFbog`kH#f{xlwPKgb$[tJ7oL(#9oMT^wZe|-@PTh@YGxwL&1u._MBL' );
define( 'SECURE_AUTH_SALT', '!;*=b<?Scj*F@w8fOv%R#3UP-RbGg}?1M$p(dC,9[|;rfiOIp|T^E0I` Wha}UG+' );
define( 'LOGGED_IN_SALT',   'J^2n(m:-CD2;0u<y#wsWPyS[,le:Pv~)&g4Bfp@5[,12pV`)]a3n?U{.ym+N57,6' );
define( 'NONCE_SALT',       '</GJ3M,QlKA5Ak}LF,p?!)ZCr=|BpO!8SW>lBl~J_}jXJEef=JmIL5eR6i4ye}LJ' );

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
