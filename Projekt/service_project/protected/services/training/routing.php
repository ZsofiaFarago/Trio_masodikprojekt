<?php 
	if(!array_key_exists('A', $_GET) || empty($_GET['A']))
		$_GET['A'] = 'home';
	switch ($_GET['A']) {
		case 'home': require_once PROTECTED_DIR.'services/training/main.php'; break;
		case 'partners': require_once PROTECTED_DIR.'services/training/partners.php'; break;
		case 'contact': require_once PROTECTED_DIR.'services/training/contact.php'; break;
		default: require_once PROTECTED_DIR.'error/404.php'; break;
	}
?>