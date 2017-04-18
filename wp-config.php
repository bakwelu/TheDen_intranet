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
define('DB_NAME', 'ljc_intranet');

/** MySQL database username */
define('DB_USER', 'ljc');

/** MySQL database password */
define('DB_PASSWORD', 'ljc@123');

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
define('AUTH_KEY',         '#Ucak6m:ZdM3(_M.V(*)FJ8Fi:_QL/B_H;0gf8?CK69,I&>6usT%Q2D{ 2llNXi]');
define('SECURE_AUTH_KEY',  '_2u7T; Y5pv@@`/Gi)U3l|jX~:4)kkl!!`^]cl%HN@pFV>aZ5Pr]kYaS:L)F*1ZI');
define('LOGGED_IN_KEY',    ',?M:gKV#%@;2_Lkg XBp>Wq7Yh8K.(S#9r~W?RQLL&&.WujGEpt}/*SvEOsnODKS');
define('NONCE_KEY',        '5aS-45><`n<^HV^rqWYx?2U~f}u_cU/l8,Noa,iC>RoEyKd%(N{CceuQf,+?#cZ|');
define('AUTH_SALT',        'o/SEz@FJ nKR%%$?C:Aln_9fGY-K?nDJ$[+qd:t)49<*8yHhA]hcz3 cSe_ac-!3');
define('SECURE_AUTH_SALT', '/0`P*[R?#k&mV4}VrZ{gP)0HRPwt+$MN[gv-=tbSK2LfjO{qYyQ;Q*&.9d%S)2$H');
define('LOGGED_IN_SALT',   'Dp*l8^-gW133q,(>{?BtVL}J]crlr&]2cL.re79}J/l,7fBC7l]N1[cD^6p-y,WQ');
define('NONCE_SALT',       ';6P(n:m;Nc^IKlc;n_7tE-8FC+M^ol5`mz?=UzuH0M=olepFC,%/.jxDte*vqb%1');

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
