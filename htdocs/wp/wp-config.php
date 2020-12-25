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
define( 'DB_NAME', 'wp' );

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

define( 'WP_MEMORY_LIMIT', '256M' );

define('FS_METHOD','direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&}H!lVt02CyAM96h>;2Ki.Tl+cziP^(J?,%FBy:(r=#RwcPvW.nu5rWWoqrw61k?' );
define( 'SECURE_AUTH_KEY',  'kOQ:cl,3)8>oiX^dwYdt1D1sdy21b}Sx)<s~&{~@/v_w`1:ynW_X@MX>X;;]Qbfu' );
define( 'LOGGED_IN_KEY',    'Z9IzJ%{+mxqg, ^owH(j0:pX56mSd<T+?6&7;hc2Gh1|Hk9C8p5m|Ut$Pmm|FPNw' );
define( 'NONCE_KEY',        'nKz}LnVO6v]Rsm;XAJ7VFM6r7VObqVwWZAq82qTdX9?d<%i5l=3$/Rli#%ySy )9' );
define( 'AUTH_SALT',        'N@sA_Kl;+u}5|IsO/,zw=G/,bhxI^c*{R?SY<L 5=`ls[IR:X80rF{bD0nlZH2j,' );
define( 'SECURE_AUTH_SALT', 'M2,m4%z{^3;iRL%Ojwv)L-1e&R6cC]UzZ<G|9U$*D(OI4hwkf9c2a0EP_x,gJ_tk' );
define( 'LOGGED_IN_SALT',   '2&~.dC6P>^NxXP#~J{M[*^J,W3T!l{6Jq{`|;2)*:j;LgYa>U[)`w+BwA2?+(gu^' );
define( 'NONCE_SALT',       '0[$+4rJb3)9*&Ln*~1iSel|8)}B_T Zf^]yhHh.Fw+Q$Q*0%kFG$(;nT/=wNy?YS' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
