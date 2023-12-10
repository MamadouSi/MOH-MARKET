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
define( 'DB_NAME', 'moh_market' );

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
define( 'AUTH_KEY',         'v,sn>hhNhwH),O&V5/bOXp8+#~5:G.G5-Ox$!]1jq%o!LqUhB~ibrSG[vH)vjY}5' );
define( 'SECURE_AUTH_KEY',  ')Yz6dh))YT^HP}T;]#Hg|lXq/2rk%Zk~{v#uH;fc5YY6 U:FOPE9I{uAoq|#z76O' );
define( 'LOGGED_IN_KEY',    'n8*Vp5I[8V$foH&mV{_V=(D3<QpJX63j%G.W.K8vKNEm}ie/_dH@#,v2IlHspO{f' );
define( 'NONCE_KEY',        '2gg!}p$nTzZ;`_Gl1D*+F$=%HT3a0BK`5^rp-]*QFKj|%N#o<pZ8g;--:R/I>4]_' );
define( 'AUTH_SALT',        'WAu3ZDiDG>Gd7`z$$;wmQ)a1<6MN*iM]^*o7Z,{NLC:2D3jna/_wyl*iPBAGs|,>' );
define( 'SECURE_AUTH_SALT', 'a,cCta8{R^NdLfj%k/{>DIU;e?eVg1hX/ sgFQ_*Mz`.psDJrpB-@pK$h:|$OV+u' );
define( 'LOGGED_IN_SALT',   'p:(3R0rM%QXZe*EpX)gM<A,mA%?0lq_A!e_8q_F/BqY;m^ nCL k~OEX&zMD>ONf' );
define( 'NONCE_SALT',       'J; ?b2zZFZq7eqv,fSp:p)=*$^S(!#h6]mO%*T9e~0o&UM4~f?9+UcE:O5>@6Vc2' );

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
