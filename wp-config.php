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
define( 'DB_NAME', 'e-cart' );

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
define( 'AUTH_KEY',         'w@_<t_S>}di5L8f8^{sNy?(]&hN3D=<@0eZQ+GSd0)Oe4NNZKVpKy`PjY}QjcIB7' );
define( 'SECURE_AUTH_KEY',  'Zqq>ZzLT~M]<jz*=>Pn{+<J@N^+A!v?r!T?wV*8WB+Hp[m&M=<.+EK!aAdNTCW=t' );
define( 'LOGGED_IN_KEY',    'Ik#uGQ:,@=f;(N~*8e}Jet4,s_1vfumg-,+?^x)dT2xdP;gU7 Eir?xT:ObO)Tjp' );
define( 'NONCE_KEY',        'y@vS#h|7O*G.H@,D@d`rZPn90`C6=8B4Wrk=J-cdLH2.]M1vLT4%5i(r^k#absm ' );
define( 'AUTH_SALT',        'El:b/fLi^ab^XW(lYJAoyYCcqXP`sM`,bG CnTxVT}p_InrHvvlx+}r(,z~)YfFp' );
define( 'SECURE_AUTH_SALT', 'm2)S,X]fK<o<w}wStrw#CnfZFBhK7cLh%%g>s8Vq#sj)WzQ$LUwnBUA=]VsB%BG*' );
define( 'LOGGED_IN_SALT',   'z,l:!GLhQ/M1Fly/U+!rHXIW6BaM`)P;}9E.VKx_~j>?GW]HB^nR1Hl/yvU4v>0k' );
define( 'NONCE_SALT',       'H VYs`ndCx0o7<I*O*a8J]Z>y/kCnX):Qc^XI$I}rv)<Vhqc8H-ORks.UnKh]L4<' );

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
