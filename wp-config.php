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
define( 'DB_NAME', 'hotelpalmeria' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '*sQNaB+9gh~U43~QXnkkr9au*z? 3]Gw|5]6OgWoV/E1+Br@D_!kmCS*RF^ 5[*u' );
define( 'SECURE_AUTH_KEY',  'f<MKu<>N,o+#$%qihypm^jc1<|_QKV8A2_5f:htWT7OV/5Inorbl9[k.KC=Ay^WF' );
define( 'LOGGED_IN_KEY',    'k*mgWn]-,|)D&zCeH.ptgSQJ%}-XK01j5(1+?s|6ax]Y6cLd%,|g~CmCQ/G/{f}^' );
define( 'NONCE_KEY',        'ie.4k.p]06(+&j0PRBn_Sa[G4veP/#+CJ# K`X3 VKdek#N?Ss?7[[NrF7@m kyr' );
define( 'AUTH_SALT',        'a`1_OO(7~fb6nJ?,[n.gIxw2@-XAmR4%.@XkDhAdV$,kEo-A-T4Sxf##k,Uk3g)+' );
define( 'SECURE_AUTH_SALT', '_N_v$u8r2 om5p^r*,TafF?Xl^01O5IU?kFZ)x!SoSSW:ye]e77/KpnHrv:G6ul2' );
define( 'LOGGED_IN_SALT',   '~rD|DeJbT4&6Aa8(SPxK:]ZzF6,Ry<ZOn4af/}f#f.&T[lbPfQxJD72954E0%e^O' );
define( 'NONCE_SALT',       'psW|/(:rC%m,oG7;EKc>$yTZ _ufu_UGhO>OBdqYMvE.2 hi0cVKQof:(-X+fw]f' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
