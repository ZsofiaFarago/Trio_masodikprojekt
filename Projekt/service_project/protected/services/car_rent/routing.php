<?php 
	if(!array_key_exists('A', $_GET) || empty($_GET['A']))
		$_GET['A'] = 'home';
	switch ($_GET['A']) {
		case 'home': require_once PROTECTED_DIR.'normal/main.php'; break;
		case 'categories': require_once PROTECTED_DIR.'normal/categories.php'; break;
		case 'info': require_once PROTECTED_DIR.'normal/info.php'; break;
		case 'registration': require_once PROTECTED_DIR.'normal//registration.php'; break;
		default: require_once PROTECTED_DIR.'error/404.php'; break;
	}
?>