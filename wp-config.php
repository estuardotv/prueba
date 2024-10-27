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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'paginadb' );

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
define( 'AUTH_KEY',         'cslRgnL5I&{+,gC%/+G~NTmH;LP1[[+JM$p`=+ai$E?uRk&k^?T:3&LRdx5sqEs[' );
define( 'SECURE_AUTH_KEY',  '9NVZV>J)<P_&W(]O 4fn_tb+O>~-@Nckx7+zH iQeNYCs=IDGWaMEK:Q$L+g;uGB' );
define( 'LOGGED_IN_KEY',    '&@Sl#2y)kem#PMM9|T9_7kj%b(Lg4+*}^DNR{>9H*=?;Qugiw#JIk7=T]]E.Z4%S' );
define( 'NONCE_KEY',        '1aVu7kwz?U/j{Rde~}CL]SN(;482@Z]o?x|Q.O3bn^>n)$pKCq];-qYCesI_C$5{' );
define( 'AUTH_SALT',        '-pozk|g9[+-Af> jTn]aqC;];w,n~yTVi`[@kf<qMiJB&5-`!$`p6jLkwJ*)|/u|' );
define( 'SECURE_AUTH_SALT', '[3e?,oUdgQG/Dq9ej%,cL E%T(q0vX@8:N90)h))&R:|YQsx|~<UVSE`Vx3&8ZQ6' );
define( 'LOGGED_IN_SALT',   'b4f}$Z|Uf?t54I+47fzZZ?&N,3Knm7 qrx4M`,$%d];t8 j-oy3)V)&?m0=2Hmf@' );
define( 'NONCE_SALT',       '6i/4Y$M>eX2dM5[cS^Ap@}mGY/;D|]Xle0|p>tZk(PA?$@<M+**Sm^m`>6,_^FEO' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
