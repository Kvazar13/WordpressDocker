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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'De+{;!Pw_ ~5Su%VP#nB7Q#LJLoPKgfUpNN^id*hPq3=*?m-)+vV`^&8lc9k)Wl]' );
define( 'SECURE_AUTH_KEY',  'u)^iHl^G| O5keE>7e22kEe-To aj3QFjye/ih=t3SB8$F :SjTBNwxhB`Dejxq-' );
define( 'LOGGED_IN_KEY',    'A2l1C*!vVMY!mv9j,kamVJ)`dwYN|o&XYp6DlaD-$N=u+X~erM;?>!zw]OfWbQk{' );
define( 'NONCE_KEY',        'Us[<RlYfH06?7Kh@c,a&hD]_A_&0F6xk}vrLI[.+(9y<;@x]=gM=5e_^)^u0|w=c' );
define( 'AUTH_SALT',        'Skt>tkFC/Tt-lfd~Z$n!5ZpSb?8OrP._uD7VVkh;7xg^?kXXtE>5drWO8Z]*Gllb' );
define( 'SECURE_AUTH_SALT', 'MT18,5riv.($hL.Ci)jY}zo=~R[cYi_z:tDX{<z7fZv* H2.{dc&#8 ~Nib0MW17' );
define( 'LOGGED_IN_SALT',   '.pDSi dw{GzxD#Ao~a$;X,)7mO<9Y`C+$7]Z^}&;^zoBsw]4]!QrZ4}M>AY_-6VC' );
define( 'NONCE_SALT',       '~d_`4#/wRUit5ixNtSO)5u`CxLueGP:DL8u,vdUL%i6]dPMpW(h2c@gKWYsmhD-;' );

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
