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
define( 'DB_NAME', 'u940383185_blogsDB' );

/** Database username */
define( 'DB_USER', 'u940383185_blogsU' );

/** Database password */
define( 'DB_PASSWORD', 'yU7leTHU0]' );

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
define( 'AUTH_KEY',         '}tYf}!3fGgP`&mE3R]mpjnqZPg0su,]pdeNcoG{M}clzT$.H3,#DcZ(z[.=25UI_' );
define( 'SECURE_AUTH_KEY',  'ox?U~!p50-oie%OyAN||]>l!>d7CpH9zit1zlF1dtwfGY~quvPv] Bb=*0:-kL`C' );
define( 'LOGGED_IN_KEY',    'oVT85 x>?iE@<~e~=[W%tkk6DBsDuA4n)0|mf,Srd|a_m7>QWbGB;wiC2,%$B2fN' );
define( 'NONCE_KEY',        'JHV]6Fr`Glo7S}i(S+PwXhX>ZfR_jfYBxp+_pI#-2m}Sr=20-}PzGZq.b#N91C8k' );
define( 'AUTH_SALT',        '^h6FP4z wBrpH3{Vj@sZ4ukIi)U_/B3dp ${-sOJeifcmE7l2M#y3XL8/!jElna,' );
define( 'SECURE_AUTH_SALT', '~>lBEq~pG|XThH!/iYa9`J>a.Wb!Y`$e`GO~GWNEv;#m1rp)Km_<7=+G?2(v;`*u' );
define( 'LOGGED_IN_SALT',   'na6Y`ZRMmkjSB;dR._Z6lTdl1^N3C?x$V)#/#LHiyyPLLNp41T`7w]Qqf#0]allh' );
define( 'NONCE_SALT',       '_==KQa<<lCgu7_%D ^,/qv)K:valG/rFAFUv/!3TU+6@TT<R@pwK0 hw#,/+hYoM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
