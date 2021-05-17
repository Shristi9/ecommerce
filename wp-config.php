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
define( 'DB_NAME', 'e-commerce' );

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
define( 'AUTH_KEY',         'Z<d(H;];xWDLf%?h!EkSHY>(.> IFzSMvNgCN`DN8=:HwNMoW+;W>ek.M[n=YW$u' );
define( 'SECURE_AUTH_KEY',  '$]$+v)0,:2v^sY@WO]TV{1XO6[z_nBn54;beVe#x&R7EW,(qTDJu#Z?I{pHuL*ic' );
define( 'LOGGED_IN_KEY',    'a,~M|6jbfY@yC6Op6eN @nFv3@R=K;AGci6Ck^T<%u$1J>gtuCBst%^-W2oITY%Z' );
define( 'NONCE_KEY',        'H8S||0c3(+kf/RJ_&,khnH)YNU-}xtWz&pb5ySXqL!-fG#mzJnnJP7pthR{&ltYd' );
define( 'AUTH_SALT',        '(yTf%C];[`%J7T=Ap*l0wH&?u<|X#9iHFo|6$<I/mtiS!Duhlm!&ao.8H^<}V[A%' );
define( 'SECURE_AUTH_SALT', '(g!~VV5Mp::%u:l]&ZL{ek 3d9O8V&qVG K)6agEKEB7&;q=,[$WYd<%RJzEf|.H' );
define( 'LOGGED_IN_SALT',   '}OCo6|UA|QTj?F2YL1K[bu.N_G/.V`HK-9fy:K<c3=G?}~3:x!E;U;Qa!2cqddB|' );
define( 'NONCE_SALT',       'm4^x]t`e;MNkPTogQ0@(SPQpJIFb(/uuDz1jV AfJhMw4fFAZR,0M6E~N=qs(*E(' );

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
