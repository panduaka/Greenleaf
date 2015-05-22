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
define('DB_NAME', 'green');

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
//define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '/UbsoDw<hxt7jQ9m_i;|x+hE]<%4:SpC~+!~) w9kv`Sj`+)NEIQ?+^yN]3D|+Jc');
define('SECURE_AUTH_KEY',  'K=|q~pY)fxo0d=IgYeaqMaqx2Pd?!5&)TzsYczK#M&ov*at{fM?Q|#}`{ g3ui`Y');
define('LOGGED_IN_KEY',    '[;]8cYvY<n6D2|LBjvba`MB!h&k3hRZrk,TI7hEr#H%e-D[~VS<f-X*GB,Hq=LN+');
define('NONCE_KEY',        'UuHLm@qeD?+4&roTcd+Q2s5%xD5 hofOxV+Ww`-HU=.KW6PWAFt{IRJ%T9d4Q@k|');
define('AUTH_SALT',        '7=3ovbc;wD]hc)QBsy>MowJ+)1|t_|8&J)E5w%Xu6liU0ZlIiKK(q:~2> }||7H4');
define('SECURE_AUTH_SALT', 'IG%+dm}e^.GG|U[tCyzm-s~<,0w;>k/%tqnl1*^%zxW^P16dj@Shh`@,/!iw56Cp');
define('LOGGED_IN_SALT',   '=Cj/CJ}|Xsh^S3$$FBsc55l*B)02x0>F[#8B4]L+WG@R}el-IX_HygJuJ?E-jNY=');
define('NONCE_SALT',       'w~n@Mk4k]&!dS:(zrK`pxN pC:}?b_i$:e9{qa&WQ^YG,hx__!o1W/lMw<g6TFbZ');

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
