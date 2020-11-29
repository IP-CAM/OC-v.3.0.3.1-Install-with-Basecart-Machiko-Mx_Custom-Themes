
<?php
// // HTTP
// define('HTTP_SERVER', 'http://penatabua-com.umbler.net/');

// // HTTPS
// define('HTTPS_SERVER', 'http://penatabua-com.umbler.net/');

// Máquina Local
// HTTP
define('HTTP_SERVER', 'http://localhost/OpenCartPe/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/OpenCartLingeries/');


// DIR
// Em produção
// define('DIR_APPLICATION', '/home/penatabua.com/public/catalog/');
// define('DIR_SYSTEM', '/home/penatabua.com/public/system/');
// define('DIR_IMAGE', '/home/penatabua.com/public/image/');

// Máquina local
define('DIR_APPLICATION', 'C:/xampp/htdocs/OpenCartLingeries/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/OpenCartLingeries/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/OpenCartLingeries/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
// define('DB_DRIVER', 'mysqli');
// define('DB_HOSTNAME', 'mysql380.umbler.com');
// define('DB_USERNAME', 'penatabua');
// define('DB_PASSWORD', 'PenaTabua20');
// define('DB_DATABASE', 'penatabua');
// define('DB_PORT', '3306');
// define('DB_PREFIX', 'oc_');

// DB - Máquina Local
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'penatabua');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');