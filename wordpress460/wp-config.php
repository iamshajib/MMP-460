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
define('DB_NAME', 'mshajib_wp');

/** MySQL database username */
define('DB_USER', 'mshajib');

/** MySQL database password */
define('DB_PASSWORD', '23336310');

/** MySQL hostname */
define('DB_HOST', 'mysqlsvr');

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
define('AUTH_KEY',         'Sb{v^^T?aBMOdQBdk%}H8D$rUQoXKKJN*+x={o;[;I^G/l^I*0ydn,R#7&mr_^T^');
define('SECURE_AUTH_KEY',  ';4Pl^&6p $H^u-m>~pv?I`{8kEaen3?vw%Cn~N)I;m=YI>B07?,8*riG1^)VF7O1');
define('LOGGED_IN_KEY',    'bl-j%aMr;p^`_y2`T-Sy]J:uDFE,o:48.~+l[oDmDu<`LRPQ%-OS<t<hN bW[t:S');
define('NONCE_KEY',        'Jl8T41bht7uX|eR^a4/ZtGM!1qpv]}o+UL$uxvE4JEoN@m|raDrhU4|M?nyqtP23');
define('AUTH_SALT',        'za^&x6>8G<!5//hlu)dWYK5p)nC6.eSU]S3K1KD>1_Kr/ ~z^vrG;uN2z6C_?AVz');
define('SECURE_AUTH_SALT', 'V5~w. Og4K-zZbqDVv#:$xJ<YS,pF()~-@v/TZ9dkA.#x;9l.UV*YC-Hsa6wKwjF');
define('LOGGED_IN_SALT',   '/^$_%K~AZ#v=IYW7E-UqQDZ%oUApIb6%mk-8#CSnN[K}w<%eMM-iG#,|RZ`*lud#');
define('NONCE_SALT',       'A?]3-pmCPrqb6_C!> %S|ePkl07NQZT}=,|~.-1IB-4W)e}BIGXwl2:`fPr*C9[+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mmp460';

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
