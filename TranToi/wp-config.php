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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev' );

/** MySQL database username */
define( 'DB_USER', 'wordpress1' );

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
define( 'AUTH_KEY',         'U/:{6gjS@T,LY<-?(.=Rx;C#u*.L3paWJpu;+.k:TAq[2U]qN@xoOTuS~z?L98zy' );
define( 'SECURE_AUTH_KEY',  ';>Z7mlwSd?dNkfZQyz*c`jEDJvR)>k?{-YbPIsY*1qGcYT.w=^Eu9JKhCWABwB0A' );
define( 'LOGGED_IN_KEY',    '_4K(PoZy.u64fBH#X5o<}^{rTz{PtoCQ>Ex0<sLPGx%[EsZHO4~9!z+GxV{zIdS1' );
define( 'NONCE_KEY',        'I0_JhX$vNNQ<~go2^vd&6RQU2./e}gs0qr01YPq6_R8_kTJn>p5y}zk>DXVW[GeY' );
define( 'AUTH_SALT',        'gloBL(:+R2-$[yOyb6/0$Er2eN:>7p#-i|3z8f-;YfL+o#Em=,>CW,_K5eeRS/HP' );
define( 'SECURE_AUTH_SALT', 'sVEw?P45&[.foW+e@n-o~ET}<yuz`P6#EYeJpj;0[<a%%`U!wcL(t3mwO<)dQC_g' );
define( 'LOGGED_IN_SALT',   'QnbX{t+z:(S[dvT`YzOw76RO%8J7ky*~OO.L|0)VrroA- dFSuUm}E8fOzz]>QWm' );
define( 'NONCE_SALT',       '0KVSqRpf#S2[%:z=(,b`SlTL+YxmC4`Nz6hO#&]BCj$df-Q+F?Y($^a2OUK>Hm@=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
