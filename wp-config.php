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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webdesign' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '[jX~<!6<W3{G4bs914!9M@gBxu5b`.WI-59>9iXgD.gfXM=dY{T@/R?nhmKhc[FM' );
define( 'SECURE_AUTH_KEY',  'vl8E72{H7iCZgMiYDaphm.qRN!bd-n$q^Uifn}#~6>#We-asEQ.8Df&ZqhP;MuW:' );
define( 'LOGGED_IN_KEY',    'R_b)Mhk1=+v2.v7{~NETrG#?*%*89X /i)7==cMc6|$QM|ZIrY>{o}l.8]N~A/`5' );
define( 'NONCE_KEY',        '> T4;7VP(:xYM&[-1o~vHA3WKcb:)ZyDj353uINE{ENj>h:V@o=*wRbnpsV8@Ux~' );
define( 'AUTH_SALT',        'n.inLxMgd(SdQ-uBr4vy-{7T26Df4uJ-pKP^j#Idrds]mM!2;owM@R8!o?`|ToQ-' );
define( 'SECURE_AUTH_SALT', 'E*nq^9b4XZpS7kL.B+FjSn!zw)6Z8apz]uVF9e&dG(/|U#Gq|Ov@794(ji=[bD;7' );
define( 'LOGGED_IN_SALT',   'yJ6ba:Rf[P!bW`zS?j|] 4TZ6oFXzFNY+~%y`rP)5|G){_S 4isQ4D%>y`Os-x*+' );
define( 'NONCE_SALT',       'iT` |]9}T~rk7rt%cT;bfonVajMbK./!GdYh10qu`sghZ[p`J8(ricpjTFzZ&Tmw' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
