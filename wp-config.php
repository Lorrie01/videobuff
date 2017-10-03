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
define('DB_NAME', 'videobuff');

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
define('AUTH_KEY',         'ahz=mE|}*KX;bB)mqcocS1P^Vk2z3&58U:0e@8Xs< !s_Y0s=wJ;S3DIE]Y}FWP*');
define('SECURE_AUTH_KEY',  'Ap9u@GjN;q7LaRbS0 Zix=0d6|%us9Ow)c5Rk0`ety$5;{|<_j&_:Ow}=2{{<Jj6');
define('LOGGED_IN_KEY',    'd)TncheG[ev<iPcEHJ[ncBvS?N#V~4bv`N)=8zI:1Yo*@w?,o81$-I*(^QE)8C>|');
define('NONCE_KEY',        '`+wP%C7fT6JnsEuXav#f,AV^iM]0HpkxD35C|q{-ol-}:oLvU}=0HwM|UGPq=~Bb');
define('AUTH_SALT',        'm@p_}/1>#VkINP%H2?yhF.>l.fx<(UrQSZ,ve?wXR/|2PzKdc#[ZO-#5ozti5ExW');
define('SECURE_AUTH_SALT', '~8yP ZPu#10ls(lVna%p}>5/sNgqZTk?vLuvCo{qs,gA#,G&[{rf5noa0HHGG&R)');
define('LOGGED_IN_SALT',   '^y4gu!WkuD7zu)~ ]9l)EZF9F-$v4Q>5SU1r6#?Ga%Sg$T81(q9aquQEiffCp%Q*');
define('NONCE_SALT',       '7+#4_AbQI>tRUd+X$rsiKhQyEV&`P;+Q9/gG/c<|_Tn`|EV:iQhPfboRx0JQ2lC;');

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
