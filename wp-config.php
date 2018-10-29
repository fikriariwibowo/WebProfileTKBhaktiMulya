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
define('DB_NAME', 'bhaktimulya');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VvV,:^[i%zEg57IJP?`z8zP~bkI@7>R[4To1:GBl8n1MS1GVpg:U0qd*>dO&O19I');
define('SECURE_AUTH_KEY',  '1L;4xTM+r9}lN6i8ZhKk1_,g,[([jTha&nn:<@: ?b3-mep7=s7yj@atbftpPcRb');
define('LOGGED_IN_KEY',    '  ;+KG.2^kIlAoTQM`M]3wXYZ>[Wa12nAH^FRCfhzZdKkaw9uB~faIat.] rb3D-');
define('NONCE_KEY',        '}O$mrAuo+}aW#,.y3IRXh#5(F(+|U?lI@)Su|!Fs4Bi*g4C!!`$#rJ4t@dr=gzXO');
define('AUTH_SALT',        'SR.P[yI1_=@f=Hv8GT.A>n~bipECZ!J!H$ec?CSR/ehpl&I9xN{zxg /yffMB=#.');
define('SECURE_AUTH_SALT', '-z?phuG(a$ioEnU4}v$C&/t)T)PI/{dpx&V)Q.T4gi,dF&Q(6-C+E&{wpY)Yin|a');
define('LOGGED_IN_SALT',   'v?ESiM_Q wjI-ymhUDf1:q}BAr`Xdf$)|=NgNZJJ(s+p}z#J(]OU,cXt(AEmjx|m');
define('NONCE_SALT',       'Ea#*Knw{bza-J%J@+=yhx7<^n=_r^e`o)_J<E{UGW 1FUYF+e,k1BFXhWwkYC8a.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
