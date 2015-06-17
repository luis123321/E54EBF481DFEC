<?php 
	error_reporting(E_ALL & ~E_NOTICE);
	session_start();

	if(isset($_SESSION['idusers']))
	{
		$userId = $_SESSION['idusers'];
		$user = $_SESSION['user'];

	}else{
		header('Location: ../97A5B63AAF2BFDEELOGIN/index.php');
		die();
	}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>YourLoteria: Administration</title>
	<link rel="stylesheet" href="styles.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<header id="header" class="">
	<nav class="navbar navbar-default navbar-fixed-top" id="navContainer">
		<div class="container">
			<ul class="nav navbar-nav hidden-xs" id="navC">
				<li class="home"><a>Home</a></li>
				<li class="tools"><a>Tools</a></li>
				<li class="ltrd"><a>Lottery RD</a></li>
				<li class="ltusa"><a>Lottery USA</a></li>

			</ul>
			
				<form action="../97A5B63AAF2BFDEELOGIN/php/logout.php" method="post" accept-charset="utf-8">
					<input type="submit" name="btnend" value="Logout" class="btn btn-default" id="btnend">
				</form>
				
			
			<a href="#" id="mobile-menu-button" class="btn btn-default visible-xs">
					<span class="glyphicon glyphicon-th-list"></span> 
				</a>
		</div>
	</nav>
	<div class="visible-xs">
			<ul id="mobile-main-menu">
				<li class="home"><a href="#">HOME</a></li>
				<li class="tools"><a href="#">Tools</a></li>
				<li class="ltrd"><a href="#">Lottery RD</a></li>
				<li class="ltusa"><a href="#">Lottery USA</a></li>
			</ul>
	</div>
</header>

<body>
	<div id="contentpage">
		
	</div>
</body>
</html>