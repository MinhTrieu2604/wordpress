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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'f|LETt@m*NIN:u+nCgSy)m&{*55;:9*hDDU._.<ivmYxmv4XUa{ _}nH#K))iD{{' );
define( 'SECURE_AUTH_KEY',  '#8mV:FEhq =NtBElW8^Vi0>7gvny&xd~=xUm-fu89}|A%i~OI:,KA&)A$9L7(0aI' );
define( 'LOGGED_IN_KEY',    '5v&ri;+OV N([0K@$c$Qu1x44@a_g$c0v|lp_oR_=f1DAWHa{eqZ*c_(&Uefro$k' );
define( 'NONCE_KEY',        'IjW>*ePp7#f=&,P=rHxW1c}%_b.I[b9? GMBkThIax3./p4b8jY}+&NgaJJozZdK' );
define( 'AUTH_SALT',        '&}DZ/@Plht4S]61Yq >5UG#~XP6p35il6X,coZ:8| <F~fy-oB9j8Q1rt>JzN(.R' );
define( 'SECURE_AUTH_SALT', 'u.ZC_D4sMD<O3SXFp^~Xi_UTL }obcT5oI4^fI.|Znkr:^5!JzH%$7[BgQ;T1#uK' );
define( 'LOGGED_IN_SALT',   'ki <W~kVj/pC*|qLgq^2.5=u]1@~%e+A)<k&RA!v(ejY%I<rjUbnEi&&1Ar&=(4W' );
define( 'NONCE_SALT',       'lE+Xgkyrc#00ia;x!&W*v/#jTI@,g0g)NpdGx17m`:Qg.F2dbySrLo0+Y!!e!_bn' );

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
