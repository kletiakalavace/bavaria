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
define('DB_NAME', 'bavariadb');

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
define('AUTH_KEY',         'Uj/XQ6f<vO45tem5=TNPuZ/^PgYy?S|2R|O18F[O5vmST_K.c1N B2JIn9TC?C&s');
define('SECURE_AUTH_KEY',  'L<}j<J!`7]ab>1G$rNfK%/qIA,w}~e|c<lv>b,PYe*THl~2r^/Xp-&Gg,mw<xJp<');
define('LOGGED_IN_KEY',    'm}<)=D_wb}P7:cRQd+0I{]MS+$d8kn/U([UQ;3-j8:ECrEh1DiJa0pd&j4KLp0ZG');
define('NONCE_KEY',        ' )EL,V1.UiGROj3yBCKMMXbRwAvg&)WDSR5;lTl%Q^k6c0FqJEJ(6_q j)*nG<?%');
define('AUTH_SALT',        ')YRn%)@e6n&3az3+uZ}$W21..1cl=9cV46yJtGspmcu`p_ Nl#`UU3&?]K$_0?W,');
define('SECURE_AUTH_SALT', 'hYLD^zCtyD-l8f*A.ZnVB0V4gVk}GXZ-)QnR[lMy_6e,;AT?j,AH}{KBhX.ug99!');
define('LOGGED_IN_SALT',   'X5KZl#yQ_ID#x1%F6&ZYHWbZ&FEZ<9~tejJ>ef/<1weH&h*_4342ue|)zRR/lha2');
define('NONCE_SALT',       'O9Tw~8}_@hPBn%=ehO53p@;9}vW h_j8fJP:jnG>YQ:R<LZxP]oRT0HBaT3.PCgA');

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
