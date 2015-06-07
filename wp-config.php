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
define('DB_NAME', 'coatecoll');

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
define('AUTH_KEY',         ' zfviE+AtF-gE%fo]2N_|+I5<bwSi+430v|nc;!uw)x,6Za1}q+eakdH#1Zv./^1');
define('SECURE_AUTH_KEY',  '=?-Be?y|ti|@7x&oM Mb;Vz3]`Gc/2eE-*h/.{f,cXfNA:|WyUH|ykbS_bxd+.>U');
define('LOGGED_IN_KEY',    'UL&s~Ar|MZ/}LDwgk+tt~7-0x^s5k{z{`JvK] 0)9_7A)YU-MBFft~<fUIa:2nH{');
define('NONCE_KEY',        'AGj;1JvjYh(MbK@3wZFW(pV0+*((tVyb_4X}%&DTUT`WFI&<B=5i6)HzL[U$bX#{');
define('AUTH_SALT',        '8g+A2hnuqs%#%o,<<D^K}vZqzB-PxK}v6,<25>s{u:Oh<vJ(a8$,hBQpA )<-%,X');
define('SECURE_AUTH_SALT', ',4<N:sY!|XALLx%n@tz1S-+7z&cWT>Hv+(!LD%T9<tf>U5-5P-Kz0GAT@[|XS)>&');
define('LOGGED_IN_SALT',   'n>+)A`@vPCWId3zI-w6iP<FEU,:89.O|&qo<aqg;UT*`du1~imn1<O(yLhOj6|nv');
define('NONCE_SALT',       'i>*%.:f.Y-~V;&p~pJ1[si.LlaYZ[d%!p*p :p$<>Cl[(U9?Mmk.al-j`oDU~vz=');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
