<?php include('server.php');
include('errors.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			font-size: 25px;
		}
		form{
			text-align: center;
			font-size: 35px;
		}
		li a{
			list-style-type: none;
		}
		ul{
			list-style-type: none;
		}
		input[type=text],[type=pswd]{
			width: 100%;
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
		.tab {
  			display: none;
		}
		.step.active {
 			 opacity: 1;
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
				<li><a href="home.php">About TUK</a></li>
			</ul>
		</div>
	</nav>	
		<div class="row">
			<div class="col-sm-6">
				<form action="admin.php" method="POST" class="well">
					<h1><u>ADMIN LOGIN</u></h1>
					USERNAME:<br>
					<input type="text" name="name" value="" placeholder="Enter your username"><br><br>
					PASSWORD:<br>
					<input type="pswd" name="pswd" value="FakePSWD" placeholder="Enter your password" id="MyInput"><br><br><input type="checkbox" onclick="myFunction()">Show Password <br>

	<script>
		function myFunction() {
    	var x = document.getElementById("MyInput");
    	if (x.type === "password") {
        x.type = "text";
    	} else {
        x.type = "password";
    	}
	}
	</script><br>
					<button type="submit" class="btn btn-success" name="login_admin">LOGIN</button>
				</form>
			</div>
			<div class="col-sm-6">
				<form action="transcriptrequest.php" method="POST" class="well">
				<h1><u>STUDENT LOGIN</u></h1>
				<div class="step.active">
					<span class="glyphicon glyphicon-user"></span>
					<span class="sr-only"></span>
					USERNAME:<br>
					<input type="text" name="name1" value="" placeholder="Your admission number is your userrname"><?php echo "$username"; ?><br><br>
					<span class="glyphicon glyphicon-pencil"></span>
					<span class="sr-only"></span>
					PASSWORD:<br>
					<input type="pswd" name="pswd1" value="FakePSWD" placeholder="Your id is your password" id="myInput"><br><br><input type="checkbox" onclick="myFunction()">Show Password <br>
				</div>
				<div class="tab">Hostel booking
					<input type="checkbox" name="St.Claires Hostel" onclick="myFunction()">St.Claires Hostel <br>
					<input type="checkbox" name="St.Mary's Hostel" onclick="myFunction()">St.Mary's Hostel <br>
					<input type="checkbox" name="St.Hellena's Hostel" onclick="myFunction()">St.Hellena's Hostel <br>
					<input type="checkbox" name="St.Marias Hostel" onclick="myFunction()">St.Marias Hostel <br>
				</div>

	<script>
		function myFunction() {
    	var x = document.getElementById("myInput");
    	if (x.type === "password") {
        x.type = "text";
    	} else {
        x.type = "password";
    	}
	}
	</script>
					<button type="submit" class="btn btn-success" name="login_student"><a href="transcriptrequest.php"></a>LOGIN</button>
				</form>
			</div>
		</div>
		</div>
		</div>
	<footer class="af">
		&copy; TUK 2018. All rights reserved. <br>
		Powered by: AES &reg;
	</footer>
</body>
</html>