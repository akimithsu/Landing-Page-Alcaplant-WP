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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u995095518_zIeRU' );

/** Database username */
define( 'DB_USER', 'u995095518_aSnTc' );

/** Database password */
define( 'DB_PASSWORD', 'Ij95REjitg' );

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
define( 'AUTH_KEY',          'Pd1?3^9]{#:0iS%q06:_Gb9cN+R(g+IhiK;vzI+$xQ@0J:7<b9wpovcZ4Zkf3kL+' );
define( 'SECURE_AUTH_KEY',   '2}%ks w[pP)y0HH{!/RL~A%0~yBSP5o]aGWtX/u4,h[Akfo@bA}dJShJgk*mXfDE' );
define( 'LOGGED_IN_KEY',     ']|+VBEc?Ba,Q:!ljm91W]N{n<TA6,+|CE0@w{kW1_k.DRz8gchoI#-{u=4{Vm.M?' );
define( 'NONCE_KEY',         'rEQOA-{a`$&ojqs{*1!82o#M-$i@i?jn||s)(Q4V{$7r=gd.ZT<S2 v.tHFhyO8O' );
define( 'AUTH_SALT',         'V4nU[q+ElJ_p9zS5vn$amN/$iAE8CTeRR}:(o0|(AAoXNSPno^ct?ns_KqQSJHbg' );
define( 'SECURE_AUTH_SALT',  'aEazk,d2>lzAogz8RZb4CEYGh]_.:<21/2-GVgvme3wdc12]yOn6<7Q3Vn KM)45' );
define( 'LOGGED_IN_SALT',    '}Ml@n9.&3?a[#*w 8&& e2>MIeGxN#;Ju[f:j5_Gb.-3`c%iT1N1yL~1EbOn/zc:' );
define( 'NONCE_SALT',        'ktwo_m+7l#H/FeA(qDf 7_Z+@=_Qatb!]{!}nw?eIl{iP;_l0mxndt~+Swl^h({M' );
define( 'WP_CACHE_KEY_SALT', 'p;vcvk38UO {^k-LA8/Zh]xUME3 !jTk&4zNEtI8QNHDYh6$yu$vpP}[F[#JOB{:' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
