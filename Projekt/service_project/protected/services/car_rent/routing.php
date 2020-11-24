<?php 
	if(!array_key_exists('A', $_GET) || empty($_GET['A']))
		$_GET['A'] = 'home';
	switch ($_GET['A']) {
		case 'home': require_once CR_PROTECTED_DIR.'normal/main.php'; break;
		case 'categories': require_once CR_PROTECTED_DIR.'normal//categories.php'; break;
		case 'info': require_once CR_PROTECTED_DIR.'normal/info.php'; break;
		case 'registration': require_once CR_PROTECTED_DIR.'user/registration.php'; break;
		case 'login': require_once CR_PROTECTED_DIR.'user/login.php'; break;
		case 'logout': IsUserLoggedIn() ? UserLogout() : header('index.php?A=home'); break;
		case 'admin': IsUserAdmin() ? require_once CR_PROTECTED_DIR.'admin/admin.php' : header('index.php?A=home'); break; 
		case 'seller': IsUserSeller() ? require_once CR_PROTECTED_DIR.'seller/seller.php' : header('index.php?A=seller'); break;
		default: require_once CR_PROTECTED_DIR.'error/404.php'; break;
	}
?>