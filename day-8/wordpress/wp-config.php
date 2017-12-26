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
define('DB_NAME', 'db_wordpress');

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
define('AUTH_KEY',         '&F>s8AiaB_z)5QV.4lv(KrD[;Q{73HE#[U~.C6rLgr`{kn:bP|ZAMKW5N4s^bS#D');
define('SECURE_AUTH_KEY',  '1x)K9AN~`-SX[yHrp^*f<=~s u 8[UdAxVviP*Hn#*v,sO_j+e+mkZfi%P9YG^)o');
define('LOGGED_IN_KEY',    '(jpu&*,*f}u{p?)_)CFN3ps5@z$y1DaKm,RYo+LMpk,hW,3R{Dm/IeO!SYvTEa/#');
define('NONCE_KEY',        'heo^/4?=mT~e.zr[r7Pa,%yVrsX#paNUa.Q*b:+Ry9Fuziz<0.]cl4M2=Y>uSSwz');
define('AUTH_SALT',        'gW(]4tQk#j57^g|~H^,+^0dVe V7+{?Zg.tr<}iI*qP6F4PYaSsPDp(C)u@9UPSD');
define('SECURE_AUTH_SALT', 'sgUuul>a%r$=:V!U41ak`{bvfSqL}XGD]8!iL.a%p+gwWIA*36N=fR&eL+Yjg4bt');
define('LOGGED_IN_SALT',   'FF|A.XLF]@!iKDet$q6pTqcOZ7e3 %e[]?.8nby#t:K4Pm3<~,EZ`g` Pd8m39W)');
define('NONCE_SALT',       'O%&:*:3Tk{p/4,p*n&q`o#8CYHZtU?&F->`?#58*3}e#@22pFIa81+Ca,A,5YK=7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tb_';

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
