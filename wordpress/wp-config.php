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
define('DB_NAME', 'bsidetheme');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i>6[%#p.3f=5^q[T9<D/3jw6sS2jl;ER2=d}Pp-I1Rr~O;%a.6Fq<alS4I0e[x8,');
define('SECURE_AUTH_KEY',  'xMTYn!l.cYZx.=am<c{!?2bIrzF_;?ms_O-zdDMEU:l<o>8<klZXEXQF=Jr_25/a');
define('LOGGED_IN_KEY',    'KJ6IVEp8iU?O/RfZMHKXYj:KiB:M3fTj#eXd3z!{?jA]om}(MC/Ou,_W}1{M+1_.');
define('NONCE_KEY',        ' iyIi .BbYI>9>{R@MM`OB8xw05O_(~@{Bqf0uI-UY?pICB*G-wawk2*|enSQ?!C');
define('AUTH_SALT',        '9foE_EVYl~xa>XIZQ[9.o*s~RAr1$S}Zf?P2-ck.Zcq#dsszb|$|StBRE6Deeo*/');
define('SECURE_AUTH_SALT', '{<74HvF++XL)gm);H5B`o/5D!ep_}v!>WEtgF|o^fquU.n,tW*mkBhXF*@i%&(eH');
define('LOGGED_IN_SALT',   'w@M~e:VX<;vBHz?pp4V=n9n?m7Rt<eb;&:(S6AnCy|f0Ag?z9w8F8Dz 78Hf1*K[');
define('NONCE_SALT',       'LANHzYzpLQaCEHvZ68gJP$wD1s;j->J^5_-kK:3!<gNe4GAL}p2QHMLx6`Qd(9OH');

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
