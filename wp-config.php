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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'usr_p659809_2' );

/** Database username */
define( 'DB_USER', 'p659809' );

/** Database password */
define( 'DB_PASSWORD', 'doc1:poabc9z,l.lo.;B' );

/** Database hostname */
define( 'DB_HOST', 'db002102.mydbserver.com' );

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
define( 'AUTH_KEY',          'xY9U-&5[*WZdXbPUuBEniF#3=0%WOBwTRZ:OQM(mZ, 77Mv*w-gKvFXOr}Z,sozf' );
define( 'SECURE_AUTH_KEY',   'ES]n-iBqy9}n0:kG@*.i0)MBF3D*t,gIs`6rT*[vjL1tn3;^]p_0)N0q%9kioz=|' );
define( 'LOGGED_IN_KEY',     '<5<F!8>cF75bvlIW$EnaeR`53+b5L9Ba8=p&uCU22rmDC|kW**wL^z2E`R-Bs]{h' );
define( 'NONCE_KEY',         '|Rf`({pw=hn`0%`<:g^l Yg_,eUYVmc?@(KD@_*o&+<O`nSm[5t(&>*]r7B4$[K@' );
define( 'AUTH_SALT',         'OvOZc|]L[4D f65yb=WTI(gLC0DvGop`5!2YSEl`SwdL5S*oP1-s{D#U|E?~-RH[' );
define( 'SECURE_AUTH_SALT',  '5XdH>1`VxQG1p<x1SR*b5:HgSu%.XkxL-G :[^z)8Di_CNps9xI,LdBRJN+*0*8`' );
define( 'LOGGED_IN_SALT',    'g>>?1?}6dx&P79XM#4 }~z?e;`^;5~g8>>c6]sc)%p%P/S9t:@D<UtqS?BmKk{`S' );
define( 'NONCE_SALT',        'aw8^cBp;EKo3#]BH>0&/yd9!;~+=4+!dl$zA#-Y,F/S]_OeOdG}H1!EYnMKF}>+V' );
define( 'WP_CACHE_KEY_SALT', 'M(p<lU9}OMX|+1Ff(zUcJ)<dv5F 4=3!gBP]>ZwLffUQX]ga7<`eS$UND{?2<zeI' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
