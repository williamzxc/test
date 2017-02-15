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
define('DB_NAME', 'wordpress');


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
define('AUTH_KEY',         'toM7QjZ<`C%U1r&UPG2w:}FpD~+b2HF_vh4a(r)VDHI{4+W{:Y[ohc6~dk|YQVob');
define('SECURE_AUTH_KEY',  'edxgBO4ei;q6Vc7!fU<&8/K-UG$oLv+&ot#s^%|8DlkEu?Uq$n@OUA~f4jNm1bw{');
define('LOGGED_IN_KEY',    '0^kpw0qr+D/{|44v8dCRg=g0Y]_[{=^ZB$RXt(X:es2UK> J*4P21!LDXnY=+As{');
define('NONCE_KEY',        'p6%;tzNEtsE3|aQZVHUjpL.# U`>e%^qc+SPG^f|>B/a4-J~x`5Ks^|JUW$M+Zc<');
define('AUTH_SALT',        '[*pDM,loZ=XZg/T5 !GO~_:ThKAV)m{UTi#Arf)|vJ:?AoX=~c979rf!K{WL~V%.');
define('SECURE_AUTH_SALT', 'r.~Q2(dl#zc(VSE6);h^e3F:hbQ5y:pox2(Z`Ba;.*a;bFfqJ^SRl^jkMiWCRl9(');
define('LOGGED_IN_SALT',   '/X=w7GeXahl?8mCGIV/wCUTSn|2F&D0@uwn#}Tu0KCP|1Q5h)<lmNLa%ns6eLk@P');
define('NONCE_SALT',       'qF4xT+Aw>8_ZC}xh{7v2@tW|#@yy8a%ah#AaWeQasVj*BTDg(Srz0)Z$^(LC%^m{');

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
