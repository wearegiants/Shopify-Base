<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'timelineDBqqzi4');

/** MySQL database username */
define('DB_USER', 'timelineDBqqzi4');

/** MySQL database password */
define('DB_PASSWORD', 'eyQZy6FZi6');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '1v>!UNkc0>B4ng@vC4RJ@v}|Vsk80NFsk!zNGdV[!4}gZwo4:KCwo|VNkd0[G8<^7');
define('SECURE_AUTH_KEY',  '7Fk@NBU,7}cvn0Jzo!RkY}F4cwG4N!v[Ysg<AqeyHAT.6]Tm6{Eym*PiX^3jXqA3M');
define('LOGGED_IN_KEY',    '~O5ht9Op*HW_1egvBNz>Ug|4cs8NV1@[n$EU^m$7Mu,Mb<n$JU^bn}7jzg}7<3fu');
define('NONCE_KEY',        '.DW#9;exA;Hx]*Pi2#AmbqAT*2qT.2~1#Vp9:Gw[~Ga]~1h-p9S+p_Sla_DSp9;H}');
define('AUTH_SALT',        '8!GZN@4[VsC0Jq.yLfT.6mbxAIy{2<AjbuEXM$<Xq3>Buj$MfU,7_+;eSl5ODt#');
define('SECURE_AUTH_SALT', 'uMfU,7nbqAXM1K-p_Sla:D5exH5O~1]ath]Dti+LeS_5;XqA;Hx]*PiWKd:G5l~OC');
define('LOGGED_IN_SALT',   '5s~9O-hx9Ot*La_2eDT*]Wm;D!0cJZ|4Vk0Gs@JZ-[wCR@[Od|5hs8OQ$>UjEgvB');
define('NONCE_SALT',       'hKa]~1@0,Un7}Fv>@JcR!4kYrB4Nw[@Ng0>CsgzCVKz:dVo8}G{E3m^uEX<$Xrj3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
