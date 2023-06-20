<?php
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresskw' );

/** Database username */
define( 'DB_USER', 'kartik' );

/** Database password */
define( 'DB_PASSWORD', 'pumNz$Vk4s6i+S7' );

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
define( 'AUTH_KEY',         'T8]lco55=+;a/X:Ls|i%^EEQVc^K(pa#YPpf_aA/C8qYC:M`sCz$7`>2@-J$cZa8' );
define( 'SECURE_AUTH_KEY',  ' 9%kY]tj}q/tmim)a.eQDwyR7tw/R5_,@O5$9I,y*:a3zea,9X%8&;@1T,)WeMex' );
define( 'LOGGED_IN_KEY',    '/q9>Acc*IAo9LcGs~faKMQ+0rXW^544X,RUqMwxa7KIfnMO;mZ}v1~_LI&a(D!fn' );
define( 'NONCE_KEY',        'VUkAd@iukFqGLk{sAxxgF>t3<S_5hTtoI]C_B5+?vZ=`Q3o&I{|]xclWqJ>GKi_m' );
define( 'AUTH_SALT',        'Sp[d]fj]G<Fv+VgnxM1aS<BKft^S#E@e`;[P^w2BjLJq$)c0UqX|QSea/7c>tZkB' );
define( 'SECURE_AUTH_SALT', '8enpC<4gcKIP-E`ao=-5lB]c9cHZ6(U.(Hr09_FVJ3yEjTm!YOB6YmVe|`MxG3^:' );
define( 'LOGGED_IN_SALT',   'nS>5>O=-5,w.REq/C*8%@^)`{.]ynCQ^Q]71SkJN~x}gbxv(W u]^~T,vYQ%0MQ~' );
define( 'NONCE_SALT',       'EL#0ZX6|O!]EFP8vvw# Ms2:Y+9XX5XJ:/3ya{nGdE$cYCjjXy$,Y~>8EX]7^ 2Q' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
