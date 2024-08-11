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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoeholic_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']>naHEZ6$PXRTyB_(vo|z|@=ut5>` EN{suX=a(]rq>dVI).n6IXx{D$Sy9Yo_vb' );
define( 'SECURE_AUTH_KEY',  'PVm2@7i{UCl!BL24P%CPff=`Ya6OrTF+`2bl8e*nY[aC @R-h=:_IiD,]on!HU0q' );
define( 'LOGGED_IN_KEY',    'NjnBt#t$ v1Btcq,v+zA!K8gND%o|X4bex2|gRd8];*~4+mxyP1Wku,Zuyv3>Lm$' );
define( 'NONCE_KEY',        'C<);Iea~=ebeyPXoLl*43haUbS{a=G!hl3-Vf[9>8,9YdO~<Iuv[YI0%dfD~66.d' );
define( 'AUTH_SALT',        'ekb:2XrhYV; KCNqp-ea;CNy;p3@u9(+D6T:{p[_:~iPh0]/W_Z>wg9_t6a pj+*' );
define( 'SECURE_AUTH_SALT', '-[^2r0+8-$qr!Wa4JeI_cnHq+#g1|QjtIigG(^=HM<s&OIl4amW&^UJ}+D2pCB5a' );
define( 'LOGGED_IN_SALT',   'xLz`_ogC6YLM-4Cp9l*X~RRkNnWo_j;azR]nZawbN^B(=t(/:M <q:l%p?0V+:fF' );
define( 'NONCE_SALT',       'Np;Sgo4J(Fk$?L}UQMGKH{Q:pl_}=Ax_?Jh!2WQbG7Q<BnZRTmGeL=eY2+Y:-_`r' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
