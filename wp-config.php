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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rentfurther_db' );

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
define( 'AUTH_KEY',         'J0&5(TN`hfJX(_,fdm7Jj12xjf,,S*~OA6Kbb[RIZICfrHEv;PatUj@-wi7ki0A7' );
define( 'SECURE_AUTH_KEY',  '^M9xj]hA~hr)-}3f5uehzH{Q!wok/B|jZhz>&k&|!Bo+%hl);MP&YC!)E$[U(Uy^' );
define( 'LOGGED_IN_KEY',    '<s>i4UqDH@}H|k;e&fIdx{~_e7i&:z,{s5LKVpO^S:wR2*nN$OEk9z_#Y|@)Yr,4' );
define( 'NONCE_KEY',        'F6=SgOJ9AfTOtNR^e,-iEy$ogUvU]:kYoSWZq{rKM%9 2!+EvcEjzuc#m%#gIHS/' );
define( 'AUTH_SALT',        '4,9nu/n(!ue?73EW,gl@NWT;u$o78RZ^FPGQ`XWUn^k:WDu/A0Z:|m]l{R.&+kTr' );
define( 'SECURE_AUTH_SALT', 'f2!&^VE>yu0{T)|%Q ~f( M*=7FJ|i)IvfX`)Kr^rm~Wh,!VJo(t!U1Mjzw@heDT' );
define( 'LOGGED_IN_SALT',   'j}Kz<b5q<x(D90r,YYq=3)I&vX`F,[1&&*^!F<F2y|Q0{r@bMD*RWfN6wB>=$iPh' );
define( 'NONCE_SALT',       'e3YP7 o<%-<nj(i:p7_dg4]%`dlq@5ZAk =6UAj?0^l:Y1Bneic:F7Cxk{<tn^um' );

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
