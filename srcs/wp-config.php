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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#x2q^(W@6wc8Cz-0oxs( }5$3G2J{K;Rw[IpDQ}y>$<H^S|whwn:2Un_7-.RR]HE');
define('SECURE_AUTH_KEY',  'Bz`1Aj$NO7VZXOY?3TX,`QE:eGiqU=o!DKmF4[R|[P:#vLG@h^5XuO8dcr]>fQn ');
define('LOGGED_IN_KEY',    'K+]mqS(,*C(eD^,;B/}I9`h :kh+MB*c7N2VP(Z:O(efX&2vwT7z)B)g}$)s)G^(');
define('NONCE_KEY',        'T4.c*GG{t%Yi+e(DQW@:>(AG[(ZK6l._i/C]G]WqzLjh5qofI&z/dSg([M/.U7*k');
define('AUTH_SALT',        'Y+PG;;Soy%H9:XL;^@5nsFV/C9+aQbX2=Gt!DI2+Vu0mRdSRVDL%9_#E{el4=Jc-');
define('SECURE_AUTH_SALT', 'QChEL(n!OLj-yG(Qkc>hUuI^i=UD][W9aW;z0|an]^&:t<-,+-Q2.4{4NW|3(j(Z');
define('LOGGED_IN_SALT',   'k:= =#!I cObj!MT~[r/+78Qj+.ft,))vVr@w1,*;c}OLVwc&_y?N=dK|!HP+Vo]');
define('NONCE_SALT',       '=H+*GeY)L%(f|t-(i+dZ*Np8&]ZPF|6|m o1.G<=4v9+Me{ts&Jt&-96B!#+l$<D');

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
