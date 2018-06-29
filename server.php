<?php 
session_start();
	$username  = "";
	$pswd = "";
	$errors = array();
	$connect = mysqli_connect('localhost','root','','schoolportal');
	//register a user
	$username1 = 'name1';
	$pswd1 = 'pswd1';
	if(isset($_POST['submit_student'])){//the isset function is used to check whether a variable is set or not. The isset function returns false if testing variable contains a null value
		$username = mysqli_real_escape_string($connect, $_POST['name1']);
		$pswd = mysqli_real_escape_string($connect, $_POST['pswd1']);
	//form validation
	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if(empty($pswd)){
		array_push($errors,"Password required");
	}
}
//check if user exists
$check_user ="SELECT * FROM users WHERE name1 = '$username' OR pswd1 = '$pswd' LIMIT 1";
$result = mysqli_query($connect,$check_user);
$user = mysqli_fetch_assoc($result);
	if ($user) {
		if ($user['name1']===$username) {
			array_push($errors,"Username exists");
		}
	}
//Go ahead to register users if there are no errors
	if (count($errors)==0) {
		//md5 will be used for encryption before saving on database 
		$password = md5($pswd1);
		//query statement to insert into
		$qq = "INSERT INTO students(username,pswd,maths,english,kiswahili,science,socialstudies,cre) VALUES('$username','$pswd1','maths','english','kiswahili','science','socialstudies','cre')";
		mysqli_query($connect,$qq);
		$_SESSION['name1']= $username;		
		$_SESSION['success']= "Successful signup";

		}
	
//login for student
if (isset($_POST['login_student'])) {
	$username = mysqli_real_escape_string($connect,$_POST['name1']);
	$password = mysqli_real_escape_string($connect,$_POST['pswd1']);
	if (empty($username)) {
		array_push($errors,"Input username");
	}
	if (empty($password)) {
		array_push($errors,"Input password");
	}
	if (count($errors)==0) {
		$password = md5($pswd);
		$pt = "SELECT * FROM users WHERE  name = '$username1' pswd = '$password'";
		$result1 = mysqli_query($connect,$pt);
		if (mysqli_fetch_assoc($result1)==1){
			$_SESSION['name']= $username;
			$_SESSION['success']="Login successful";
			header('Location:index.php');
		}
		else{
			array_push($errors, 'Wrong password or username');
		}
	}
}
//login for admin
if (isset($_POST['login_admin'])) {
	$username = mysqli_real_escape_string($connect,$_POST['name']);
	$password = mysqli_real_escape_string($connect,$_POST['pswd']);
	if (empty($username)) {
		array_push($errors,"Input username");
	}
	if (empty($password)) {
		array_push($errors,"Input password");
	}
	if (count($errors)==0) {
		$password = md5($password);
		$pt = "SELECT * FROM users WHERE  name = '$username' pswd = '$password'";
		$result = mysqli_query($connect,$pt);
		if (mysqli_num_rows($result)==1){
			$_SESSION['name']= $username;
			$_SESSION['success']="Login successful";
		}
		else{
			array_push($errors, 'Wrong password or username');
		}
	}
}




// if (isset($_POST['login_admin'])) {
// 		$username =  mysqli_real_escape_string($connect, $_POST['username']);
// 		$pswd =  mysqli_real_escape_string($connect, $_POST['pswd']);
// 	//form validation
// 		switch ('name'==$username) {
// 			case 'school':
// 				echo "Login successfully";
// 				break;
			
// 			default:
// 				echo "Wrong username";
// 				break;
// 		}
// 		switch ($pswd) {
// 			case 'schoo123':
// 				echo "Login successfully";
// 				break;
			
// 			default:
// 				echo "Wrong password";
// 				break;
// 		}
// 	}
// $username='name';
// $password = 'pswd';
// $check_user = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
// 	$result = mysqli_query($connect,$check_user);
// 	if (isset($_POST['login_admin'])) {
// 		$username = mysqli_real_escape_string($connect, $_POST['name']);
// 		$pswd = mysqli_real_escape_string($connect, $_POST['pswd']);
// 		$qq = "SELECT * FROM users WHERE  name = '$username' pswd = '$password'";
// 		$result = mysqli_query($connect,$qq);
// 	}
// 	//form validation
// 	if (empty($username)) {
// 		array_push($errors,"Input username");
// 	}
// 	if (empty($pswd)) {
// 		array_push($errors,"Input password");
// 	}
// 	if (count($errors)==0) {
// 		$pswd = md5($pswd);
// 		$qq = "SELECT * FROM users WHERE  name = '$username' pswd = '$password'";
// 		$result = mysqli_query($connect,$qq);
// 	}

// //login
// if (isset($_POST['login_student'])) {
// 	$username = mysqli_real_escape_string($connect,$_POST['name']);
// 	$pswd = mysqli_real_escape_string($connect,$_POST['pswd']);
// 	if (empty($username)) {
// 		array_push($errors,"Input username");
// 	}
// 	if (empty($pswd)) {
// 		array_push($errors,"Input password");
// 	}
// 	if (count($errors)==0) {
// 		$pswd = md5($pswd);
// 		$pt = "SELECT * FROM users WHERE  name = '$username' pswd = '$pswd'";
// 		$result = mysqli_query($connect,$pt);
// 		if (mysqli_num_rows($result)==1){
// 			$_SESSION['name']= $username;
// 			$_SESSION['success']="Login successful";
// 			header('Location:index.php');
// 		}
// 		else{
// 			array_push($errors, 'Wrong password or username');
// 		}
// 	}
// }
	
 ?>