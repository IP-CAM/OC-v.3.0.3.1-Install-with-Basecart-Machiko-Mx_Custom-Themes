
<?php
// // HTTP
// define('HTTP_SERVER', 'http://penatabua.walktur.com.br/');

// // HTTPS
// define('HTTPS_SERVER', 'http://penatabua.walktur.com.br/');

// // Máquina Local
// HTTP
define('HTTP_SERVER', 'http://localhost/penatabua/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/penatabua/');


// DIR
// Em produção
// define('DIR_APPLICATION', '/home/u698496328/domains/walktur.com.br/public_html/penatabua/catalog/');
// define('DIR_SYSTEM', '/home/u698496328/domains/walktur.com.br/public_html/penatabua/system/');
// define('DIR_IMAGE', '/home/u698496328/domains/walktur.com.br/public_html/penatabua/image/');

// Máquina local
define('DIR_APPLICATION', 'C:/xampp/htdocs/penatabua/catalog/');
define('DIR_SYSTEM', 'C:/xampp/htdocs/penatabua/system/');
define('DIR_IMAGE', 'C:/xampp/htdocs/penatabua/image/');
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

// // DB - Servidor
// define('DB_DRIVER', 'mysqli');
// define('DB_HOSTNAME', 'localhost');
// define('DB_USERNAME', 'u698496328_opencart');
// define('DB_PASSWORD', 'PenaTabua20');
// define('DB_DATABASE', 'u698496328_opencart');
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
