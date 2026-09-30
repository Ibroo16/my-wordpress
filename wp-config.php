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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'tFSi^wh$K)4n B8gr==WIutW>?V<UxB2>&t<(ex>5~~f|wj+i4gL(5fQ+srQpRo-' );
define( 'SECURE_AUTH_KEY',  '>Og1H/gD()wJ8Xj%p^{x8$,yD]hJWa`yJ~%xj$2zhqI9ulU|MDOriS~8+q;{[?9?' );
define( 'LOGGED_IN_KEY',    'Gj1Wc=HFOoul)fJn_iS/cO5llfC&f_acr1!y~OI%$n#l50tA#dv)/Xm4P-f zt3!' );
define( 'NONCE_KEY',        'w_y-Jsl*9^LaUeR10L_#<(I_`P41^Dk3t~,2hqEVv 5$~St8 xsQoC)^ePN0*RYL' );
define( 'AUTH_SALT',        'jcAHbWO)p7^.Gkiq$C@$ISax/M9uk~;;&[]ztHM3|F  }R/K4_uEo%mQAByna81%' );
define( 'SECURE_AUTH_SALT', '|mkc*ghCXvjQesURj9w8x,Z3og}BiDVRM5&|~kYc*6DmA;JxKdP[8K`MGetQ~)ym' );
define( 'LOGGED_IN_SALT',   'b~VL4PaWma*O%I2PJq8bYRdRjdIA[[ 6E9G 1cpUef&%e,X7udruzm-9L0nmLEKR' );
define( 'NONCE_SALT',       '6<a<F}:Kd8<+YF0rd%+KqI})%4e[weRovyAOk3By?*T1Bn{~bK[R.AYAb}CB)|22' );

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
