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
define( 'AUTH_KEY',          'n@JO2%f$p4of%PuO4/Icw?*P~pv-cmcbND++],rvD,2{81nxVy[)hLkjxoV5D4NW' );
define( 'SECURE_AUTH_KEY',   '[g$m4?ANCEaNFb`99+9qm_bbj`&qYn4LCE]g<{oZF^PMAZwY(ui%uVJ$[G W.]dD' );
define( 'LOGGED_IN_KEY',     '?!{05]t!FOl|c?&fbI,+PhiHKvk%UF]@EzH`|PWUeGj-Wq,qs[/X/1nrcsQb{%;N' );
define( 'NONCE_KEY',         '$Q4HJ;@/umx7:,j{<.y9+`NC|kV:5d#t/&v*}Cwelw(W3+e~OU}d9mto,ArCfh>S' );
define( 'AUTH_SALT',         'f(QhT)}MZ:FOD) pMW7+;O+y:}dmWy@emZx4@cNF:-7Nf D}AY|HzzTixD9<,}v5' );
define( 'SECURE_AUTH_SALT',  'wj;^](!Q,`xD-8b=h#XYd#=25&f7X<*q8eRy,!p&bHv<b4rVgJk!zk7o ~{~a}&y' );
define( 'LOGGED_IN_SALT',    'Dt8R-#6[EP h[YXurllU0*<kxwz}mvSxt~dgpch<O,Pj,UDQgSmANn8~v:*;80to' );
define( 'NONCE_SALT',        '5kmvz-w*27fpLyh!z(E`un$E.J1`;iyxmu1GuSX=#=GR.v~f<jomk<J<`j,M8dhZ' );
define( 'WP_CACHE_KEY_SALT', '-hbHmA<ebss_12ns0BlRuN^#lzcBtU46x,(.|X6T/<0oh,/1vhcxK!:(%lK] ~*T' );


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
