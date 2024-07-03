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
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         '0OjRL^cv#MjuzbMr7N$%<x;1ZR_cHvY>;@UO=)PwP.zkwwGHAV89?8U}CK0?f`0r' );
define( 'SECURE_AUTH_KEY',  'QwM./mvAb>w6z}*K0F?jmz#;M$]uemH[Q_)2z#e6$;3Ns_2s/LArxB._?j`3OC,W' );
define( 'LOGGED_IN_KEY',    'o,d!kr6I_JDU=)Ra-w:)ZbI6>a_6Fzr9F 9{<%bH4;+Q9zba|,kw9XdB1z$18$&s' );
define( 'NONCE_KEY',        '#Etqn8v]@CJTI-=;tHYy|;3G>Wy9x6P,<Aufxs&R1KII>%v+&bY,OTxHWBc=w4u|' );
define( 'AUTH_SALT',        'D7,/Smd[!d|2{AMt%b{ llR87;ViH<~>Xz`}WD(rOb0W!1G^/|_-yiw-Bcm=|s[Z' );
define( 'SECURE_AUTH_SALT', 'pGDN R#K4{%K,Do,12LBD65q2JT gBCY*/`+i7B.zA@un%BHy,w!NY3wDd#>bidz' );
define( 'LOGGED_IN_SALT',   'ulFJbAO[Yt)jz6U3~lvm>cN7Cms+Np`3So_.SL}/ny%(FTL+YV?Ddpg X-O$ux%P' );
define( 'NONCE_SALT',       '=S`F,@epyP5ImrcA1^UkgzhIaxEM6Ii]C=Gmqd~&Zu6ey4ILW.AO@4[3msFrvYX=' );

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
