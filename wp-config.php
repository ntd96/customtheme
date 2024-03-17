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
define( 'DB_NAME', 'customtheme' );

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
define( 'AUTH_KEY',         '7h|)mv!9vXo:~9A%[V u8]~x|<dF=tSeX!)w7ui$)?0D-E(DK7+HI,Zozwafw`qJ' );
define( 'SECURE_AUTH_KEY',  'l`nm(]sff8ianV4p$.[Du:/bJ/fJ-M_VuTtB*w=O92,<nGlk~}wrj67ILG:5A3pd' );
define( 'LOGGED_IN_KEY',    '}!NO>e$s]W_69Hy<h?o}]l*=(58m0I.b>(6tq8xzQ9sZN{1PUjlT8T*VL@J+!$Vd' );
define( 'NONCE_KEY',        '`&bd|[=;FyLo{AOCo7a`XccW@ox=^TBE&y.jX>aG+zL-P^ <f>MSzek&d?%l{,~.' );
define( 'AUTH_SALT',        'P2PJjUJO |%fZaL3fu9OOldTY._/r.17ciHZl=tDIY,OE}]9~&3RlNC$}iy/r4vj' );
define( 'SECURE_AUTH_SALT', 'Edeigbq#08d=1/=`G|Wdu7m9a!9*y3uv;~9[hW(R%[JFRXSbv`Hn)6~RbO`9N`_[' );
define( 'LOGGED_IN_SALT',   'v6m+tHdz.1VK8U1:psp*U;{B>aL.VOOJ_CiJYQ#HT$td)P2JQ/dH4y};MQF1{0#3' );
define( 'NONCE_SALT',       '*G@sLkw/!Vr?|A35da%:uBpB8-9hC^4:$O~E8?ZcO_.2P)4xVB`:dwgR]23UL00x' );

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
define('FS_METHOD','direct');
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
