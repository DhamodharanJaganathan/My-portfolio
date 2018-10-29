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
define('DB_NAME', 'Android_dev_blog');

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
define('AUTH_KEY',         'AU-n9-Qbql027) )tj3-crh}[Z^D}f2BYJ{6ZPgcdseM6Bxd;Yd}V+yvK2rey5Z[');
define('SECURE_AUTH_KEY',  'HT,]!7f;*GmGs]N0g|X,NdJ<_2^.D32Qen*Cmm!9)$]P<]3?I}`5B(*z;?`C[72D');
define('LOGGED_IN_KEY',    '=_7zhNl/@/nq>as+M@#W58/MR3w9id#y.W%cn9TaN(yeqwv=D*aDc/EEJ?vG%`4Y');
define('NONCE_KEY',        'F[%O6[15aJ wp Ml|::G1$um_b:lMqaS062Y;QIh|DVV[yJ>:a|]XTP^nVZc*$GX');
define('AUTH_SALT',        '8Ux#GIvcq*>ZxxMS,&FsP928.LJsEqF+p?36GyPem|L30%W+Uw:uho%C;KN~ZnQa');
define('SECURE_AUTH_SALT', '&GW?D1{:FvhaYalAS}[BHvQm+I`#F-![0 @w^U$@[q@z)wF%iPW^UM+Q|MBTeXqv');
define('LOGGED_IN_SALT',   'B$h>F0VD0RE[fl~;Am1vCDnp7]{}~o:Jg7olTKlVw?(G;4f7(?)Y=dN`.sg`ZmdA');
define('NONCE_SALT',       'P@]Pe&9xBtU(5aWWZZ{YxXe+|am}=`Mg XBmY:|egrUts:i*Xqs4/{72D1pdc#H)');

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
