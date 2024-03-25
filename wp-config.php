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
define( 'DB_NAME', 'dbgdiabdxdqnov' );

/** Database username */
define( 'DB_USER', 'ubglqbv99hnkr' );

/** Database password */
define( 'DB_PASSWORD', 'yvvqsd3i9qsy' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'xVW.<2(O$UTjawz=^|FT<u-*VX|v@5eqBNC-#jG ak77hPt0*_aDrw^q<kCmPau8' );
define( 'SECURE_AUTH_KEY',   '@]xCUM*H<~K3eAVl[;,I[GXeaRv7~AqUFJ&.i]A#nV*fe<?0p.;/Z,#)b8:~x7$$' );
define( 'LOGGED_IN_KEY',     'TWFI)p-VCA$7.A;3>ZG>8+Ju~2yKCLT$Kf-ich%QE&nfO8-z-#tjW~/`JrrVRJ:5' );
define( 'NONCE_KEY',         'JNI|bSO6hng={&8)+2@<9Vq/z/?}XK]JcBucGa4<l#=@p3;0Atr3:dkfa<VPFlXB' );
define( 'AUTH_SALT',         '=r$l8S_k]SC_E$|y-Qz;bPd:?[e+dTs{T<W5+IsMfdH`t.mgL;A)3uALlEQk^p9K' );
define( 'SECURE_AUTH_SALT',  ')L1{ii;][U!W3U_-AamJ&AFM,F+/40Aw+?-}R}HJYpx>aR@<+3g$Rl%]bA/p&=st' );
define( 'LOGGED_IN_SALT',    '5JD qV !fecs*riGP/&lnkyb:]$kx7}[t*4<vJf~.aV4cpWBbniR<^z2tBXeS%Z>' );
define( 'NONCE_SALT',        '^JC,eV^/i<z%,BajkK-A~ZU]}STmQ[i4^Yw<new^U`v[>D&Q{ <.Izaftow$8|xD' );
define( 'WP_CACHE_KEY_SALT', 'zF{B(WHH*A)i#|w@,KO[Tzgbq[|-+|%o2PRFxZTB{mgNOwusA==U)P}5T{b:1avm' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'qeu_';


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
define( 'WP_ENVIRONMENT_TYPE', 'staging' ); // Added by SiteGround WordPress Staging system
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
