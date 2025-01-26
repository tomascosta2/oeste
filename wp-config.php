<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u722146662_QfQbw' );

/** Database username */
define( 'DB_USER', 'u722146662_bICpJ' );

/** Database password */
define( 'DB_PASSWORD', 'XmTCzi1Jxj' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'e>C*=w/,$XJ|y.X/xPyN!b){~JyD7I<l)}ay]7qJBuMBxFA&a2R( Mm6a~6R<P47' );
define( 'SECURE_AUTH_KEY',   'aaW(n/)|4p[Pc2RU6WEJd{:ABrXGj?n*yn5^-K~N/WF]q96B[g m3CcYA NQT!e7' );
define( 'LOGGED_IN_KEY',     '1W}4hp0}3zB&=K-+*`D&~Tp 2gaA$/Syz$Uyfkw8526W?^3+&{^8dOtz;iVP`3Ar' );
define( 'NONCE_KEY',         ')00DT{<$9TBx|eo*>i_Bot)q9uzppGZsJ]$YAm6*xVvu1|o-j&h.R[0b)Ca^6z0r' );
define( 'AUTH_SALT',         'J#OS*oY$o0Yy;I oAI;[p r(2Gw$@k*V~$Z;kow}<+SROoV**Y(4Wb[v-<gyulRU' );
define( 'SECURE_AUTH_SALT',  'ZR{<.EP@t! xs[N3F/^6[MI!k?bZu/f2!ou~[jx3N.>V/kJpT=0i`Kcv2p5GV{;N' );
define( 'LOGGED_IN_SALT',    '@tMtjnJ,4a&| N@,wX!?1c>?ZGV e=QSZ[t}2@~Y9j]k)lcW4c#/h} jtmjuIh7E' );
define( 'NONCE_SALT',        '1<a0;K!`1j8Ygq[LO+VUN)5Pvtl]RBL_7GHtss!z<dFt.d:xs!G[>=]pK5$?Akwu' );
define( 'WP_CACHE_KEY_SALT', '(H=S0Vu `d:nqk3<:ZA:Q*w7-,V&hWinE%@&hkdNCH21$HqQ~_1n,VL`GcW{*}S`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '437d0cfe2150388615a866fba9734a7d' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
