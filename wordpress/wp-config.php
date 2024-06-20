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
define( 'DB_NAME', 'apiwp' );

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
define( 'AUTH_KEY',         '+R?K,A6X&-KQYW7w+Yh^WoA* pkjNRb8=h0YN3 4@jcz{)3T!UX0mK#5$_s-+-Sy' );
define( 'SECURE_AUTH_KEY',  'Ui,oEo3<{tqpH7x bBY1D;>c?ej5%djvB)tttkJ/8!{I;KSUfkLp+|a8H~t@F|Cw' );
define( 'LOGGED_IN_KEY',    '<14wlC60xzImGCt?v)&dwp$m^^QR}fapWVO?YDNI#j(p>94U,HbRnwm6bes&XHYh' );
define( 'NONCE_KEY',        'DVbQSoifz9{/$m~CL, ft# ,_5e88,~M/AT22zt9@3u=^W)!9|{1mEgK4(OE8A0P' );
define( 'AUTH_SALT',        'lY,@rvKK^FX&V)f~1w%M?}#oaT(@eFC9es7eo8:}ehy9i2jf=hV;_@ZOK@Xe+z#*' );
define( 'SECURE_AUTH_SALT', 'n#HR>jgF{w:9m{r(@8BJ;UK3#+@7z8onhF2l)8K<Da1U`2?4F=x16,U9tXUB]@hz' );
define( 'LOGGED_IN_SALT',   'lDo.CM,bJq&rFzB7L<>$kLm_{pM/Qpb$v39H>YBwX-sNf;ENX3CY+aq<6C@*P$D4' );
define( 'NONCE_SALT',       'c^XQNM_%3*>XHzWx#yJq?Ce:4Z{:_:YpQ*2C!k{[BY2A=/Nq9Cz!SyvbH*;lQe?(' );

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
