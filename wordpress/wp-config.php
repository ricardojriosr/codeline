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
define('DB_NAME', 'codeline_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'x');

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
define('AUTH_KEY',         'UzdC>L]P/JO8N>tK0ul<OIV9TW#3[]wDCA,EC {RGOu0lvAq`MLU#,~yW b1hN@S');
define('SECURE_AUTH_KEY',  '.EaBv(r#32B^!Z+=Wz%K&~z:`bmH+]_%1_tzvO|$w2|J84IO5F+Z>AP_)#D!5N=S');
define('LOGGED_IN_KEY',    'nOCE}|gP:7R=YURQJJ?3PUAN?nvj5hg[#9*Zq#ZW_w53dlZ{e0KS@_,up%xr]VC!');
define('NONCE_KEY',        'cE 9e0lI7K*Z5 8c_D6qx/K,aF/ucB$n=LCg/&C`]N7/Us#me0{qkMbu-@#sS`3A');
define('AUTH_SALT',        'R#8#b3[}=xWIJe!*$O`F=BE$m&-9Km#`FgpMmeso6Hf!h]f aYPBlf[o;7naGkzl');
define('SECURE_AUTH_SALT', 'LDh7SND^4R XnDGH~}Q6QGzo2f!ZLCWG`<[Usi(z{%&@.82X{ewd#3wS0Y!PCLSt');
define('LOGGED_IN_SALT',   'txe5Igh.]ON]oj!3oU0vZ_}WmgrwbMh$V#sE(!.[U!2>yn7W7y&rdtJeS`L4?Qb{');
define('NONCE_SALT',       '3_%ZmPEP|Sd?bRnpUk[aWU}+<96B?tWnMaD&8HSTA@;|?cI~NCGg0$n6S{,p^sCk');


define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "codeline");
define("FTP_PASS", "123456");

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
