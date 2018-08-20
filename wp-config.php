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
define('DB_NAME', 'new');

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
define('AUTH_KEY',         ':mWfB.|q!v_8UzB}Jd;Gp;C|AC+HT;SZ`M{_W.w-WM~>pd?DB/[4:-z*SuGM$7M]');
define('SECURE_AUTH_KEY',  '*$4_#f(pcI?0#M}Fu2Lb%-eA{^q!<~#WD93om[}z-E+Nfgb$A8+tyQus_vI&KKOH');
define('LOGGED_IN_KEY',    '(k)d:JN9!u;yhXt9<0Ip%S]Fest},F!af0z5]**9sHd<,Pk{X$?L]3{c9c#vs)K2');
define('NONCE_KEY',        '=+0)VXj!QYxINq{`X-g-`f:kSpwG&ghxak`f)Q>=:r ,H5[W[1pIac*$FQ=n+qO%');
define('AUTH_SALT',        '+yZl)~/Q/$WrK:N(:e+oq<09:Y&-j~Rn%^vE<gR8U5u^Jvqx/bN^1s}P0DcwKXbF');
define('SECURE_AUTH_SALT', 'vJ7+:B#D%&@Sh7e[*lEGWYJ,ntw*04INJCJXON/rc6/da6lh|o{#bqg2%s<P|DDN');
define('LOGGED_IN_SALT',   'HC=O*DTrQOwPL?|w&He2+3h{FQ# 2mqj Yx}#3^MW5HKPA/Q~w*h39d#7WUbhsia');
define('NONCE_SALT',       'Ko>)vLa>XqX;b!wG4H`)X]ynlO]0z+2~ceb>1bf?A ZcFk=d#VgigFZd$wY,5df9');

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
define( 'WP_ALLOW_REPAIR', true );

