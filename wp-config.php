<?php
define( 'WP_CACHE', true );
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'baskievi_arabaalsat' );

/** Database username */
define( 'DB_USER', 'baskievi_araba' );

/** Database password */
define( 'DB_PASSWORD', 'cMJhzk1Un' );

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
define( 'AUTH_KEY',         '&FM8>7!eP#Ni@`eqkzIbo3|G#IL^}OXzz|QE3zuU/hTJ#`[#q<yE(DtDCnD>2._>' );
define( 'SECURE_AUTH_KEY',  'NI1MKij:+|mfBeEPH(+ji2EW9[!Sdv+~z&HYhzkB*jRcAbvf,kOC]foZCDw$g,@X' );
define( 'LOGGED_IN_KEY',    'q^>s!9fQ!H!:W|m!$c61GXEOseI7-~8r[xDILLp Uqe :*<zqh<H0d^O/k$5D{mx' );
define( 'NONCE_KEY',        'Td~DQ +QS^=($Dx)eX?8fy.|.q+SdN,2Ii!LehmwK6Ssa<}.J0$nJ=I(m :O}Um/' );
define( 'AUTH_SALT',        '0-38aLj4#l3bp}_mN=wU:=^cc^(g},J|*l?Nb*)/,xV/_&XLASY)A&rg<:1wy*x:' );
define( 'SECURE_AUTH_SALT', 'wJ-0^b5ao|*dqPOJL*pPMU:Pg3J%:FUYI3W|m[M={jAPkl-%:R{K=HVkTijq0.[a' );
define( 'LOGGED_IN_SALT',   ';&v:Uc$+T:qGXdPE>wrT?t;tlN>=zQSFqWm(qpUffyDeGE/EyB2uk^5;zZWkqV+A' );
define( 'NONCE_SALT',       'GtWMMM+`gR>~Hexv~K0)k.qCt1H} 97*%E<yz`^]uYxwz vf|@4=LKd7D1*]K=d&' );

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
