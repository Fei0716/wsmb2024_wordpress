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
define( 'DB_NAME', 'wsmb2024_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3301' );

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
define( 'AUTH_KEY',         '4r6m;rvu?@[[(uDH;|(O<4UUFuAZ0$lzy`(c;Dw=a)mj}MV=Yh&e_0!/3brOP*3Y' );
define( 'SECURE_AUTH_KEY',  'h>%OQ]fqse`mcg?!Gg~rr;?K5+GHr4P}q6T-u2G^[#$~RMY16G)AcW ^y!$s@BG8' );
define( 'LOGGED_IN_KEY',    'VYQN66Ldid+`CRPLF7N:Pm6l._7nF2PAeW[GTNO9dat|oxiS_:3@i]!?O?FCk(!5' );
define( 'NONCE_KEY',        'ZdzyR{GUU,Jqg]=oa6-Eagx} #vuA]{>F{krs>0Bn>wv-`RQ+N&/YeFHRX-u1q@9' );
define( 'AUTH_SALT',        '; .+xEJB;#$$m]m(Fz4U*$4&s[v8UEZ>nH|D7GU%Oq4 K~vWpcc(s~f<uOzObvLi' );
define( 'SECURE_AUTH_SALT', '6P8D?(R<gG)Q[KBHt.-m`#wh4fNpd(9z4Nx75`g>#X6GH*`w#/tN2H8hqj~wIj$?' );
define( 'LOGGED_IN_SALT',   '`r,.x_^%!BjH:8F}(+pn(gl1ymA97;c1p&v_eQ6:cA2tmTgY^(dhddpQw[|xr8`@' );
define( 'NONCE_SALT',       'j&+AZK&/SfM(1vvxL0BJT]6?,9 _rb1=h^wuR(C`{2c-z3obv=#q$RJ|=wPa!m z' );

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
