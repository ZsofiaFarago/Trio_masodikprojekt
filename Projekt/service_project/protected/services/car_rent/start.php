<?php session_start(); ?>
<?php require_once 'protected/services/car_rent/cr_config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/car_rent_style.css'?>">
		<title>Autóbérlés</title>
	</head>
	<body onload="selectMenu()">
		<div id="header">
			<img id="logo" src="<?=PUBLIC_DIR.'Images/car_rent.png'?>" />
			<h1 id="title">Autóbérlő szolgáltatás</h1>
		</div>
		<div id="nav">
			<center>
			<div id="menu" style="margin-left: auto; margin-right: auto;">
				<a class="btn btn-primary" id="main_menu" href="index.php?S=car_rent&A=home">Főoldal</a>
				<a class="btn btn-primary" id="categories_menu" href="index.php?S=car_rent&A=categories">Kategóriák</a>
				<a class="btn btn-primary" id="info_menu" href="index.php?S=car_rent&A=info">Információk</a>

				<?php if(!IsUserLoggedIn()) : ?>
					<a class="btn btn-primary" style="font-size: 24px" id="registration_menu" href="index.php?S=car_rent&A=registration"> 
						Regisztráció</a>
				<?php endif; ?>

				<?php if(!IsUserLoggedIn()) : ?>
					<a class="btn btn-primary" style="font-size: 24px" id="login_menu" href="index.php?S=car_rent&A=login">Bejelentkezés</a>
				<?php endif; ?>

				<?php if(IsUserLoggedIn()) : ?>
					<a class="btn btn-primary" style="font-size: 24px" id="logout" href="index.php?S=car_rent&A=logout">Kijelentkezés</a>
				<?php endif; ?>

				<?php if(IsUserAdmin()) : ?><a class="btn btn-primary" style="font-size: 24px" id="admin" href="index.php?S=car_rent&A=admin">Admin menü</a>
				<?php endif; ?>

				<?php if(IsUserSeller()) : ?><a class="btn btn-primary" style="font-size: 24px" id="seller" href="index.php?S=car_rent&A=seller">Eladó menü</a>
				<?php endif; ?>
			</center>
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