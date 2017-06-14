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
define('DB_NAME', 'phpdesign');

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
define('AUTH_KEY',         'Wf=d;G&Fn%,i$1IkY<>V&f%T0Cn=}1e,0JvzEXZBd+$),q{QQ|.7YmI=>B32xFhz');
define('SECURE_AUTH_KEY',  '9w9E4bCso~{R!8[=G`k]YaV1qw`[+]cf;?45]4$ K(kSUN&jp#BD;=I[>N}OuHO<');
define('LOGGED_IN_KEY',    '<GFypNV|QSFLe<+&GG96V3EK|noSJB+CIrtl>qT:j,pd7/TP}MTMBjY+=WIgaffH');
define('NONCE_KEY',        'StH#*>XoNo=D3l|fFAZB.Z/$y2NirlC9>Q}Tl[sWZtZ9x}U,;NLG-K#8dZe#2pY$');
define('AUTH_SALT',        '`w{$70VGlyJV+txME86HRMI/xs)@&wmV5<z]:SVDiu-jwdyoD/DAH?^axPLNjgXs');
define('SECURE_AUTH_SALT', '4EP0^9*@m7L:2#17gUXcU] 6CR%6<P;i.qs ]$3PcaERc4y1Pc3^J[?{a4K:JT!H');
define('LOGGED_IN_SALT',   'G$+EkkA<qnp3gGY[CE,C4`Rnw%h{11/$+:W~iJjp2`Xyf(aOz+=:v/LCDDo4tr0z');
define('NONCE_SALT',       'E wchZ_{gW)a/rq#.O9=({0iE~q.6t#+ ?4xNnmzkEr<|R<j=h6rT[:$<`5UYz^q');

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
