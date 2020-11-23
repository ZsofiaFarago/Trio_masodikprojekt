<?php 
	if(!array_key_exists('S', $_GET) || empty($_GET['S']))
		$_GET['S'] = 'home';
	switch ($_GET['S']) {
		case 'home': require_once PROTECTED_DIR.'start.php'; break;
		case 'information': require_once PROTECTED_DIR.'information.php'; break;
		case 'services': require_once PROTECTED_DIR.'services.php'; break;
		case 'activities': require_once PROTECTED_DIR.'activities.php'; break;
		case 'fortune_teller': require_once PROTECTED_DIR.'services/fortune_teller/start.php'; break;
		case 'pest_control': require_once PROTECTED_DIR.'services/pest_control/start.php'; break;
		case 'freetime': require_once PROTECTED_DIR.'services/freetime/Snake.php'; break;
		case 'training': require_once PROTECTED_DIR.'services/training/start.php'; break;
		case 'car_rent': require_once PROTECTED_DIR.'services/car_rent/start.php'; break;
		default: require_once PROTECTED_DIR.'error/404.php'; break;
	}
?>