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
define( 'DB_NAME', 'wp_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'z2)HddYCdDD[qs=x$MKncUh`8Dz]BgR.I`VTHoooEMaL]UMPW48c?IlaiN%3KP$Q' );
define( 'SECURE_AUTH_KEY',  'orY0IfT5;B$YDejX5FPFbz,~cen0/%XqtQkt f%b^Q0`[640j $D<|X,K.zX9v7_' );
define( 'LOGGED_IN_KEY',    'P=TimpC=!*3!?^Pgl|7)7!-sS/888OAi4]<Jy[iIZZ=~-n+HLmZl-waDcf&3,(yf' );
define( 'NONCE_KEY',        'R}_14@GFjb~@UUTcn^UOhj~OpnKB} o`N]yan? EV8H}tT<%?$-{S[`=/I/2uxHy' );
define( 'AUTH_SALT',        'Nx 6RmE0_p|2h-*<oT Q BZ|`|X77.|8t `F<P=7&m=ZoVsHMmY>kHeth)?KBBqi' );
define( 'SECURE_AUTH_SALT', 'G<U,)m6Hl1Yf3Px~4*]rJ*Jt G31WcD>;B3/AV&qR49[JU&2?yppR1MY]?c/:,0@' );
define( 'LOGGED_IN_SALT',   'BspV@[;x$5C>bmU?/qfi#08Ok[72y>|3t]Lyz,[?XQZ^`-G`gp@z 7llF5!LAs*=' );
define( 'NONCE_SALT',       '1k]F9.SQdxAqS/G^X7 *h/-W?KYF>B5za,d]E3S@A)/v@EU|]o|9|HRC)&I<i7/m' );

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
