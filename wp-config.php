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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         '!Y<,4$NK#{!JMaFhK=4>Zx@tXvR_2_70C!|u^,|H8~Ys5E`9W7*ur[4r #6i<+`T' );
define( 'SECURE_AUTH_KEY',  '^OFnqHGdw:?mj>qX=)(5WHWkM=+L:^Q(V1S-3:08ShZCyAh 1H$^S9q`LX}`/v~X' );
define( 'LOGGED_IN_KEY',    '>0bha=v:71I^<I(N/C#f/%y`]AvItj-sg~/!4rmSh+e,C#fl,Nz+Vqrz/eq1o2Pt' );
define( 'NONCE_KEY',        '2licmN<LeBBO5$<K tR|{|SAHHnci}T*bwT`$ozU}e]>N(eg2d[.H vszGdK/%*7' );
define( 'AUTH_SALT',        'w4Yc(O;*Ej>$]&IPjyXp~rUYQu1O^I=Pbkd05y6I!o!*Azgb}Q?.~@;HN*)b5&5t' );
define( 'SECURE_AUTH_SALT', '<p l*mkR(xM:]{^K&>#J^[Yk(IH+RIVQ|G1loOlG3]im<S2K2Rq Lsz=>+=8U2y(' );
define( 'LOGGED_IN_SALT',   'UFIse*=Ip_X0A|>s*_`dc7;~]rUNPOX/^d8-^.Hp|:R<j4FFnRQwxOTrWfkW3-,r' );
define( 'NONCE_SALT',       'OhEj[2/}@3(dS,_o !9ipQvHzg73(Ps#Yn^;~; !*6G&~~4clCV)tHM-pN5s_KLw' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
