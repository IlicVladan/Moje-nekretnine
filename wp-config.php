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
define('DB_NAME', 'id6054629_vladoilic');

/** MySQL database username */
define('DB_USER', 'id6054629_vlado_ilic2008');

/** MySQL database password */
define('DB_PASSWORD', 'Yahoo2017');

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
define('AUTH_KEY',         '.cBkDgN~jBC7H%Sth!93]ld2kj{LZfLU5#9zlM?QHd%T#2ODBZ;dbEXi<4IiU<3a');
define('SECURE_AUTH_KEY',  ',:<blgzx&rE1 tpB[E&:4#+srK[&%YxLu8sxlQ%{3N: HD{B]k,<7F` {it;^87%');
define('LOGGED_IN_KEY',    'TvH#@n/z:nu59u6m$Z>.R-[M1.=6=O_l@SY[vj;fFE`$v|y+N{5kS):rf!7ucNVW');
define('NONCE_KEY',        '}LZb$jaFK~c]A-KFP?$ uHe_Ca}gS(#5dJanE<^EF$$h$;]qHLRuNd%e,+b0lYso');
define('AUTH_SALT',        'D+St<ekNXgt-$E+wpP{5v;3m$pGwtY(KaDH5/uwgrLzJ<a$A~tfi.3Vjx}oX%1-L');
define('SECURE_AUTH_SALT', '>pe|~4V%XI*zUcl~q!T}2J-n1Z5wjUHm6.O3TIa5/w.,A_X(E2#ePm UVu!;viSX');
define('LOGGED_IN_SALT',   '1W];xH?_23;s<Ymuj8t/(u4kM%6x!Yo@}]6^!;hk!/CK+_JRj@]?DebvM}*I-hv>');
define('NONCE_SALT',       'F4V4,mSM5ep-T8f? ~4K@^B.VqiBrHy%}ZqSA~&5o$D/R|}fVP&4&2.ZXu+t$DdD');

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
