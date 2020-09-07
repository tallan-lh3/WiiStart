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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'AB' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'OVA, 2m/{br&!$_$w.A|,SkpAVSfpZL#N]:FG`fUnsdUc1pSX)Wvn9=m%P2c!3[x' );
define( 'SECURE_AUTH_KEY',  'khe}4}_jdl%9gx}4#UTjxN ep`MMrDjRcCzFF_vkG{.H/,}9 !1hY4AHUOYL^>3)' );
define( 'LOGGED_IN_KEY',    '7fS#F,7tJBliRyP{EFk*_XQAq1 Rf+[W1DpK3P)Ig/vV|jAQlh~8sJ_25%lTu/1V' );
define( 'NONCE_KEY',        '&!mHga4lR^tw![%}XsmvP~hQ&O|nQYd(L-l*80Qjkje@q%PVljwAmRxmO!1|+v*_' );
define( 'AUTH_SALT',        'Ft>F+`/]cOOXDbdhLY0rrw$$4L;:Gj5bGgOd)^LN~[Y.;Ki^ZSh|6 4ktG0z1O$_' );
define( 'SECURE_AUTH_SALT', '5$U8*9/;F3R]C+wP_2tV*G!5vq5Busf.u.^rJ.-M^w6Y!<yh|mosGc&SZWXzWmK-' );
define( 'LOGGED_IN_SALT',   's2ftls4SwCnCxDWFzXFucya,oS4;T1v:Y^n>lLu5ijmR i|K)AE=U]#k7o-yx8-w' );
define( 'NONCE_SALT',       '^A#]Z.L}*_{M&p^LYRa+q:IdL1>zS~iNi8fiP/(Z<u}dj((.ySpCb$RgKuVL4>Tn' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
