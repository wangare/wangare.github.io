<?php 
include('server.php');
include('errors.php');
$servername = "localhost";
$username = "root";
$pswd1 = "";
$mydatabase= "schoolPortal";
//create connection
$connection =new mysqli($servername,$username,$password,$mydatabase);
//check connection
if (!$connection) {
	# code...
	die("Connection failed".mysqli_connect_error());
}
	$username = "username";
	$password = "pswd1";
	$maths ="maths";
	$english ="english";
	$science = "science";
	$socialstudies = "socialstudies";
	$biology = "biology";
	$kiswahili = "kiswahili";
	$cre = "cre";

$sql = "INSERT INTO students(username, pswd1, maths, english, kiswahili, science, social studies, cre)VALUES('$username, $password, $maths', '$english','$kiswahili', '$science', '$socialstudies','$cre')";
if (mysqli_query($connection,$sql)){
	echo "marks inserted";
}else{
	echo "Error".$sql. "<br>" .mysqli_error($connection);
}
mysqli_close($connection);
 ?><!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			font-size: 15px;
			background-color: Green;
		}
		form{
			text-align: center;
			font-size: 25px;
		}
		li a{
			list-style-type: none;
		}
		ul{
			list-style-type: none;
		}
		input[type=text],[type=pswd]{
			width: 40%;
			border-radius: 6px;
			padding: 25px;
		}
		.af{
			text-align: center;
			background-color: Black;
			color: White;
		}
		nav{
			color: White;
			padding: 10px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
		<div class="navbar-header">	
			<a class="navbar-brand" href="#">TUK</a>
		</div>
			<ul class="navbar-nav">
				<li class="active"><a href="#">Login</a></li>
				<span class="glyphicon glyphicon-home"></span>
				<span class="sr-only"></span>
				<li><a href="#home.php">About TUK</a></li>
			</ul>
		</div>
	</nav>	
<h1 style="text-align: center;"><u>WELCOME ADMIN</u></h1><br>
<form action="transcriptrequest.php" method="POST">
	<label for="username">username:-</label>
	<input type="text" name="username" placeholder="enter username"><br>
	<h3><u><strong>Input marks</strong></u></h3>
	<label for="maths">Maths</label><br>
	<input type="text" name="maths" placeholder="enter maths marks"><br>
	<label for="english">English</label><br>
	<input type="text" name="english" placeholder="enter english marks"><br>
	<label for="kiswahili">Kiswahili</label><br>
	<input type="text" name="kiswahili" placeholder="enter kiswahili marks"><br>
	<label for="socialstudies">Social studies</label><br>
	<input type="text" name="socialstudies" placeholder="enter socialstudies marks"><br>
	<label for="CRE">CRE</label><br>
	<input type="text" name="CRE" placeholder="enter CRE marks"><br>
	<label for="chemistry">Chemistry</label><br>
	<input type="text" name="chemistry" placeholder="enter chemistry marks"><br>
	<label for="biology">Biology</label><br>
	<input type="text" name="biology" placeholder="enter biology marks"><br>
	<button type="submit" class="btn btn-info" name="submit_student">Submit</button>
	<button type="reset" class="btn btn-danger">Clear</button>
</form>
	<footer class="af">
		&c;TUK 2018. All rights reserved. <br>
		Powered by: AES &r;
	</footer>
</body>
</html>