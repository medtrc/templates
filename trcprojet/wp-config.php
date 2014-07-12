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
define('DB_NAME', 'u757512022_exuza');

/** MySQL database username */
define('DB_USER', 'u757512022_ymupu');

/** MySQL database password */
define('DB_PASSWORD', 'eVeLyvaZeg');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'gd3DV3fIFtiBUapInuG7tA8EYgKDbhuRIyqTr1FSCCIiyXN50YRlhuAywfU6ezVW');
define('SECURE_AUTH_KEY',  't0FEBU8CFu6PpvGQLJs9u5IR5QjDjdj1BRihIvj64oI5YLJ4VxXykE0Bg7sWKBQ2');
define('LOGGED_IN_KEY',    'oyqyUxooIDzMHwcJBB47v1znv3B0yIDRU2titBKOTztyRg6Eyal05OTj4W50lXJ8');
define('NONCE_KEY',        'cTkF0JCsUSDYmWqUwhqDQwY5k8nARS0pykgXxC6kLwyFW8wZZK9CmVTuJWTkwPap');
define('AUTH_SALT',        'dw3fHCnE5mtn2xXpWtlng7nGfb1uWWc5JycNq0zqvRYoTyrwWAB1E1hGMXvR2Xcd');
define('SECURE_AUTH_SALT', 'jbd0SxCQz04bS1y6KZjc94Zrgm1Mh7zOU3GMY6fZqDWgdRmPjxGZpi2IM11cvF4M');
define('LOGGED_IN_SALT',   'CWd1L3kMIqqUAfQj6vyrLH1q1ZNBQApztHkV0wwakAoo7Cadvqx38qwGUSpApMwL');
define('NONCE_SALT',       'OFRK0xdg0erwWBijsbaTSLhWx39IjJdJXFiBWbDJVkm0Pw6mvX0inc3dIXnMrlXb');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
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
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

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
