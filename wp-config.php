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
define( 'DB_NAME', 'ulmen' );

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
define( 'AUTH_KEY',         '!<5u4qDSpsv8O;Y7DInwmZXX9*NjpJhZ5l>R?;S(=zumeWqx/je:Ni#eX*I*jFEm' );
define( 'SECURE_AUTH_KEY',  'C<V/(mH1,;awlS<]8gZh^SdybG6x:p2[> =;Pr:JbzCuL5EWrY_g-O@Flqqa?8|0' );
define( 'LOGGED_IN_KEY',    'Au nL|jzA;dESu3f2.h[cp3@iXd|RctsuE8#{-WbR77`)_B+<,v^cS:$_t|)2?,^' );
define( 'NONCE_KEY',        'mI3(UPu2uwv/88?UhZ<|N|9G?JsgLy<]mqr{A]y(KJXWoGt0a4P]V$I AV>LZc2.' );
define( 'AUTH_SALT',        '#&yn0m(d}]nY!Gn?o@<c~)^u0:!{48b1X$_ddvnpk[uCULvg7Att`61*[ap<#U.X' );
define( 'SECURE_AUTH_SALT', 'A~hh:d`Q]^CcNsGLWQg<p^@)oDjR$u!oiKGP<L]A8h_`(=3ip{8C0-Ti8X*%^[>9' );
define( 'LOGGED_IN_SALT',   '41^gUf|-a 4>frgjKYxr=FF]vV.8s6xED;3fd6-^WC^h/~;n#vkw]uE,lN]6-`Xt' );
define( 'NONCE_SALT',       '2*_lU<}=<:})Q]kiQl`sFW)En4`}_;1]YOC1g`{>Lh6VG~!5}]-1L1/0}.gsPw>&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 's5h0t_';

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
