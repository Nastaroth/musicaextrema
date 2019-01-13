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
// define('WP_CACHE', true); //Added by WP-Cache Manager
// define( 'WPCACHEHOME', '/home/capfpelc/public_html/juguetesbarquisimeto.com.ve/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

define('DB_NAME', 'juguetes');

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
define('AUTH_KEY',         'rx8guhpzm6spvnqsrwhykfxqti8h0r9hkdcpybevv8eeae3cahw3i96y4tfyluzc');
define('SECURE_AUTH_KEY',  'aml09uh4a6bckojys4v6pnzqyyqc34d5wxlo6x5wpzkqboxs4hxjnu1h3fsrwulf');
define('LOGGED_IN_KEY',    'jd3qeuektbupl3wa3swr9jyupjdvxyfegdzhbtyftcinwlkeejynih8g4knwdrs6');
define('NONCE_KEY',        'qq6y8owscrb9ry6towhc25yk6x2nj0fuwq5wbv1tkjmx9t6n5x76poxw0aujl2b2');
define('AUTH_SALT',        'gh581twtjvctktyt0i0ystgl08x9scmb9xkyiepwdei9dsveu7lmnipxixzbrwcm');
define('SECURE_AUTH_SALT', 'hbcp5esjoeuuslviretlw77ielbhhzx1t2buwabcv4iwpusoy2za6psmuszg8nah');
define('LOGGED_IN_SALT',   'qbfllwkdtlcogatky5aftzniubk0i53rcoslid4y1q6qprana8pgqmuvfvokqkvd');
define('NONCE_SALT',       'bbz10pouhde4dnwiqdwqdtwjnyubuurv2p2kbcyhxirji7lr33t2zfge5ctojbx1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpb4_';

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
define( 'WP_AUTO_UPDATE_CORE', false );
