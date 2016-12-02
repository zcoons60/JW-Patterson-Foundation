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
define('DB_NAME', 'Database');

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
define('AUTH_KEY',         'a2}-m7`8I:oj*|wD&$?1wZP<m}4;06Y@?YzWP;pmh[.U;2@eq)en}>lM)h 4lPIa');
define('SECURE_AUTH_KEY',  '3eD@( gMTpNVwM%XNaZ4oF=SmvWpl@u A&%*;RQPCCQb)3*I$f%eA4p:Q&D>5!)l');
define('LOGGED_IN_KEY',    'TJv*+$49*5b4YO_8@IvII) >73f;)-4W Hi)l#PH!m9Y)r%2LPAX|5;FHBcyYiin');
define('NONCE_KEY',        '6k2,PN,fRHDt9wFG#vsZNEB0F#5DU]tF!RJS7=HKjre9;DD$,0I+q|,fS`TO3}Uh');
define('AUTH_SALT',        'CL?+%!Pp.o[dzkF@PNZR=pKW.:JzYog#-|4n5evy(n(PvV_.,+Gf )~-gLzn!ULx');
define('SECURE_AUTH_SALT', 'yq.*dQg]{B]!oc+&%yg#Isn-@:L}dmX_EXFvo3?O4Hp@-S~}PFX%!_A?6@7r l}k');
define('LOGGED_IN_SALT',   '+e&#*@R=jFan28!em#@xcvphRBHgxlx(!%@.(FSt=u,vj?EJVZBLEF(7`KCe0GxZ');
define('NONCE_SALT',       '<)w8#[H%b] zwwlT4-msT|c[{g3,mVh}2=;p^5G,wG2-of=L,z)94Ew]8NYB~iII');

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
