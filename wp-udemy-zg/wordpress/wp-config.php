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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'database:3306' );

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
define( 'AUTH_KEY',         'R1#wSZhOLSP*oh)!=`|27QM$s07Q03`Kn9/cxe?m8FV0jjv91s,K0Cm-/DzABk$|' );
define( 'SECURE_AUTH_KEY',  'd%q:Jh! 4zA[m;Losnl[H<Iy>g>!;-CB7E!E>M:RlJHm2>T|W9P94tV]{/mU0g,z' );
define( 'LOGGED_IN_KEY',    'M]<PGan-#`F]|xsL?SA@B`Et`e9j{B[*_zc&FBc ^m:&OJ51yZK/+`pB_Zjv!1_)' );
define( 'NONCE_KEY',        '@etr>&rpzWdLwIObh%Ig_{rA}@2/b=><qQ8Lx*0?8IuM6]U^S9istc)^+;nu*6Ip' );
define( 'AUTH_SALT',        'K$;TkQnb^/V3G&vF`{dP]K$$L6l`J5E(+->%?YHy[;q7jhJ$FLum=%#y.}X*(%H`' );
define( 'SECURE_AUTH_SALT', 'H-W4x6MsDwx^M#6nU7N0Tur}t(biVwM84HQ *F.8!?&q/&7t;u?P]d1ci#GXg6WL' );
define( 'LOGGED_IN_SALT',   'k}0k2-a>qrMxe@9}R/2PSAT%id1359o_os[Uz/XMfbn6)oUOie>VX>x|F639``o;' );
define( 'NONCE_SALT',       'QMvG_]//h$7C*isl<jjW5uAz)hmRD_1=CW!<;e)_GDMUgA6lO~o#{ao=|63>ps1S' );

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
