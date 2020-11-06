<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<title>Services Portal</title>
		<script src="<?=PUBLIC_DIR.'Js/menu_highlight.js'?>"></script>
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/style.css'?>">
	</head>
	<body onload="selectMenu()">		
		<div id="header">
			<img id="logo" src="<?=PUBLIC_DIR.'Images/logo.png'?>" />
			<h1 id="title">Információs portál</h1>
		</div>
		<div id="nav">
			<div id="menu">
				<a class="menupont" id="main_menu" href="index.php?S=home">Főoldal</a>
				<a class="menupont" id="information_menu" href="index.php?S=information">Információ</a>
				<a class="menupont" id="services_menu" href="index.php?S=services">Szolgáltatások</a>
				<a class="menupont" id="freetime_menu" href="index.php?S=activities">Szabadidő, szórakozás</a>
			</div>
		</div>