<?php

// HTTP
define('HTTP_SERVER', 'http://evonnis-com.umbler.net/admin/');
define('HTTP_CATALOG', 'http://evonnis-com.umbler.net/');

// HTTPS
define('HTTPS_SERVER', 'http://evonnis-com.umbler.net/admin/');
define('HTTPS_CATALOG', 'http://evonnis-com.umbler.net/');

// Máquina Local
// // HTTP
// define('HTTP_SERVER', 'http://192.168.0.108/open/admin/');
// define('HTTP_CATALOG', 'http://192.168.0.108/open/');

// // HTTPS
// define('HTTPS_SERVER', 'http://192.168.0.108/open/admin/');
// define('HTTPS_CATALOG', 'http://192.168.0.108/open/');


// DIR
define('DIR_APPLICATION', '/home/evonnis.com/public/admin/');
define('DIR_SYSTEM', '/home/evonnis.com/public/system/');
define('DIR_IMAGE', '/home/evonnis.com/public/image/');

// DIR Máquina Local
// define('DIR_APPLICATION', '/var/www/html/open/admin/');
// define('DIR_SYSTEM', '/var/www/html/open/system/');
// define('DIR_IMAGE', '/var/www/html/open/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/home/evonnis.com/public/catalog/');
// // DIR Máquina Local
// define('DIR_CATALOG', '/var/www/html/open/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'mysql669.umbler.com');
define('DB_USERNAME', 'evonnis');
define('DB_PASSWORD', 'letsdobetter');
define('DB_DATABASE', 'opencart_test');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// DB - Máquina Local
// define('DB_DRIVER', 'mysqli');
// define('DB_HOSTNAME', 'localhost');
// define('DB_USERNAME', 'hendz');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'teste');
// define('DB_PORT', '3306');
// define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
