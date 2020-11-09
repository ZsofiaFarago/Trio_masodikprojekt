<?php 
	if(!array_key_exists('A', $_GET) || empty($_GET['A']))
		$_GET['A'] = 'home';
	switch ($_GET['A']) {
		case 'home': require_once PROTECTED_DIR.'services/pest_control/main.php'; break;
		case 'pest': require_once PROTECTED_DIR.'services/pest_control/pest.php'; break;
		case 'order': require_once PROTECTED_DIR.'services/pest_control/order.php'; break;
		case 'registration': require_once PROTECTED_DIR.'services/pest_control/registration.php'; break;
		default: require_once PROTECTED_DIR.'error/404.php'; break;
	}
?>