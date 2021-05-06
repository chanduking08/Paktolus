<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root@fuint' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TY[[:wyyXvU(XD$i 8DQ]A`7Cpufj=_6aCt^E;H3H|H^V/enH+C=BLT*lW$_!XwN' );
define( 'SECURE_AUTH_KEY',  'CG1E>h6;e,Hoz<==1=a|*Ry:!o#e*W+0U.,R%]oy8N|:{h0<~vI,*7&!Q:4WiY^h' );
define( 'LOGGED_IN_KEY',    'j ^VG>%t2MzbJ- [@g}_=|rz%0@4k(X)%VyBdyPP|NUq:c~Fk_I>O<.F1C/gr4a4' );
define( 'NONCE_KEY',        '~r@aoGy9l} C=c3O9h{F80:4=0tEXU6y~%;&}.#:08i;wZ%LJhPx`GWB(Esee tm' );
define( 'AUTH_SALT',        '=_H/aw0zZl#JVT/*my(4K$@d*1yi>kyu-p nC-0^ {?2Ch]bwlX;iV&zUymq1?NZ' );
define( 'SECURE_AUTH_SALT', 'v-;p%`;UiO xq&a)I!fwz!=~t4C[@M&IAL?O]ezoi]T+PSA; /<^)->;iNbMq_4P' );
define( 'LOGGED_IN_SALT',   ']L.oVtj@U5,|P/Hc 2bQ9V{5=YYt$o^lSK-ZSA0?N=A`K2SDI:+[t>%5Jmnfz$_9' );
define( 'NONCE_SALT',       'RZhh!rWgDF#4Uu~{OMVP+XDsLQ{CVHL;wCpY;wOVd?Ir2.t?WB|*D+@QMFCK{p:/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define ( 'FS_METHOD', 'direct');