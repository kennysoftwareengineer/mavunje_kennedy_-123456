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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kennedy' );

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
define( 'AUTH_KEY',         't-{[U,{}2Uz%2QzKch(82r8]UqkN,rM4~ZhV$>2KE^k9B^rpMesYe[z@gn&G/0t#' );
define( 'SECURE_AUTH_KEY',  '.dVtAhp?kR9cOjL&33ejwHuSb]lV2;f-QK-& $ShC}4Z6<W#oxofR(,~RxbvAh[q' );
define( 'LOGGED_IN_KEY',    'H-`Pi!r+V.9_MDGx|O wY}>7=PDeQwH>$-7~_3!W*6o267[8%sYeq4^2?t27--WS' );
define( 'NONCE_KEY',        '~l`|57?}.FoJq^s~[~/c6M8?<X8p.BluC>Ow7E#^|inbxP<8uJjhZ;M=^j!VMKp2' );
define( 'AUTH_SALT',        'LhtU)u[cHg:MP[`?-)>RTOPyT3tyCyKD6gJ{0EFdNkaP/j%(;_o8DzRc@0pXsHg)' );
define( 'SECURE_AUTH_SALT', 'QSA#H#gt2zAM0WbC114zpnR0M!}50@Uo b^zr#_s1jP$PGRTPkB(@_t$DN_KH}r)' );
define( 'LOGGED_IN_SALT',   'j%d)!J(FTRQwW}~^&,n]L+xCdBKWPbd:Zaw}0Dadd;k?F4PEW,#Ghyu}-e5b]TvM' );
define( 'NONCE_SALT',       'q=1b[4=<.tm_w0s04$g=]uU/_&?iTf-owepsDBraeWD&K.zv9d ~vb#<h-AIT>Lo' );

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
