<!DOCTYPE HTML>
<html>
	<head>
		<meta content="charset=UTF-8">
		<link rel="stylesheet" href="<?=PUBLIC_DIR.'css/sportStyle.css'?>">
		<title>StayFit</title>
		    
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


       
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://c.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="<?=PUBLIC_DIR.'Js/sportScript.js'?>"></script>
	</head>
	<body onload="selectMenu()">
		
		
		
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?S=training&A=home">StayFit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?S=training&A=home">Home </a>
            </li>
            <!--
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            //-->
            <li class="nav-item">
                <a class="nav-link" href="index.php?S=training&A=partners">Partners</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?S=training&A=contact">Contact</a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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