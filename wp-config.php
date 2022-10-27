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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'freedb_portfolio107' );

/** Database username */
define( 'DB_USER', 'ktenzin' );

/** Database password */
define( 'DB_PASSWORD', 'PqX%ka7tz9&4eK%' );

/** Database hostname */
define( 'DB_HOST', 'sql.freedb.tech' );

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
define( 'AUTH_KEY',         '(,G]&za_ykSyQoM-hwt<qGRS/0~NP7GS]*4xE0*D8qZEE1%x~9%s:K[fkio-[m4/' );
define( 'SECURE_AUTH_KEY',  'i=8SK4zW9yQmC>A.}J9pa8Y>bcocv5+y96D2 AfIO&JyS_x8cnbl+Ib)0c Io!CV' );
define( 'LOGGED_IN_KEY',    'seTq~HJw)Rcpacf>JN9{V}c6}P61<E}x)b9x2-O440gqo]qS-.#r[Ji=.rzf,^ V' );
define( 'NONCE_KEY',        'F}Ads_ #fK >?si,h1>&F}Y8g.8qhjxBY>slHKTm=CV8p4~8G>1TSDI_%nfGQb$o' );
define( 'AUTH_SALT',        'HT{_.iJ<^|RS8*V-b_}*Gm*%Wu~$~w&r3d|kVi+m6.,n:@5yg~f0qtRHOr0efpqV' );
define( 'SECURE_AUTH_SALT', 'J{p9Gc^Wa=YdmQu@Z,,R_(mCE$sr!e.DM/dk*o.St4{dKO#[{Z4%]m!}ZNt0!}8B' );
define( 'LOGGED_IN_SALT',   'F(j 7MOra{OS@sv[(>t+jhozs|A&t5Ko&hCF:3`uU|l0Q@QkTfK7yfX/sJ}+[(R7' );
define( 'NONCE_SALT',       'bQ+n#5IzjL$35D#LoX<(<&j`nU<ns-CpYbAWVl+V[pCVwL$xJYWm|+/dJrf!e28(' );

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
