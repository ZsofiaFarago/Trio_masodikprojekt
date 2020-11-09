<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<script src="<?=PUBLIC_DIR.'Js/pest_control_menu_highlight.js'?>"></script>
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/pest_control_style.css'?>">
		<title>Kártevőirtás</title>
	</head>
	<body onload="selectMenu()">
		<div id="header">
			<img id="logo" src="<?=PUBLIC_DIR.'Images/pest_control_logo.png'?>" />
			<h1 id="title">Kártevőirtás</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<a class="menupont" id="main_menu" href="index.php?S=pest_control&A=home">Főoldal</a>
				<a class="menupont" id="pest_menu" href="index.php?S=pest_control&A=pest">Kártevők</a>
				<a class="menupont" id="order_menu" href="index.php?S=pest_control&A=order">Megrendelés</a>
				<a class="menupont" id="registration_menu" href="index.php?S=pest_control&A=registration">Regisztráció</a>
			</div>
		</div>
		<div class="main">
			<?php require_once PROTECTED_DIR.'services/pest_control/routing.php'; ?>
		</div>
		<div id="footer">
			<p>Copyright &copy; 2020 AFP1 Trio. All Rights Reserved</p>
		</div>
	</body>
</html>