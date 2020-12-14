<?php 
	if(!array_key_exists('A', $_GET) || empty($_GET['A']))
		$_GET['A'] = 'home';
	switch ($_GET['A']) {
		case 'home': require_once PROTECTED_DIR.'services/freetime/start.php'; break;
		default: require_once PROTECTED_DIR.'error/404.php'; break;
	}
?>