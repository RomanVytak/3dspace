<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'prodizstudio');

/** MySQL database username */
define('DB_USER', 'prodizstudio');

/** MySQL database password */
define('DB_PASSWORD', 'aDreams_1!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'tZfCj#7-X>.hY[w0]2cbFIx*kO96H$o{do4.R.bwn|7{<:mZ+(=Axz&}@)IIf,Dq');
define('SECURE_AUTH_KEY',  'Q]Ga@Nl,(H3oBdky+C,a=F|%.,_`zso<#j%udF7*#/gNE`j-ny]~|4-+yz =LtmW');
define('LOGGED_IN_KEY',    '+OYEP0v.UJS#eL[fSs^{PNbg1sp:X5*7qNHtY#*B,E!6W@xh@[$Wktp[ _)<Kv>G');
define('NONCE_KEY',        '$El81k)6_M,m-H<,jc:Vwnu+z%rv.i(#~>1cF7ZG-lT+Fe@Cw#+%nm-Pe^ZX}DUp');
define('AUTH_SALT',        '7@|W$|GyJ9TP_%egD+,Ac:57X6)Hb@KPa3*: xhLNa)Vq-]~+^PMTf;aeQ*Hv!z&');
define('SECURE_AUTH_SALT', 'Z/}=qBK33ZN5JuFt3@n|}_+Y/npyDLe/H|TjUb[(-yk+[8Y Ot )uo-6y1N{.b-6');
define('LOGGED_IN_SALT',   '03iWC&p8,[@3_>QEtg>e<+fV+!+uZ_68T}B?]#VSa6D*NAoGD|G9lC I~>:/}+{^');
define('NONCE_SALT',       'Siz$kZkX-3,V%*}|/u1vPl/t7=R+eaz-}ui2<c5a]HQ9r)Sx%+D6NY;mgNv-^N7J');

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
