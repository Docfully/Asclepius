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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'aCYIe+~[K4yjVnOlzXworGr?=AXh@+Q61i$GNg`7(BTlYr!sXH@;t@*y]lgl?%@S' );
define( 'SECURE_AUTH_KEY',  'Dl?J@[a4M^:-I<PPL OV}@ZpUnq=qe60*^ /,yugmx2IxzdWm|L 6OAN_.^I&V(E' );
define( 'LOGGED_IN_KEY',    ']$)v%[aav(xd4JALksPiH7ZinyEb{<sN3|7T<:j}p?.J+@ wDKoS$zL:C1[x]cuJ' );
define( 'NONCE_KEY',        'PV[Ylt|O8c ^Gp`.ZMgPGC&tQ<x6AsG6Uw]Z(FuJdw.3+)+T4L9{~_bL)o#A;)w=' );
define( 'AUTH_SALT',        '0AGBn@Z H*/IqiK &1(BAE!sCSx5XvC-;GF8naEonRD&>Uz^c+%N,RR$i5APR7aF' );
define( 'SECURE_AUTH_SALT', 'c!1hBB>QNibcxE[t1A)9,!s1|S]oT&VR%b|cMp24%w]kzEpe>4#,/88Gp{ Qr*46' );
define( 'LOGGED_IN_SALT',   '&-bbJa!7uJE^]{l_XU]2.7i.cm>Seeu%RMzGf[YLBHP>$:p9193qlux>I>iu2uo?' );
define( 'NONCE_SALT',       'E@=zjq|2v>u7?OrrW*srC4g mlBveAFGx-$wi,c1JuV>D!v%[->&<769D1j2GEz/' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
