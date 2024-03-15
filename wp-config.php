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
define( 'DB_NAME', 'mydatabase' );

/** Database username */
define( 'DB_USER', 'myapp' );

/** Database password */
define( 'DB_PASSWORD', 'testingdevice' );

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
define( 'AUTH_KEY',         'z|C_YsO!ksEce{qv[1v$*#MBriRfpc)Qram])dEvc@(O;:o4R~sc:^La]G~?dB60' );
define( 'SECURE_AUTH_KEY',  '~^3.^iUxKVgFmA u74%-0??` ifD+QY/ s=<>FAv5+QG7bEdw:|t`(Q3l)c ?3pF' );
define( 'LOGGED_IN_KEY',    '0@<72|%h:u+$ZRn*e:#^yxpWzKg;c !{{KMSm$ef?Sv=rlHlK2An)1jZnz2OP{P?' );
define( 'NONCE_KEY',        'I`-xRSf*/hEfo;hq:ewMh;WsOH4H =~l<Zf!CDoP:DPRzbGD3)+Av83d QuhP1yN' );
define( 'AUTH_SALT',        'dR,Ce3XZ] wB:>$sVpTLR(72zSg}p0,SC:LT i:r&Hz<Avil4-=.SBT>yK-,dsfj' );
define( 'SECURE_AUTH_SALT', 'cQYj*sY^.-yy{pJWxgwb:R0k*Jb!]e@C/.YFG1_.tREC0|?o~%PXad`-D+rp$(w&' );
define( 'LOGGED_IN_SALT',   'vy|hgFc4zADI[2kGI/CLE$$Vf-c@,<f3E~H`3@=OW{8R|FJl1>|H0k</P_TKf-3;' );
define( 'NONCE_SALT',       '=tgt>Gq!K)o] QQvLV%*y PYp>--XHwns^[2Y2R(EnBMYC2q@Fu!(sivfg~,&QlK' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
