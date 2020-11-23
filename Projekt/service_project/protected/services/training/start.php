<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/sportStyle.css'?>">
		<title>StayFit</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?S=training&A=home">StayFit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div>
        <ul>
            <li>
                <a href="index.php?S=training&A=home">Home </a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="index.php?S=training&A=partners">Partners</a>
            </li>
            <li>
                <a href="index.php?S=training&A=contact">Contact</a>
        </ul>
        <form>
            <input type="search" placeholder="Search" aria-label="Search">
            <button type="submit">Search</button>
        </form>
    </div>
</nav>
		
		
		
		<div class="main">
			<?php require_once PROTECTED_DIR.'services/training/routing.php'; ?>
		</div>
		<footer>
    <p class="p-3 bg-dark text-white text-center">Copyright &copy; 2020 AFP1 Trio. All Rights Reserved (@StayFitProduction)</p>
</footer>
	</body>
</html>