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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

 /** @desc this loads the composer autoload file */
require_once __DIR__ . '/vendor/autoload.php';
/** @desc this instantiates Dotenv and passes in our path to .env */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', $_ENV['DB_NAME']);

/** Database username */
define( 'DB_USER', $_ENV['DB_USER'] );

/** Database password */
define( 'DB_PASSWORD', $_ENV['DB_PASSWORD'] );

/** Database hostname */
define( 'DB_HOST', $_ENV['DB_HOST'] );

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
define( 'AUTH_KEY',         'A9;FoM}e}nCta?CZu3.T@P$<9,jn|_[VV0UGq?Z#(~+HB`/,5aN$XU,NK59k`*8s' );
define( 'SECURE_AUTH_KEY',  'ri{U0y1{.x3!Fv;TK4X9kjP@SH%4X<#eZ5akVGm0|?BMFtJN|W$.]1LSUmlfDE8N' );
define( 'LOGGED_IN_KEY',    '5e7<0Wf/WON.s/bObN=]rXW0. Eh|!4WM9P4L{BU$=ry001QD(C%:LcC@uSex[r[' );
define( 'NONCE_KEY',        'W{oi%Ee56`yaf3R:u,)Ot&oq$~6Sqbhn/Yy)MCqJq3y&j%xIls`Y(&%6Jc=BOF|W' );
define( 'AUTH_SALT',        'V}M*^2t,6<^#zC me2Y]%fslrA~xetVJdziQx^hES/V[?ksxf!P^TQM`,I:Rk Ay' );
define( 'SECURE_AUTH_SALT', 'V?HC`&;j,*q~CX=UM;Dsog6A!xxDRIoR<]X^^V.>Su5}7B9gQcd.5@yR?ga]s)F9' );
define( 'LOGGED_IN_SALT',   '< |a>eYdP>.#c<q+bmEFhssmP=@Y~;ND)@=3X{N6|_n2s)KE5*mJu1S(,*~.e,1N' );
define( 'NONCE_SALT',       '<l,#K15 CX,/4),voYTL{SJ6B W~,Klop5cC]u3q?iS7Fy{ +T$7jZ_ L<Li/f@:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wra_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
