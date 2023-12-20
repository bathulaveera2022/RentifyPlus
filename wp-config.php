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
define( 'DB_NAME', 'rent' );
define('WP_ALLOW_REPAIR', true);
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
define( 'AUTH_KEY',         '+uifVwMdvv(J7q/ZB.cmnb2i7J?.,!?*<qxD]na~w~mue3NY `![6P}32;fhC,P<' );
define( 'SECURE_AUTH_KEY',  'y+{rq`)*Sxr8-hJW#@u.5F^rh_;2axds+7./_t=cb]p<YkXrfmT;meGDc>h:bY_x' );
define( 'LOGGED_IN_KEY',    '|6.8b!SoLs&%ODcv`r9c/7~0tlAChXw I&j37*>uPtR:(#$CEr~tp)ledG.9Fg~z' );
define( 'NONCE_KEY',        'crmz[JI,0kfRmYY@Lhc%E7Q C fy[8Q#?xbNjwukx9@I 37{8 V-[(2BaZf[K26k' );
define( 'AUTH_SALT',        'JGdIHs;t;+TgSw>|&jDi)c]V8(%8-6JC(dWN,QI_w58K-]dG36iw b}{8),$6 0|' );
define( 'SECURE_AUTH_SALT', 'jQs3OA[d=sm|jq>dF7@7Ecem_3$j/BUuI6Q=@h=[p1USkSK_E5a1wgC=jYG1-qPm' );
define( 'LOGGED_IN_SALT',   '-;)-<8dR(mXW(5$xKD6lac+!d%dbH/s{;[`k_ {}&71>4^ ;vt!VN:w0Olk@]y(k' );
define( 'NONCE_SALT',       '4(1Em:)1T;b&11?+|VNP..G;~i+nu29{,RV~YL9c<:`x|&CmfZ(6p=WmbMOq7%^;' );

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
