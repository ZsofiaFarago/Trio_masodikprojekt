<?php 
define('BASE_DIR', './');
define('PUBLIC_DIR', BASE_DIR.'public');
define('PROTECTED_DIR', BASE_DIR.'protected/services/car_rent');

define('DATABASE_CONTROLLER', PROTECTED_DIR.'database.php');
define('USER_MANAGER', PROTECTED_DIR.'userManager.php');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'carrent');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8');
?>