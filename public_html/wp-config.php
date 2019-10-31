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
define('DB_NAME', 'ngocomun_live');

/** MySQL database username */
define('DB_USER', 'ngocomun_icef');

/** MySQL database password */
define('DB_PASSWORD', '3AI?J-[Z#X.$');

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
define('AUTH_KEY',         'w[%}ammU}@1v>-(3H%;+/~;+Q7dEUwq.H+~|HK6C-ExL--=@+R%@-LfOdw!s>uLw');
define('SECURE_AUTH_KEY',  '>J*_*YmBvY(?21[)<[c0%tR;s5=-$X-I$!%/,!{+Ll 0cQ.,xQ@E%KPA2YLGPO]r');
define('LOGGED_IN_KEY',    '5t&[Lc.thW%k3p3i`EoLFg(]A9VHS-F--(p7;Y%t-l>w/|}:JarladHqV>EFm;NK');
define('NONCE_KEY',        '[fG<|i,>-%=Q6:s`F#:r_mg|_O+r~2kj?>}~W1@ax-la0^W AghiHa/Ao|!:xYnd');
define('AUTH_SALT',        '-s|3TmnNIR}3eO$bBd> lew$vaOY:<j$!^.~0R#>-5y-6]+~WQhE]cR4v,Hzc-G[');
define('SECURE_AUTH_SALT', 'czrHnA>K.IU=6Y.<NK&1Jo`iY9]^fXcWMpk ,>*ouddwT X#[r8MnwE[hV*RW,V ');
define('LOGGED_IN_SALT',   '@h4x}<a!#y$.,;~*.DH^]-U INx[}4uaXF<,8}zI]*D+99p~f+6Oqi.48`F^.zBo');
define('NONCE_SALT',       'bry@:q]lcA&EDfF<&3>56^Z@3zr+38zQY!t02-!MDu`}d}a0Pw{,C~Rmy|-AgKB^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
define("WP_HOME",'https://ngocomunicef.org');

define("WP_SITEURL",'https://ngocomunicef.org');
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
define('WP_DEBUG', true);


// Settings modified by hosting provider
define( 'WP_CRON_LOCK_TIMEOUT', 120   );
define( 'AUTOSAVE_INTERVAL',    300   );
define( 'WP_POST_REVISIONS',    5     );
define( 'EMPTY_TRASH_DAYS',     7     );
define( 'WP_AUTO_UPDATE_CORE',  true  );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
