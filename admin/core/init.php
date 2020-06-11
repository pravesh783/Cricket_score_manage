<?php
ob_start();

session_start();

define('DB_HOSTNAME', 'sql302.epizy.com');
define('DB_USERNAME', 'epiz_24274601');
define('DB_PASSWORD', 'ZnyhQB1hZZGFe39');
define('DB_NAME', 'epiz_24274601_cricket');

spl_autoload_register(function($class_name) {
	require $_SERVER['DOCUMENT_ROOT'] . '/Cricket-Score-Manageen-tSystem-master/admin/libs/' . $class_name . '.php';
});
?>