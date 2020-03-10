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
define( 'DB_NAME', 'navneetportfolio_db' );

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
define( 'AUTH_KEY',         ']_==G[jUO/-a#LB&tL}Nl5Z{Mfw/s#(<%~Z//]U`cbLP&2DB&qSCGwxm~Gt:0A.{' );
define( 'SECURE_AUTH_KEY',  'A6e0IIh$i=}i2z&-C%%nAhKd4d&@7%- 8R-]:wvu&r?M(!{<QFuk;EQjVB7C6cU&' );
define( 'LOGGED_IN_KEY',    'Wt+0TDs^`UcdKC;*ILsoyw]tM%<<]?B&@R.z4lnq:MqZ QtaRAvnyo$)v/00Q`(G' );
define( 'NONCE_KEY',        'P4((5bVds}T*mtDHnD10N^7EoTsf:!1pV+|zk#miU.JW@tKZU5f3@[O7k&gr`av4' );
define( 'AUTH_SALT',        'Np(Xk}g}>pia(LTyq)FHW-:)E)@%LN+oIlL929K[4JIF*o 2qNKC.~6}%@DM/gQz' );
define( 'SECURE_AUTH_SALT', '):)d&Pq&!4q%U#kE/L37{BD*)Vp@=Ny!G#-B)kX3TWLy>C:TV8jvWryHt88[<`^e' );
define( 'LOGGED_IN_SALT',   '::_<>Y(:z3+iv|w%r$sN02D~QIQD0qsM}.E_z-7`3(Y1OSfuQtgD,$ i`%l+ZKv%' );
define( 'NONCE_SALT',       ';Sap#Gh5}4E!`n:-yqo:+y_6RfKlSB9kGVIz&|B0w5[T)DA+`XW<bW$z?4G|3)g^' );

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
