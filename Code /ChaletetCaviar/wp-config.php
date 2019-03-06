<?php

define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db775886195' );

/** MySQL database username */
define( 'DB_USER', 'dbo775886195' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Choupette25&' );

/** MySQL hostname */
define( 'DB_HOST', 'db775886195.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_0-70_4%uwvGi?C0*hig.?-dSl`|+.EQ-4$8!SwC8)e^Ck!-;}pu)y^pG5q-X[ZO');
define('SECURE_AUTH_KEY',  'J8gnEdG*J6wv*)qvb,rxpY@!qvO7.KZ?&SE6z/|6>#80uVS-RdKq|jq_0RkJm@z$');
define('LOGGED_IN_KEY',    'HLO}ALJs`V<4i5>q0i;G`t9-|Eqz4z|SL3GH4Uy. ips>mI-.,g.nV7Fmt:!A-m*');
define('NONCE_KEY',        '$},9}(8Z`}^#}Wyfk%m`D=(Qp)z{yZC<m3*xUGQ|rsfBDxff]JJ>RCKEe2aL>6o+');
define('AUTH_SALT',        '-@^*Am.=6Xu}nN_(*QH*;<;RJjvkj%Xl|LL;4f31K=kY!|_;2Qgl$f $TGP$tUxh');
define('SECURE_AUTH_SALT', '~cZy<~hT.x>Em@)pPzf@sNp4Ik,qdP@-x8qC-7|Q G6l/Lja_u8$anO|_mes^u@x');
define('LOGGED_IN_SALT',   ')zI|t}/]%D#pIO$m^e68058y)tJV:1(^9Yr2r^:1b,z5^vM-fZmwdGDJ!pF;v]?s');
define('NONCE_SALT',       ')8]J3!zqILi7&iN..|N1t6LcJh}aOaD6j]9)!3K31%}=&NJH.&<1/=rlW!Y%kEv,');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KWWcAnEm';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
