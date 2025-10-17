<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Craftilo' );

/** Database username */
define( 'DB_USER', 'Rikito' );

/** Database password */
define( 'DB_PASSWORD', 'Krpa898150' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME','http://vps-14cc07fc.vps.ovh.net/portfolio');
define('WP_SITEURL','http://vps-14cc07fc.vps.ovh.net/portfolio');

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
define( 'AUTH_KEY',         'hFyI6ec~pdS:4Ck_p^F>$`[-L[;HessDQ# DLfI?>0Ir7Pl:gOiBp5?Or!Rk>M+!' );
define( 'SECURE_AUTH_KEY',  '-TLEcj!nMCjO4C_@LUe4)L=uKJ8 >s%[PWV+RO+5oukh-b%>*J%~;f,vNm[/lBNf' );
define( 'LOGGED_IN_KEY',    '-?u>P5S!JO@|==)HImde(i%;H-Ylmy|1fVMO#~.`.U:>P1D,btGy<!~iM]O,hu4>' );
define( 'NONCE_KEY',        'NVcc:dwF78WKiJpJi`BA8;znHRjR1u~BRlBw^ud`+Lj(-e1r$EK<3kbFaa:L{W7u' );
define( 'AUTH_SALT',        'smn[+8L#Q`J%,KJ+ffFsU?tMcx 6x`6esT(pgv~ar1uv,#dk#=,ThIV7~)zZ}/3s' );
define( 'SECURE_AUTH_SALT', 'b_SU[<EU~}y6?[awvz^6g9>K4arLYDpUNl4X8R%8S&{{ZnLS2JQH7.X5jc,8|nPS' );
define( 'LOGGED_IN_SALT',   'f|ADRc9KUl=GVhkcmt=PiqFSHtXZloKjm~J](qwx}@pVhFZmC*R}S^.MJ}e[@pgO' );
define( 'NONCE_SALT',       'u!guVXVTp*,H7f!C)GbqK{]6]j?I~qf5d8qD$tMBRY?hwWI;|CxqF6&tV{I HfIK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
