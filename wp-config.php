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
define( 'DB_NAME', 'gelukvantoen' );

/** Database username */
define( 'DB_USER', 'DbUser' );

/** Database password */
define( 'DB_PASSWORD', 'TuMhdXnqSE5FL2A5' );

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
define( 'AUTH_KEY',         '.*^.9Do*UsR%8 7<7C2a-L);i_Aq|x2^}Rd/nu!?j9Mp{SESgDs~R^=*+|FOQ.l,' );
define( 'SECURE_AUTH_KEY',  '1UD`;`W?JqhA#>}Z8f5bRnxwbR%!f_jdBrb)wB=n$/m1]ArWi%)pm@>%:%<Ejx%3' );
define( 'LOGGED_IN_KEY',    'OSK s#m(n73Wf>,2b] /sz+=lz#@:B)TzP(;vb{/R.D:`+$DX5_Wj=~[R< #~r{(' );
define( 'NONCE_KEY',        '&mtkVg(,5`-`Q~NVo`;3;F3##5|<-hL#O)BSVR^*j/XxxJ_<`]gOf0=8lL-JX04E' );
define( 'AUTH_SALT',        '*PS&%AM?Xz*AT3kfc=20yN{e/0tX!xZ`k(X!@3w)&%Q6v8BMaQ5tKMQPMtm#Ru.s' );
define( 'SECURE_AUTH_SALT', 'UskZbs9z2B}5c&[YUsAhkjCqw!q`}0i}==9yY _ZfiMHAlLkCry=Z5lI<0!M L[5' );
define( 'LOGGED_IN_SALT',   '<N} MGhKx4F!9k81V2mHln`.RIRD]?t_PRiedw/WKxCyF!g@*nsDV+hts+8D2N$2' );
define( 'NONCE_SALT',       'Z#4(l1j{Adl6Gt!UQm~s}~,U],{BwvseDf}04,b;6KOS6hs@g{AP{&#|;S,<$zYY' );

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
