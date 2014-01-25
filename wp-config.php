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
define('DB_NAME', '1578670_c0e3');

/** MySQL database username */
define('DB_USER', '1578670_c0e3');

/** MySQL database password */
define('DB_PASSWORD', '45f5bf');

/** MySQL hostname */
define('DB_HOST', 'pdb7.runhosting.com');

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
define('AUTH_KEY',         'THyb.YpY?NJ+-V-~wG:m0WiMc~ @OztKmcvF>iOIRkHdnoeIjt#MGZXt87W>-j}S');
define('SECURE_AUTH_KEY',  'eM0QI8vqpRoz+ty!8/obI9YDI3t#dj?z)=esQV07s0Cj{_vth>l${Uc_C+YKb{Hv');
define('LOGGED_IN_KEY',    'r6XKY!X|J0 XtI&`sQ?hAjL_9eO;~D&g<>S@;THx4Fzmt^?q~>3x`]p80>Il|fql');
define('NONCE_KEY',        'tUH94b]n(T:Pi+)zgPLUBraX-ZUhF%S2@U0LHsRQZH YJX1ywSn{crg,U.BHf8 H');
define('AUTH_SALT',        '<XxbyQ&@p-c_;}?j#8C,L/-|*] mO`Lfk>O;Q8r0#$4RK(/4Mg ~/vM:ki~M~:${');
define('SECURE_AUTH_SALT', '|Pl:IJT.3*A&A q7nKAV*GG_:[(P@|Jg9w,e83h -vZ0h,*XSb8F*WTsu8b>R9[v');
define('LOGGED_IN_SALT',   'vkT]4Kmaj3|5p]z{.$%_l:+{0iC^93Yuoouh{M8{g44s!F*v)k@-^z;%[; H@SCZ');
define('NONCE_SALT',       '7*^nv^#vAKQ5}6PAJV5ssY&4B(9Z#yR*=9^h7A$K0V]WzvLh>SAuhg}27jiz{Hy/');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
