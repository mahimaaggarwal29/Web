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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '[&$[/?nE<I~#[J onL!IrMSkHa[-YNT8Ri01e[iPTb3P`_vKGMNsEQ.^)P+ZPr^[' );
define( 'SECURE_AUTH_KEY',  '5Td])#q8IOw=E[HM~hU|C Iod<,%A:Jr&wBm [mY<yF5nvq13Ql^9rKQa5xZxq_3' );
define( 'LOGGED_IN_KEY',    'B},T{4~)+ jf#SR|]guF8gZ y_^|/JSPN>.8q9jdd`?Dpmy/GrKwFS^LjL5a4o0n' );
define( 'NONCE_KEY',        '[Sd`aLO#)C4_d}[ME;l>7IcLbsqIbbV^clz>e6/xjH_.iV?817ae9}VqczKsA6p=' );
define( 'AUTH_SALT',        'qfjPgb*r!fB$/=SFw7M9s -s0dFUmsfdU|]x=8Lb_]hgk^iR<-fwq1G_zF2& #yk' );
define( 'SECURE_AUTH_SALT', 'KymzfIMaaha<,g(0VW6qg VM%3,mm#mMl+/u#G~eyQueW5!xicPG,lucSTUS/kPb' );
define( 'LOGGED_IN_SALT',   'JxU7*ZEq7D,d*GIX7oV9<cRO|,%e6PJD8Y)]</M@=d^lsY)[UlAg@7qjE%?1iN5 ' );
define( 'NONCE_SALT',       'I<{1Xg#[FL<~))&Q]NZ0r}e[AF-]/B(2w+%zSa@f#:O{<*r:>m}db8FWBtKl}?q}' );

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
