<?php include('server.php');?>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$grade = "";
$mydatabase = "schoolportal";
$connection = mysqli_connect($servername,$username,$grade,$mydatabase);
if (!$connect) {
    die('Could not connect:' . mysqli_error($connect));
}
mysqli_select_db($connect,"schoolportal");
$db = "SELECT * FROM student WHERE name = $username OR pswd = $password";
$result = mysqli_query($connection,$db);	
	function get_student_details(){
		global $mydatabase;
		$qq = "SELECT * FROM students";
		$result = mysqli_query($mydatabase, $qq);
		while ($row = mysqli_fetch_array($result)){
			$username = $row['username'];
			$maths = $row['maths'];
			$english = $row['english'];
			$kiswahili = $row['kiswahili'];
			$science = $row['science'];
			$socialstudies = $row['socialstudies'];
			$cre = $row['cre'];
			echo "<tr>
			<td>$username</td>
			<td>$maths</td>
			<td>$english</td>
			<td>$kiswahili</td>
			<td>$science</td>
			<td>$socialstudies</td>
			<td>$cre</td>";
		}
	}
	?>