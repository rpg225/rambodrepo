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
define('DB_NAME', 'devtools1pour');

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
define('AUTH_KEY',         'cCCf0$I*q6O[D,z_dxOHtXFpPed KI$C+w.5tS3qUvwiK0(vdkn0~6@fA4:89m)(');
define('SECURE_AUTH_KEY',  '@&O&Q=yT#=1!XXxw3h=XAC`kkW8*|vIFe.:@G_M64hE];MpM0uCmee3<p>M~hbR2');
define('LOGGED_IN_KEY',    'CR~ijcZ^_&xr]BL1.*_|(`/9(i1Z$jE0/s(YMLHq)`D*{&K1`tpG5[/k.CDM)XMU');
define('NONCE_KEY',        ']jt}>?t FrjoeXQa(bxiPiS[WPh1,m4$sq`UWiEcc~w&rw,?^sn#:XH/-t=v0:3A');
define('AUTH_SALT',        'COAAu(O71w}]xbfXWj7OrTX:8(m%Zv9_!7f@JK^*I(Gd:kyttG%VY;.cS}+,4kg|');
define('SECURE_AUTH_SALT', '#8?mM)ze8e`P![C@8{Ba3i15Z19%6k|8PTT+(rAOxpOKng%|~^0i*R]lrW{=FPSi');
define('LOGGED_IN_SALT',   '[a)`NU<0-BY[P_PLMRv|gp2/<mdp[c8MH6+(JPdEynmd?HD!yZ?4>hNzf*4^J1.b');
define('NONCE_SALT',       'Lw^uC=|Q!/Zh2eKW}Hs RnV$WbOA6&QrW-%nd_=tCI,9I$:uw{8 r((sDVz6TnkK');

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
