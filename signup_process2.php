<?php
include('db_connection.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$lname = $_POST['lname'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$affiliation = $_POST['aff'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pw'];
	
//if values are not empty, proceed to store them in the database
if(!empty($lname) && !empty($fname) && !empty($gender) && !empty($affiliation) && !empty($phone) && !empty($email) && !empty($password))
{
		mysqli_query($dbc, "INSERT INTO volunteer (last_name, first_name, gender, affiliation, phone, email, password)
		VALUES ('$lname', '$fname', '$gender', '$affiliation',  '$phone', '$email', '$password')");
		
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