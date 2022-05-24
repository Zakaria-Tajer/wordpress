<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PlJI;~0DD@{=<Zb+!9aWl>yt }CWtR&yn#*i>a29F%rR+mAzo=d95]qe/)p_MZY(' );
define( 'SECURE_AUTH_KEY',  'm:Ge][wZk!rbB|THgs[lw0Mh:cF:B4sHT#ed+ c+d4=9xdnov7=:|]m^~Dom?_R.' );
define( 'LOGGED_IN_KEY',    '>|A_]/%m.U0]WdI)^kA<(w[md{=k2SfpJj#7]3$+&+*XOSZVQ :Chdk8F)C}o,#;' );
define( 'NONCE_KEY',        'YcrsPC>wTw2mQJ(FF=N)y_nn&4b0@!Jyk,j4$e3|vCSZy69SCwKJk<kh&a:2SxO]' );
define( 'AUTH_SALT',        '&Pk[ A,F<4^?%0t Y[v95r(XV)@0^<WD?OaUDt?vGJ7nX(Fd+qZ&tSk8,2av4z}t' );
define( 'SECURE_AUTH_SALT', 'R|{11KTH1 nuGPaHo59S1.Ae*U|i<t1NxsCT>!jDrM1Xx)6]qZhvEP9+smhcL)dB' );
define( 'LOGGED_IN_SALT',   '#z<%q2JG:gzD!|/y!<siEK*/H@~gjUQJK~UZ-aL`7hDp8E@G9s@P8!.cro2&0th`' );
define( 'NONCE_SALT',       '$<sFf#Ex.^pS5Dqi)WnCZ!`(zJ%9U?GuLNqEBXB~W6qb,ng,KU4@OMU1M-{Y{wgf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Zk_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
