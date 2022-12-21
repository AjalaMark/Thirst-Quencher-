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
define( 'DB_NAME', 'wordpressbeginner' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$SKe!.wWFjAEX.v4`_I)^we&SuX{K]SU{mcgh*_?P0}(5D!rj{r@n_E1*`y`ibbp' );
define( 'SECURE_AUTH_KEY',  'b_t&A%s9zB!Y+BKeKF7tG0Xfb2J)U(cOg1>yf`ZkM).&kq<vz#e|H~isicxGg/d9' );
define( 'LOGGED_IN_KEY',    'i8](Y*~g]|5OxTORa;4;%Ic &s~K>dyT]WH;usne][kQ$BesHs}ZF_N*18T/BNRx' );
define( 'NONCE_KEY',        'BUfO+,YZ#6Ev:FN-X`<6#~3>,qxMN;0+#R*Z5.93[1@v3l-<~QdWux><UgH;[#;v' );
define( 'AUTH_SALT',        'Lvytdhnl`**r/_j*2+lXqk#ES1y_^2KMt=&6O4KNs/i|1BM:6KK_B?34-l|Q>q~W' );
define( 'SECURE_AUTH_SALT', 'TlI@3myk;nFP6~&Y%gGj{HA9aTXaoU:]f144cpdja$2Zb^39s^uS#o3$uoMfG{&G' );
define( 'LOGGED_IN_SALT',   'Ygl|gQ:H5`4>YX}Zv|tT0lBZ1i4RJ3IoiWhg2&T7&I3^XiI<Z2tWT$>*$TgV1x|E' );
define( 'NONCE_SALT',       '&|Mk0tKNx *%i%&V8B!>r)_Gr,V ok)/,={adacZ-=!P&=kZ~_JoQrQ{zx+od_Pz' );

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
