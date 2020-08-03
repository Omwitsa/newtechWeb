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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newtech_site_db' );

/** MySQL database username */
define( 'DB_USER', 'Admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Mjumbe123' );

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
define( 'AUTH_KEY',         '14h 3fx;b+A*[ha![[^4<6!%}Ch|_QK;=<`9H DwYEv#H-ec#cL:f#|LFkIohyIf' );
define( 'SECURE_AUTH_KEY',  'h~qNc3[TylD5,;EY#+Y8yTq%j?=: tkegUCPcn.y8[9.Xv6Xy 9oqk&w#*e(ZDX%' );
define( 'LOGGED_IN_KEY',    '[?-wB3o`n@}9d?`RL+Tet4xK<G3B jxwqS&Ax,/lS0M!nJ(J5|J],XG`?8U4447<' );
define( 'NONCE_KEY',        'CQ4?*Pu31az*f,$>|G?_Tj*k4su*P:tNZ1TPOzSb;K/v)p~rR-_#CHLa*.3P[)!a' );
define( 'AUTH_SALT',        '&Xi%9+Mqah3.g4[y-?Kyd6?J4%84@5j]uZ:}H,z^X?O4}&Mi9;K`NP>B,+S+,y.H' );
define( 'SECURE_AUTH_SALT', 'x_[?87&c+&~e;Bp`+W`bG/MU>pdnb3W(VOs4;BD5YrT<%Mh4F)f~%,1c> ;D$GO9' );
define( 'LOGGED_IN_SALT',   'Vip4{Bn,^@T  O0{r(b^| p;A{Ak$L1jTD}cB{e8<{w:36){[#{:.<9ImCs/wql6' );
define( 'NONCE_SALT',       'f~CF,6INynpR79Y0H(OztliYLAyt,T7$JI52YYu>iyJRPEBV^>P~xD(iz&3=Vko<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'newtech_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
