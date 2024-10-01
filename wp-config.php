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
define( 'AUTH_KEY',          'q*[W/_z&EM;a~-{e:mmq2X7~S0>{;=<(>pTP=0lAqEEw/O7|ADqe/g79@|aoAIsb' );
define( 'SECURE_AUTH_KEY',   ') k<>pgQJZs,[o4Kj@]B/;*Fw9}_s3 dp!IkmIG3c~87xcje7sV.AvQ6F08,Bf2l' );
define( 'LOGGED_IN_KEY',     ' yvY[+ru#YNiJ)O:k {[EM!^uf-~1oGa+RH)>m@>wf3PzCkv%ZXPs@4*Kq;.1 wT' );
define( 'NONCE_KEY',         '06vh/Xr~Ez*[5$f^4{ZO2J,#WR,+^>dNQX?BKN4jErD{N*j+V~i#lBD)UhEK:gk=' );
define( 'AUTH_SALT',         '>>JW83Trei#q_w:h,m5abt1}3.nl.zS $)c>:b$6Rj;}-]Vy+4]JKN,ve}~xl>0J' );
define( 'SECURE_AUTH_SALT',  '`V)~h+}/e:bb=5y&Fq+6O%a;YV>xIJscA(1PRXO,oYaQ<vwl2Kn=C1;e%@N}El|{' );
define( 'LOGGED_IN_SALT',    'yGTYb2-4fSk%CI%G*WgW?!x$t]PX<)(2>dS-F:6~u=yv<Gp58<6>^*5<@^GA~%02' );
define( 'NONCE_SALT',        ' az%v>0/m83r.B[=lF~+By(Qm^rvOHgp:%lTO!9?y_4 }`oj}gp@&I7fqo*n!=Pu' );
define( 'WP_CACHE_KEY_SALT', ')_s3`d2(2HYu)a(K~l~;>w6f?>7g#LWY atvQj^eE4m4/o$zo|gGHa7t)k05v30J' );


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
