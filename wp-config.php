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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '9&b=nvUaMW`?_:QO%O8SY?u8.C-e}]e!2TJ6R|u:X%AvBF5B#yTDPX+Tq5$;]-<(' );
define( 'SECURE_AUTH_KEY',  'eSlI{6JR-,utG1BL=>-l?bw|v.3htI8o,|=dNGGK2Ht]*>nw ]44Zc(hG(<Fo]t7' );
define( 'LOGGED_IN_KEY',    'IvbZwVua_4rh!$gZ!)mFX.9G7CO?R0v3*OYN^HbXX,fJE]-M=q]KXe)DpWX~NJ3~' );
define( 'NONCE_KEY',        '6vndw(B3h{;4o=kQcM4$KziwC3yX0NHm<EZ4MY|E_t{Gz@+,=5Q0KG9>SbVZM+dq' );
define( 'AUTH_SALT',        'Mc^ma?/;cm`pY$(PV0*eT3~xCtM(Wp/%e#(9Y||s}(ZO|)_?* r 7r9rY6Mzmw+}' );
define( 'SECURE_AUTH_SALT', 'ycN  ^, ::@,InVCo[ np1D_ MgBjxkv4/ac?tFR{fz&(NcSti.bE*dHtqcc[J!Y' );
define( 'LOGGED_IN_SALT',   '^SMn(N>]5kR(e6i.XY.fId5EO5>zZF?T7qQO,/6vN,.THqXCxd!1f1}`JO-rW}J5' );
define( 'NONCE_SALT',       '.dOV6l*ti]A9~0|-A%zu|<8RkgD``0ap&Av)%2H]W+Bjd9{5AkWY@z6pd=SneiuO' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
