<?php 
include('server.php');
include('error.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>ABOUT TUK</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			font-size: 20px;
		}		
		.af{
			text-align: center;
			background-color: Black;
			color: White;
		}
		nav{
			color: White;
		}
		li a{
			list-style-type: none;
		}
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
		<div class="navbar-header">	
			<a class="navbar-brand" href="#">TUK</a>
		</div>
			<ul class="navbar-nav">
				<li><a href="login.php">Login</a></li>
				<span class="sr-only"></span>
				<li class="active"><a href="home.php">About TUK</a></li>
				<span class="glyphicon glyphicon-home"></span>
			</ul>
		</div>
	</nav>	<br><br><br><br>
	<h1 style="text-align: center;color: red; font-family: Bauhaus 93;"><u>TECHNICAL UNIVERSITY OF KENYA</u></h1>	
<div class="container-fluid">
	<img src="school/school1.jpg" alt="learn" width="100%" height="500px">
</div>
	<a class="left carousel-controls" href="#selly" data-slide="prev"></a>
	<span class="glyphicon glyphicon-chevron-left"></span>
	<span class="sr-only"></span>
	<a class="right carousel-controls" href="#selly" data-slide="next"></a>
	<span class="glyphicon glyphicon-chevron-right"></span>
	<span class="sr-only"></span>
</div>
</div>
	<div class="row">
		<div class="col-sm-4">
		<img src="learn.jpg" width="250px" height="250px" class="img-circle">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-sm-4">
		<img src="dark.jpg" width="250px" height="250px" class="img-circle">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="col-sm-4">
		<img src="background.jpg" width="250px" height="250px" class="img-circle">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
	<h3>Need to login?Click <a href="login.php">here</a></h3>
	<footer class="af">
		&c;TUK 2018. All rights reserved. <br>
		Powered by: AES &r;
	</footer>
</body>
</html>