<?php
define('WP_CACHE_KEY_SALT', 'gkelsie.42.fr');
define('WP_CACHE', true);
define('DB_NAME', 'wp');
define('DB_USER', 'gkelsie');
define('DB_PASSWORD', 'school21');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8');

define('DB_COLLATE', '');
define('AUTH_KEY',         'GQeW?Ye-JUYgv,xFhPmfMl?.(jJ5Rl/rnjZVY}+LJ%qAiAu,B7z:w_p]-l|agh7m');
define('SECURE_AUTH_KEY',  'j1+e7^-?n-|[-0|L`g)9L(|F(nZOby2]+3Z}_!-P8HD0}Y1k|B+cs)F8BHEM(}.b');
define('LOGGED_IN_KEY',    'l2+g&(^z,nfv;/xK;*[}ASFT|!ewRR:UoyH,{|-ZfcS[p7?nr7PbPU*J-5kZ)=lQ');
define('NONCE_KEY',        'D%L|WS>+`0-?umT*_Lx<<eZBeNfQ4S_nNqx+aG|YDvP^#+:cSq?CP5+=w~JBMb4A');
define('AUTH_SALT',        'ZY(lGvI7rcI=yamy)10v6%u6~z-8@Z/ofg%bD$P<6.IPcp`0d~.paE8h_/U|LCP{');
define('SECURE_AUTH_SALT', 'R-9]Ft^v)Qm*:@il&Xx/DFWIp1@?JW7SWuiFGk@<Fi4j^u|;B1Jl0|zz=hYo_:e[');
define('LOGGED_IN_SALT',   '`Oc+,_s~ rRJ|osa#mmZ4(s5F4GM<baI1d<<H_x[9rv72t.&lAv!c}`IS`--U&h5');
define('NONCE_SALT',       '-l /Km-y}-}44iFblI(v*8E0^&[tKJz,*I#U.yE>95*SOfAzYC_=Nmr<2rhx}Id+');

$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

if (!defined('ABSPATH'))
	define('ABSPATH', '/var/www/html/wordpress');

require_once(ABSPATH . 'wp-settings.php');