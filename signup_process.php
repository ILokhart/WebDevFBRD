<?php
include('db_connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$level = $_POST['lev'];
$major = $_POST['major'];
$contact = $_POST['ccode'];
$email = $_POST['email'];
$password = $_POST['pw'];
	
//if values are not empty, proceed to store them in the database
if(!empty($lname) && !empty($fname) && !empty($gender) && !empty($level) && !empty($major) && !empty($contact) && !empty($email) && !empty($password))
{
		mysqli_query($dbc, "INSERT INTO student (last_name, first_name, gender, level, major, contact, email, password)
		VALUES ('$lname', '$fname', '$gender', '$level',  '$major', '$contact', '$email', '$password')");
		
		echo "Thank you for registering!";	
		echo'<br><a href="userportal.php">Go Back To Main Page</a>';
		}
		
		else{		
			echo "ERROR: you left some values in blank!";	
		}
	}
	else{
	echo "<strong>Please complete the form...</strong>";
}
?>