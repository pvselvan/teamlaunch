<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'RQ}E~%2FmZ`I`w2[q^8M!+x2d5q*BR,n?<5:NKCK2(!%_h$a1Kh~;^6|$ueBk5:9');
define('SECURE_AUTH_KEY',  'Y2M2&|i#)I~CIxa{Swi[j6uaEv<}Kofm=rX#Z9rf:*=*Lq`Ur-!-k19lsf>| +wV');
define('LOGGED_IN_KEY',    '#k:IeQf{&Q9M7dl&~E!5Kwu%(foS1G|I&V;YQO^J%Bp+U-;I|&gf[G,72bHRykk0');
define('NONCE_KEY',        '&?L4X7pmYp }UUrvn!2R]LTUbv6y[O-jE}nLcx*eI78VjIk9eb}EV3WNQR)Ii-Cj');
define('AUTH_SALT',        '_Rq?LV#x{*vB>Q3V.-pF}>47tB=#:2gE=!`@>|mT>AvmBh@,gA;$E<?f+D?@eNG[');
define('SECURE_AUTH_SALT', '0UV2I#*u+;cj!o-GnJh x_KbP;e>$;dg*]]}8}-EWpZLC025@@SCoDPL6mnRpyPx');
define('LOGGED_IN_SALT',   '-[C}K6Fl-!1U>}969yFF;d0B(6J5mEi0u`Jga9DJspoz_<qG( Hn2^A6-ZR>]5~@');
define('NONCE_SALT',       'u?73i%YqY<w/-|X8j+K@F[AT@1>0,]j{3ZdlDqaIF>McYTs6z5S1]^D%cj3}1,Mz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
