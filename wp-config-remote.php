<?php
# Database Configuration
define( 'DB_NAME', 'wp_kanopybrands' );
define( 'DB_USER', 'kanopybrands' );
define( 'DB_PASSWORD', 'wSolwYR2ye9Jb9uOpy7t' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'E~:`vRB ^1c6Ff=!.]~TR-L6zLc.y]2fqC!gJK/`^vSBta!8G-*r[YkU~$}T%S0d');
define('SECURE_AUTH_KEY',  'OT-KK1bPs!}E)hL:<~fX)##E-6[CY!k^{&V7claP|y& #9cadCN)wP`rsF^/6,N:');
define('LOGGED_IN_KEY',    '^N{ l}gK6 2NY: GJ_>dB&Bx-|`pW#gbZepwDH#y@R^wYQj|mZ/8JMPFkE!5&M|J');
define('NONCE_KEY',        'Ri!zZ~lAcBZWi+Yr$<6C*=8lH9|4&Kj&U+EVQy]YVDy3nBEpZ6/^lrV=174p$OxI');
define('AUTH_SALT',        '=Lmg|9-nD_h_O>[&YXwJ<|C=Ru2B[y+P%[8r28jYA=fn>k.x<OZabL+M-q3ua%S4');
define('SECURE_AUTH_SALT', 'kh//mMAy8lm@A5|8+4VG+z$<gt5/r8t5Hsv9:/-DlF);KnPcx5Fq%<sMjk=1gmhK');
define('LOGGED_IN_SALT',   '(=M:`9Tb}ojYe>oQJG,S;l=[M/n+1RB_ZC7P<7r&n.&xI7Az=q1r>B@o1guB)~|e');
define('NONCE_SALT',       '$$=`7{t`1I5 uLX}+&OEI*Pffemrb9]kuj8S+{KJi@ePAOkG_4v@ewP*5Hm9*.W=');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'kanopybrands' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '76ccf516f3e863fb3d6913dc51c06ae0c2b2b2f3' );

define( 'WPE_CLUSTER_ID', '120330' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'kanopybrands.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-120330', );

$wpe_special_ips=array ( 0 => '35.227.26.162', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');

$_wpe_preamble_path = null; if(false){}
