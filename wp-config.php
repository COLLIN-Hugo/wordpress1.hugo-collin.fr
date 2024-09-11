<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

/** Database username */
define( 'DB_USER', 'wordpress1' );

/** Database password */
define( 'DB_PASSWORD', 'Chl0904b*' );

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
define( 'AUTH_KEY',         '_bn!k@BtFq*U=yo|IC@6=gU/<~g%`*[WS1+G?)EqOsq<*l)%8W^KMulm-xP8:Paq' );
define( 'SECURE_AUTH_KEY',  '5C]2eD6dTxl{ed~#ptT^<YzJlERsXLM5/U}{_9U*0^?`#0T!|cDd-) |.#kMp#us' );
define( 'LOGGED_IN_KEY',    'VkUi.#a._3#y%aP3N%[Y4#a6bz1FW}zqJ=II9~<Jrv:ah:wm?=T,->1[68^=1eLT' );
define( 'NONCE_KEY',        'aJ[LqkZWlWu4hN-H_FIl/}8-7bI&.wQbA}lCr_/c;Gx29U0g~_o]/K%Dlcv!Bq-2' );
define( 'AUTH_SALT',        'Xfwu*vI?S_[2b>eO5}Ct~X5i/<b9o_@m7z@:X}}%90&fr>3{^R#VPNzqmaR/9ne|' );
define( 'SECURE_AUTH_SALT', 'i=-!&*9j3>*xpP?o>E/|sF:[Kp@m@(#DHD8]KRe^}B1v-4hGOEM/knVF6/1+>h8e' );
define( 'LOGGED_IN_SALT',   'G=OlCk;#/C,=.+IpDuW:c[Mw{-ZAnC.=N9V7CkVaYsePC$&nGIT^^&dVE]d[EutG' );
define( 'NONCE_SALT',       '?8D/(9r>z0HM)c)VP$ a-J^:%<yo6I/|/|l1;9L{4[0xm+QNRP:^RM^?aT0vWM$Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD',  'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
