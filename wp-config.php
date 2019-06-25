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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'RaiXyrM`97,J sbZ8cD{wSz$QRoqQOkhijV:q$`TkUoe==kobb=my!t-bbV9XNx*' );
define( 'SECURE_AUTH_KEY',  '!PNJgcd1t-#X0pH82UVsNk2g| 9Q75ZrxW+X+{,PyyI5x57znU%m@-^qt}QfYH#-' );
define( 'LOGGED_IN_KEY',    '^iZ7eW3ae[~5H=glR)hyNb!D m`hq3H4EzxUkRm[*}D6H93no*>`7-1tDkEcd4Y2' );
define( 'NONCE_KEY',        'tHeWKvXHQ8#C?b#x#Ywq;jo3BANP:*#q9`BG|S*&hL@`>KTImkdLM2m:%f1|Cp>Z' );
define( 'AUTH_SALT',        ':~?7ZYpg#Y3aQ,%^}%bbEW?E4?.z=bg[Y98**#2=~6#py@d-b6:nLy z-9Fmb:jE' );
define( 'SECURE_AUTH_SALT', '0U;^P|` u!^A17sNDXF*cejIM=$*<:Q|hKW=h`4k$W:D=@FE sxvJ 0QU8MS!.>}' );
define( 'LOGGED_IN_SALT',   'uw=8(9grJU,!5de+A^X4!R%w_UGR.9`M0?Z4U[vxSo.)95J !2-aHHCH&:U,C7,3' );
define( 'NONCE_SALT',       '>w6H#0Iu&@$p#,254Vik/!<Edj<,u,!JRXge1Wr(CES2<O1&,Mvm2s!F/O$M3!]#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

