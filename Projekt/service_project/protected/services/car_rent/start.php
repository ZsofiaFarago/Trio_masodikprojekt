<?php session_start(); ?>
<?php require_once 'protected/services/car_rent/cr_config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/car_rent_style.css'?>">
		<title>Autóbérlés</title>
	</head>
	<body onload="selectMenu()">
		<div id="header">
			<img id="logo" src="<?=PUBLIC_DIR.'Images/car_rent.png'?>" />
			<h1 id="title">Autóbérlő szolgáltatás</h1>
		</div>
		<div id="nav">
			<div id="menu" style="margin: auto;">
				<a class="menupont" id="main_menu" href="index.php?S=car_rent&A=home">Főoldal</a>
				<a class="menupont" id="categories_menu" href="index.php?S=car_rent&A=categories">Kategóriák</a>
				<a class="menupont" id="info_menu" href="index.php?S=car_rent&A=info">Információk</a>
				<a class="menupont" id="registration_menu" href="index.php?S=car_rent&A=registration">Regisztráció</a>
			</div>
		</div>
		<div class="main">
			<?php require_once PROTECTED_DIR.'services/car_rent/routing.php'; ?>
		</div>
		<div id="footer">
			<p>Copyright &copy; 2020 AFP1 Trio. All Rights Reserved</p>
		</div>
	</body>
</html>