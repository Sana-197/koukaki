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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'nSvzVefBJW;d;qQ!1-t;GrU9+Y5V*Zz]B1` I>o(<E,>-9<C6bvO]PzT6rW?qDR|' );
define( 'SECURE_AUTH_KEY',   '{mkd.49[?,C;$W~H+ +9c(`d7D&~(#9ws2gNI$,${Ks[SEe4ngO?De0|Q0+OLxgh' );
define( 'LOGGED_IN_KEY',     '-RNvksExV6D$g?^K/t;^;Xrhls~L8#7lIcvlRB=acl`i~~wRN?)/h_k@Y2Y]FP9p' );
define( 'NONCE_KEY',         '<,:PQ/pR_)p8/Rw2LTI]N%knN AfFutJXhl*I5{6_6kSdx}m=G?KD$tXU&^lK||p' );
define( 'AUTH_SALT',         'PiVwsc.jWvzl+sfpF8xu&s=sF#q:c8UNd=O.I$=#TM>:z5|@9>WTW7g Y~uH8xz^' );
define( 'SECURE_AUTH_SALT',  'D/?UG4wuNWS:Fa9P!]zqkh6n4!uC`UsQ43 VXYBoro:&<C1#DUfO()n y<w4u*L/' );
define( 'LOGGED_IN_SALT',    '>x5)[w&VcB/p5n_e]fAAni_7?i%lo5L|n.|4~Mgs6)5#)RN)>@mwgq:KuW7)F ^|' );
define( 'NONCE_SALT',        ')gGXN,t!:cXa^h;vXa)VLg3|x7it{ JC^QBj!Fu-W0rk)Q~j3c*&>RY<ih4<%Xj6' );
define( 'WP_CACHE_KEY_SALT', '$DI#a.P6UzTK6kl@hW=#eO:LhvK<iMsv3u8 P*]p_.i4>{H/V*@+ _~prQ5{Gc%|' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
