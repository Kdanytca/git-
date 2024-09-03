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
define( 'DB_NAME', 'git' );

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
define( 'AUTH_KEY',         '.%rqOa_JuidIW&8aH=b;O8h V(B`WXC]?/:X-aVc;MpdDxQx$Gb vD2e3k5aYsi7' );
define( 'SECURE_AUTH_KEY',  'yO+$Im@=i R&)dw*%.Mc{}}PLqk|LC4iXB gURhdh}a9k<SgtWsMzxu!Zs)l)H;C' );
define( 'LOGGED_IN_KEY',    'akO;R/h&f%(id9M((f)OBDo.syp#MtOL~{F[!@PrPvR[PyR`r%S3j iLNtNI(mwe' );
define( 'NONCE_KEY',        '.Bq3<q{jKWR?R<WeT!7abSh{OPk-_}eFVQ+K/g9M]T&*5W7l_ghxlEVIdsFei!)q' );
define( 'AUTH_SALT',        'gN!d*HSdwN^qq vAQ&|7Ig&4p<2S/]9JD|kz*A=WhtK20FWn|QQIQr.~y`>7JJba' );
define( 'SECURE_AUTH_SALT', '[M+,ZlN^NuT[}*etQ=10G=L#in~EL{W{%> b_!taQ~u(Iy~/GG$o,H$GNX(]2R)K' );
define( 'LOGGED_IN_SALT',   '`N~(S-UOA9<tvw1a$JAhVE?<9Se/zkIy/l!AZzr:h3v2s*FN3FQQb9IV -SS~MMW' );
define( 'NONCE_SALT',       '|pxDF~<@qsT>BC_W}wKHXUd5}$[$pOtcxcQ@6Q8bjMp(>~c~yhqP-V&jZq~+z.&j' );

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
