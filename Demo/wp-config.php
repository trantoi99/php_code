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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

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
define( 'AUTH_KEY',         'W737Y%o,9{GZl)E3VhQ%t xp=Ok+.fL7x;C~K_TJm,Go[-x@VivZe?z2`Rnu9WS{' );
define( 'SECURE_AUTH_KEY',  '(#S$n%C-bl;u#PL&l)I;[R<h`_[[3|*4mA|ab(]:mFQ&DJ@Q==>;5Po|BX^&!n*_' );
define( 'LOGGED_IN_KEY',    '/CG}(I@gj[$,zE~D[){3g`WD4dP?rxcE*DW50VxFO<e<rKI&3=wk}}4U$z@t}Jlk' );
define( 'NONCE_KEY',        'q`Z*2_YNx<2TqHN Oo.d7iseYghhM{8:_zu0FG$|B+`cNIDmZeE4hs^o{zyHX0,w' );
define( 'AUTH_SALT',        '16Xgn8/d1oG-F4LZ)@R8{L2s1WaR{6Q^nS190u,zDWrk_0zF-tc3 <av2fJQuj`v' );
define( 'SECURE_AUTH_SALT', 'Y%`W#I:4h$ziv_QL^jDewT6N^ehH-Sh+#^JbS%)]*[hoK{ta/`n~Omg[aXMgdyTE' );
define( 'LOGGED_IN_SALT',   'l6ci ;u3LT6_cEMRikpGOM&6),0?B,Ib*4L,A/.P-I:kQl0$~x t91&jy4=Ss!(;' );
define( 'NONCE_SALT',       '!(anSNBkvwp~-A~5 ^Cra:>]h @0kgR>bx7<SFIig3EPV*f?Z/w4u5:~AEu=jB]Z' );

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
