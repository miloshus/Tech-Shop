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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tech-shop' );

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
define( 'AUTH_KEY',         'a+a@SfV wKu&mPw4ew:ctOgmq4RzbeK!PiQehUFzcxaq(g=RVW6YM2)8PER2**p?' );
define( 'SECURE_AUTH_KEY',  '8L4#dR]%vjEb0a*L/n9x/Z^}nkQ@S% 3O3_1&4t4gluZ}Tn$!vDBqT!H`8a=2n_e' );
define( 'LOGGED_IN_KEY',    '1c@O3^{hftzBP(]ZXcNWR:e@*DfWx3Fu[~tnCO[Iavf)KGt7lx/qEHNMXt99^2}O' );
define( 'NONCE_KEY',        '+sw)D]r6!+dK.[2Q:S$:(=clH,l0.W=67fh,@Qc1WkqKCO<_mONPj*,v8`$@6%p<' );
define( 'AUTH_SALT',        'WAl`n#Hm<7,B1,t]YEnAUR/mrK1b`9;VZ)ALRRpg8c:fzK8Vl}MjT~S}5i=pohW!' );
define( 'SECURE_AUTH_SALT', '~p7(Jt6LI(e9n_Mz/3q]$XHczawo2J&,lNJ%W37O9+:Fy5)N:Lzk@&.uQ>Yk*X.9' );
define( 'LOGGED_IN_SALT',   '=az7Pq41yi#!`X^fWgjOB`^SA%l!6)k#u3pXX8~k~msH{n.>lULibPR$~eS{34P?' );
define( 'NONCE_SALT',       '/,o|n&x<sGHO@W=FHId!jBi<#yB*coUia3UDWe3t(=^j@|Kka8)wf[^NB`j;vae8' );

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
