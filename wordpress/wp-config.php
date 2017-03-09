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
define('DB_NAME', 'wpzaken');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')_-m)wkA #q*YIshpetT~Wmw 6<ghsuekH8T~~7L/LlRoYQXr2R52x~mjWx66u5R');
define('SECURE_AUTH_KEY',  ')h[Ir`=bj)P7!]0DOH*>aeR/!S^drT 1u$-In9qd^n)I[:9>9I9P*:FD~}syl?bT');
define('LOGGED_IN_KEY',    'j(`;e:g,Y7tcH 9qpNY(JPg5M:XrJ~K;~|&w5NxKPw@/H,!DJW5(YRlg?t)6_mT4');
define('NONCE_KEY',        '7~P1B;1G(=OwQu(eoKnp_T9yK~wFe^<j,1S:GiD+Y]Sqb7}4qa/)T@qzM8iiNEGA');
define('AUTH_SALT',        'DFHU~]npBtFb?#JRPpKSV3jF#m <0v2Wxmp&J|DwKkG`C;XXTL/=YZ^JFkoBqFie');
define('SECURE_AUTH_SALT', 'DKwc49om=Mr6<Cn7xA6W?^|>SH`Y?6Hq~T/->Ag%AFpNE?D^JD`|DIZMIS]XNA`:');
define('LOGGED_IN_SALT',   'MkX6R0LR(El@IGc:]6@P-gES|-08$jX?R,H(rEX@P bR|cHh{.QWd*9ME5a]<.p~');
define('NONCE_SALT',       ')}.+R2s5xn@G><VWdmND<2e=oe$)=u0ne3oYLNr#GNtT&2VB9Tw@(3mV)j;w{mb*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
