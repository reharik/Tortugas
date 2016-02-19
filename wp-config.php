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
define('DB_NAME', 'Tortugas');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '65eepZdQ45J2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't=X,5Eyf8,C.`<VLx!yFM2ansj/8|/MDb.n8+oa6N3JB-y|Xv_60k|`NxI6_X8CE');
define('SECURE_AUTH_KEY',  'Tp!ML%2q6(d%.>|x-nm0gl4+jhVG7I1o<+OXwh=lGwNAgb^Tn)A>Nk,z8I(#?DiC');
define('LOGGED_IN_KEY',    '-x`*6$Ur/j*N|,UpAw>MluP8-fIU-n.hY2I0xM~B,zcc;FUtolZc-7ddZs^iD1^D');
define('NONCE_KEY',        'I{KGny7K|UghINpDtT8IMmYQb^$!,Dbo0B|~T0GX|@kE-9{H.#1W-dgD`V -xEit');
define('AUTH_SALT',        'Z/P(HFYl,,GzgI2-+N2LSAN$gda#|4;9_9!GP@!l%:[L1;|J1%|#h[kodimlZ?f`');
define('SECURE_AUTH_SALT', ']$uQ:c.A)y:0t>1g|myD>nz9[;8P!-.KA#b/$wdK)Colnkce:uU19+)o?SR#XFhJ');
define('LOGGED_IN_SALT',   's*1Xa}h-,u,aFK%M%]Gz&|pK-uI 5F,:aSEvvx0}<egYEv>G#_Xj3Z`BYhaPk!Hf');
define('NONCE_SALT',       '4Gl0`/FC6aP+fLFF)g-FzRj#Z|)?V`oN;|;zv#oY?~Bo~G/cCL|<qLZVS(IUNZrK');

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

