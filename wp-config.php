<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'noongoonDBlro5');

/** MySQL database username */
define('DB_USER', 'noongoonDBlro5');

/** MySQL database password */
define('DB_PASSWORD', 'Kt39cq3NbW');

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
define('AUTH_KEY',         'RJ}4@8F[0z!ks>0z!krUcrzckNU8FNV8G[1-!18![owZh@|owZgJGN08GO19_[s-[');
define('SECURE_AUTH_KEY',  'N@gkNUBJVcJR4B,}4C|:w@go~|owZhKRowZgJGN08NV8G[0z![1-_lsVdt-dlOW9G');
define('LOGGED_IN_KEY',    '_ZhGOlsVdGO1CSZCK:5~|;5~#pxahx~ipSaDLhpSaDKG[1HO19_]t-HP2A.]t+{2+');
define('NONCE_KEY',        'NNV8F>0z@|:w@goRZowZhKR4CZgJV8G[}CN08![szGO19_]t-]1-_ltWd-_hpSZCK');
define('AUTH_SALT',        ';9D#;x~;6*#pxaiqybiLT6ETbEL6*<EL2A.]t+{;x*iqTajqTfIQ3AQXAI{3$,AI');
define('SECURE_AUTH_SALT', 'p_]t-dlOWemPW9H]2LT6D#;x*5D#;xt+el+_mtWeHPXfLT6E<;EM{2+.mu]2+.mt');
define('LOGGED_IN_SALT',   ']Txe6I3<qybj*<qyuXfIPfmPXAI6FM{3$,nv,}v$fnQYu$fnQbEMbjMU7E<{4');
define('NONCE_SALT',       'NYRVB8>4sZ!ssVdGN08NVR4C|:w@KS5D#:w~;5~#pxah~#pwZhKSltWdGO19HP29_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
