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
define('DB_NAME', 'maine_mussels');

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
define('AUTH_KEY',         '06Pc:Ut/O9 qlc4j,_g.yS!d`F0=5Zr^F$s3F KsILQ5Cj|<&IEM_{Vd>8~CTs=B');
define('SECURE_AUTH_KEY',  'qhmaw~aT<AdjqOqo?3),dm+@!P?TVM:uN.6V, 1JkqDJ4(:quhW+.$=afRBvkw+Q');
define('LOGGED_IN_KEY',    '_^EnV;t?Ytc.m`:43|UX+4@1CpNxSQeNTe47fZZX&:gF*OS5/xs3.D441`k}cleY');
define('NONCE_KEY',        '(>W`?t$T6( v_`|eM~CXcO]3iNKju1~bV`_.t9;#[4%$oh:0xlgR>7#kX19a(,X@');
define('AUTH_SALT',        ' !GtPV4sgTg&])c[9ck{~GWtnFtWmj2q4pj>jXYn@AHK4tuX_xC7:D[:Qp])S 9l');
define('SECURE_AUTH_SALT', '?#*5T*B;A+LWuPUJzd D4+JvMX>kaKbgA$^(w/~>_<$X.g}Pw$Izy7,;dZs7?f!?');
define('LOGGED_IN_SALT',   '{g3pw05fks,k$4%NP3;@BpZrZbtsh` M@U}tC6Jd&NNI`T8S1cT>C6aSt_&$ZV-|');
define('NONCE_SALT',       '#$GHkwf;`?l11xP|i$,BSUa/Ne;|h[Ui..bENAg]haXcJ6|J[#&18xp[9XsR7ht?');

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
