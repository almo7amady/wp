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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'almohamady');

/** MySQL database password */
define('DB_PASSWORD', 'aA@01093301320');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'dFY-,U9 R6-)<X`GJ]3Tn09Xso.3*[FC_9{D(Xedq}hKpw54>1Va#VG-<jEWNvWH');
define('SECURE_AUTH_KEY',  'ir1bL4$^jBp$S!hv/nuh/3E5whNjk<}?bOpyCAXzx-`flJBzQ,dOv,Z/5d|A+@H=');
define('LOGGED_IN_KEY',    'Y4v?)}O kA<:Mg29U8GM5g`#W?XYUH,q1}La$F OgCPQkkd-:M$;RimZ5Fc[;IID');
define('NONCE_KEY',        '<`|PY,d^O2P@8QeU|_I0HPw]!308/>0- f&Aj%wJpfL{d,(.H`HQU27a2E8mm_w^');
define('AUTH_SALT',        'WQYZtF[(a:=w,8w?>^!#}>=J!8,k0HfCoDB6^Z<IAzS)K$f[/fvA`l?]ST[$lWV?');
define('SECURE_AUTH_SALT', '<G4*@| W{~w]]TTgSCPKTd{^5VT9K!k[a()}-42`h<Ej5PtWj)sU_U05ld56j,uN');
define('LOGGED_IN_SALT',   '[n1czh$h{s!C*0@B&tZMEsFtM!D N{e,Zt^lLf.(7Z)FD:E@%b]hX,y8%~AFyB?Q');
define('NONCE_SALT',       'SjVk}naVP4)-c$!(e>WAFWgo%wAmiivwB?YM=R-%Y892WRE2It9ia%d9RR7>EgL}');

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
