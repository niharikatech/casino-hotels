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
define( 'DB_NAME', 'u197440770_oKRro' );

/** Database username */
define( 'DB_USER', 'u197440770_uGBr3' );

/** Database password */
define( 'DB_PASSWORD', 'h9xgFYUeJV' );

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
define( 'AUTH_KEY',          'qn`i@sKQ<~feZ4I&KK*>bcD&ki?7F+BENa8C0>,#(*.28f;SEpL7CG<7^aIL.&h#' );
define( 'SECURE_AUTH_KEY',   'AMT]C5>cho8c:TBN,022:Ab:^wVv30+76a3{6`Tctz*M>>Pl!}=_[[HW)$3Ny7:!' );
define( 'LOGGED_IN_KEY',     'dR=UpZL*^RJjy:q}E(3d:1el2_{hOr^um:E(!Fsh(#f#5-@8bMM)*Ch&L(W`*,N&' );
define( 'NONCE_KEY',         'm|k2Ma.f]rE_/D2@Nt?F)laP /nCc/P,^>`O07*s0Cj=!Tl0TI8FK98KEnc]XNAj' );
define( 'AUTH_SALT',         '?nCn@rUZFQqW  _OFYL?Zn_z$f:.aAv<-}r]`0z xq34iur#???nG4,u{SAAJ5~s' );
define( 'SECURE_AUTH_SALT',  'EDsi_:B0*gv<u,-pS_O.2*8kNF%@h2 >F0+FCA+#+rrFXpB[uYV%]0{)QY26/}[F' );
define( 'LOGGED_IN_SALT',    'jy[mtaLdh2| Q~Hn:w#~ZfoZF|]jk9G=+RG6uXK5|Bvm)L}[2AJT976B7mVM^g}F' );
define( 'NONCE_SALT',        'f/[N=.*>h6Z3`LvPu4^uVcr#9D)/jC#g3xndMVD|^o]MC&WgaRrA}qCUDs0+ej;)' );
define( 'WP_CACHE_KEY_SALT', 'XiaR;M6?UWK-Zo#F!FVolQYX75=:DeC*xY1WhoiWo{oA-kc<Uxr],!hT>l0-${St' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
