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
define( 'DB_NAME', 'BOSCH' );

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
define( 'AUTH_KEY',         '#Az&,@D21TN-Z[+$*BMav?~F77.uv;91|n`YWnue7_2qvK!|wN|qtvawf:=2O9@9' );
define( 'SECURE_AUTH_KEY',  '6>5+XwY(#H-?4=B#CVs5]qT|*Z+FbQ1j,DO-jlPD#%0hv)a4`>FrW$%maIU?^rrR' );
define( 'LOGGED_IN_KEY',    '3qRkci*>eZ/Y!`:8GYaXvjjI|v07$a]Q &0z3Q{8009G^7rB&=uR25@)l5o}Kjr.' );
define( 'NONCE_KEY',        'q8XH<IMdt{)G.%3Gb;~)1HhrYJ4G8g0rn!=mPSIv/Y)@?<#a6 O6_q{eW%QgnP9t' );
define( 'AUTH_SALT',        'lHb6IK3giLYW6c(X[-=Q0USu`K:Vik(GZ1dZw63LEU+(2~?(eIF[qI8hFxgmWzt0' );
define( 'SECURE_AUTH_SALT', 'EQqjcZGCyH#3PM)UBe1W#|}v(_7%`/sBkmNT*jk#!cSC$kO$6Le$ F3(/-/Rq~Zi' );
define( 'LOGGED_IN_SALT',   'S?`^4B=B$|!yORK(wFY 8[/Lq)>MbK]Z!|Gj9<IN|jsVY}%nR%.+6`zXn)Z#Xm|x' );
define( 'NONCE_SALT',       'W`JlCsHm-3Znc=XY0huD^R,JVd5w4MD<TtL,|_G{3h&HPWwQD:<//|/~,tY.dOht' );

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
