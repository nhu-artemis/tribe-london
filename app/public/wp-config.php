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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '- kW=:?F0+nE@KQ|,znNEM%J?z0;QP/?:$QEuC,3]a<v}p$!`}N8G9g;gt*_6P!4' );
define( 'SECURE_AUTH_KEY',   'a|D=vF-VB~a?+D>Bj.^VbL#C<LV1>RF3jp7C=]y-JtsMqz87D<19~#i&CxAf]gf`' );
define( 'LOGGED_IN_KEY',     ';o3y0PyDO-`4S;CUBo,5:re7=T!h_HQAEicJ=*hHcR#G&v0+(7[!63,hPS{]&Y%:' );
define( 'NONCE_KEY',         'F:^/@Z>@B&a3J;%O3D=f*|C;lC>Qu[q|keV08St*21YDL8VSy]ukBPnvv,{z(c}g' );
define( 'AUTH_SALT',         'dG/PzUteUiOl#gp*RBinD^GRSyU1GSBd7+5yM35YT+g8N^hlFwZ,x{j<ZiScd~Sb' );
define( 'SECURE_AUTH_SALT',  'F{/y?g9^ ;59_0ivyW6`V|ZDCatx,bs?4eG(2}2aXrI-(nywFq>g[|&NjD[*m@S*' );
define( 'LOGGED_IN_SALT',    '={|8vxV.Ys5{7jCt1VMI(j;Uwe[w%-P|VJ`.Q%<x<@6_4#$6GmR1d{%H+l-7M <Q' );
define( 'NONCE_SALT',        'z-T0s>|m1p03-&+4{03aKk$)=:<FS>0?bNgG#Rh|w0wQ-NSw^w;=hCP!Du1fEq:G' );
define( 'WP_CACHE_KEY_SALT', 'Lf7Va/{a!xys#S@}0]4sZ+<TXILy>GXp=9Xm_((uBD.A`e^%{Hm2%f6$sOV/!qiR' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
