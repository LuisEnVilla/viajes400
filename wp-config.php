<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u808207932_lywyb');

/** MySQL database username */
define('DB_USER', 'u808207932_tuzup');

/** MySQL database password */
define('DB_PASSWORD', 'XuPyQuWuny');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '8WTjfA2VBADLJsQyNgXsOOWf5pKGqJ1lqcn4K01Xac6n4birKnJnFrUNeHEW28nz');
define('SECURE_AUTH_KEY',  'UhDyW8m7EBWX8Gi99xSsyP4Ni0Me75Lmjqy42RnWo5D1DWCXekmkMV4qIuIzg4fa');
define('LOGGED_IN_KEY',    'jzZYC7qrFBKFj8XdmQOprq9rrbTkoCdYzeCKI0gPlKGPkEI26vBsE1odx6fT78se');
define('NONCE_KEY',        'sadrscreqtJskeOAxYrsGxmgYWH0afsIn6sFDIjTb1ofOcn1dtd3VwwAiG9ioQjT');
define('AUTH_SALT',        'baN6a2a6PAVKEZkW9x3laC7JVDDLyUBjGQBQdyMnGCQdUPl2vVYRzhu7jp2e8pAJ');
define('SECURE_AUTH_SALT', 'zUWTmqaJ0Pq13bOiBDGyTWmDHSwImW4GPwpbggC7JHAQp1ImN9JOZITunKTU691C');
define('LOGGED_IN_SALT',   '64YpqKQx3axf4zMeglTdcpdfXcp2BB1TSg8g3WD3Zm2m0thqZD4vOfEHWUHNsprp');
define('NONCE_SALT',       'RtKmcWBlQaH2WuG5UUtCkz5WdbnL3FTmByJ5WdvGVI7sWz0xuGqJ9zGBhBIGfuyD');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'j5t0_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
