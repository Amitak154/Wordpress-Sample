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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

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
define( 'AUTH_KEY',         '>C0l&CX$G>{_[AT%3c~o]e.WZau<f2`*N J6VXAq$(JDf-XK=,y?%YU4wS@jhsMM' );
define( 'SECURE_AUTH_KEY',  'U!kf3;D8V%!Q@0F=:EZgmQG2GRkSW&+.Kfb8td})CY.2m5Ze!yX`Mzd#Q8r!%tqc' );
define( 'LOGGED_IN_KEY',    '.+cX)1u/BtE$[!t(`42A+oDnj0K 0K[k=gkj)gwO30yG!GY{ilWU<|Hr-?z?DoTb' );
define( 'NONCE_KEY',        'gw@F|Y|!k{u<S?+5kD5t;IJp / tJ2_kuM*b;[F6w{.B$?~tdm &Ufokqk&t7LN,' );
define( 'AUTH_SALT',        '^{4=jR]_k2(a>6mD50+~8xLm/- :r2RPWyttKxlE+KD[dBvKBP!?ockedLa9TbLy' );
define( 'SECURE_AUTH_SALT', 'uUejNW{sFe=Qx?U6z vg{_ c`9Hw&Je&q||vd72sDlb0i#eT5Oa.q*u`wx9;4aF{' );
define( 'LOGGED_IN_SALT',   'eGu+BiQkPiA0_3MSdWZ~{^:!Q1MkQ@v#gfMCct vS}m|{}$;2 bz1te2c<bEqz+}' );
define( 'NONCE_SALT',       '@Ak.-rww5HRRh.v2VGsWt`VfUM2S#Zi.TF@af].4|Ye5%b8Q,1JQOg0#%Mq]nhv<' );

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

