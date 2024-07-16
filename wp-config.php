<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'wordpressuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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

define('AUTH_KEY',         'i-N I2!ui.xl],M-lF0$KmY_%FjY8q]f@{TEr*dzxk0x@T5,/<DGxX_=H)r&qo+Y');
define('SECURE_AUTH_KEY',  'J2bN[]5U=vXZ<^#rkgV[f%_H*+DNee_RY(|n4v; FizAO#|O<,oY0|A3-if188G<');
define('LOGGED_IN_KEY',    '-%wpX8pJs*@E]$!H)*WXAp.{UK@Hjo R|M `^GK?~.*$.G4Hh-M7x:|cd@Cf)F})');
define('NONCE_KEY',        'W]p|2T%u<k3yRgE7CbR@<[%]Ch|MlZNB=>|)n%]7bYj5[b$Hj[70=oVYVclQ93~<');
define('AUTH_SALT',        'q^K)@+Q$P`Y88m./-mKp*R2?d]wo0$n^|2=C#3J8|Sv0<GA_kFuvNKsb<=)[wg^P');
define('SECURE_AUTH_SALT', '*A@^h_J>H2pj2<./u8yTY&T)?Y+:K_NP>qU<%ma4gnr1_-=G&64/v{T-*?^}b]^b');
define('LOGGED_IN_SALT',   '0xxz$8g9m9L3]SM;(+[~[!}IoZ-QQ=8-4-2y)|CI?GAaaE`JIc_avbM^?C<5fi1^');
define('NONCE_SALT',       ']7*[{jR`3UOo@~G&o<xt L?%Nb`>0A*J4Z:),8o:>}q/gNg!ji+xEGEhA+etErf]');

#define( 'AUTH_KEY',         'put your unique phrase here' );
#define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
#define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
#define( 'NONCE_KEY',        'put your unique phrase here' );
#define( 'AUTH_SALT',        'put your unique phrase here' );
#define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
#define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
#define( 'NONCE_SALT',       'put your unique phrase here' );

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
