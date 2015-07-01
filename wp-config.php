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
define('DB_NAME', 'shoreline');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'oranges83');

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
define('AUTH_KEY',         'yc2s*.[|53j`p;o|Je|-jT}9#5TY68n96cx-CYAw6hLoiBLF<+xqb.Z`/s!ry)Gk');
define('SECURE_AUTH_KEY',  '&,D^j6~w-wWThc&V9?KXH]kLn|yOyr/i~jf<yPTDLFGPUG$<4uVfEr{{^3W%C(;H');
define('LOGGED_IN_KEY',    '(1Abn~cLy$OQ&{i:,&scv++S+ jNZJ)D uF4D^W(Of:gG U,_B!7$pGR0rJ*pz^F');
define('NONCE_KEY',        'O4wS*6|;3fe{3S?<wC =-$+ND6)/+S^_?088JiE#zx({Qq3,xIv$rFulp ,NuZI+');
define('AUTH_SALT',        'HSZ~mmyrdE-|X*8Iwc<VY.#Ec~(S.,SrjGI*Ym/n^qv{?a{nA[`%ad{C.FRL(/Mb');
define('SECURE_AUTH_SALT', 'i>.X6(v5tKH~Qz3?(923I|oS,q-W0L#9d_Ai-fm$0]|D?0I)ZQXR&cz/!{-|c?kb');
define('LOGGED_IN_SALT',   'c`vKLH^{y-/8My$b>*X)=mKza@)WIYCO.c|7B=/?4U2+vyDvS,rf}3hu3<lrK+; ');
define('NONCE_SALT',       'k+;jBo|&sY[|Wu#O ]nT7%5eL#`Gv< 3q!2cxS@(m|bW|.TPoGkt(IoHApjjSG6X');

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


/*******  REMOVE ON PRODUCTION  **********/
define('FS_METHOD','direct');



