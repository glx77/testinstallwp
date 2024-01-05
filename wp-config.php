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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_testinstallwg_db' );

/** Database username */
define( 'DB_USER', 'wp_testinstallwg_user' );

/** Database password */
define( 'DB_PASSWORD', 'wp_testinstallwg_pw' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ws/-/fCQ5H&K?Orn.7G9++?*EQU<L|fa?#35PG`yu;gemk~,%SgH+lF;`AW$Gev|' );
define( 'SECURE_AUTH_KEY',   'x#1EtB{A Mv61^.l$Mq>f%Wh[<UZ}pk*3Osj?A:TZsURd]=ZxU`GEbe@{*Debl>6' );
define( 'LOGGED_IN_KEY',     'S]2(%D#l&w5ulucPK.R}Su11ROdtl:3xb)dqCEy)zA]ZPoO!wEUGoC)_QYO {c v' );
define( 'NONCE_KEY',         '#^y~uxP8u+lTAuDATv#o}m=T!QD]|($JA>}CycxBDz[X`Ua[P{#WcvFRu)[(W~z;' );
define( 'AUTH_SALT',         '7{yf=H<Nqa|cluM:lSUzb9azvoQo~v&+r{$5|Hh6$x,1Xw4M:}<k5*#o{(#Yw8X$' );
define( 'SECURE_AUTH_SALT',  'A b^>xIgNYnw+$[:chaWFWyOc,0Z=;ITXb=uAw&g-ypcjD:kN3vq#9xRhh)}dnx;' );
define( 'LOGGED_IN_SALT',    'BV|t@Wr<JzRVLXE!R$LE?JwO5wi`Jr<wa2QR^TIyO*pbu{,2~sYWDYQywtlijPdS' );
define( 'NONCE_SALT',        'F&2ApWpmPC @F>=]K0LR+L7RQ*c/);(Q4p/GMDn%ed{uQwADtIl6}Xx#94Uis,z(' );
define( 'WP_CACHE_KEY_SALT', 'nJjc-N)8sFkBgwL-gCDRo<7;bza:NRr$wWy~]|-(G+0;T`M~}W?#__6FL?Sc_<z|' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
