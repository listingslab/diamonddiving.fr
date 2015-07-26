<?php

 
// ** MySQL settings ** //
define('DB_NAME', 'diamonddiving_fr');
define('DB_USER', 'dd_website');
define('DB_PASSWORD', 'Ns257VfhcpI'); 
define('DB_HOST', '50.56.52.139');

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
define('AUTH_KEY',         'E<uGF<+<A.;bMTK|Vu->iWCe$rErMLL8gW+u|s]^y6BN=hwLr!*ue0jtF)nIn3^ ');
define('SECURE_AUTH_KEY',  'tP0zxbR8b7G#{f|oOF|C?Y:#OA_JPCn6$bGrp25|)!P+f9|R#COM^2%c-a|.gb+t');
define('LOGGED_IN_KEY',    'Q$`m s~$o]iHoYv(~8Eh.L6?`)dI$8#&,;q-H=}:sk_$^~kaE~86g6LKb)pqXwr)');
define('NONCE_KEY',        'Q3v,Or!e:@&I,4w<z;xQL>o?2eS|@B#ZzH`<j+82N`2# 6o6pE$=aDHI{01&fy~5');
define('AUTH_SALT',        'Gk*r+O*~?^Bi7X)I]Ns257VfhcpIk8><}w+:cX+Qc46xE$C_tRNU4h8`:%O-o+S,');
define('SECURE_AUTH_SALT', 'vc`D&RL1p^XQ|Lr-l:QkHc,%6./96[j>Yf(7X5>$[ZEWWi|8EZ/oLX!?fGcLFdNW');
define('LOGGED_IN_SALT',   'k<0vmf&u#IAe!aCM-$4v8]@7Pvz_Z1N@2+93}O! 1#3+&1z : `NKTf8YOvfG?XO');
define('NONCE_SALT',       '~p(z^S+!=I@9+XO2A7x7TLyq*ZG|9h=A@Wi>opy%LS>jl|Lj-?9AhS~gUN~-fjL7');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
