<?php
error_reporting(0);
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
	 $email = $_POST['email'];
		  if(isset($email)){
			  $mysql_get_users = mysqli_query($dbc, "SELECT * FROM login where volunteer_email='$email'");

			  $get_rows = mysqli_affected_rows($dbc);

			  if($get_rows >=1){
				  echo "ERROR: Email is already being used!";
				  echo'<br><a href="volreg.php">Please try different email.</a>';
				  die();
			  }
			  else
				  
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
				  
		mysqli_query($dbc, "INSERT INTO volunteer (last_name, first_name, gender, affiliation, phone)
		VALUES ('$lname', '$fname', '$gender', '$affiliation',  '$phone')");
		
		mysqli_query($dbc, "INSERT INTO login (volunteer_email, volunteer_pass)
		VALUES ('$email', '$password')");
		
		echo "Thank you for registering!";	
		echo'<br><a href="userportal.php">Go Back To Main Page</a>';
		}
		
		else{		
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="volreg.php">Please go back and fill in all blanks!</a>';
		}
	}
		  }
}
	else{
		echo "ERROR: You left some values in blank!";
			echo'<br><a href="volreg.php">Please go back and fill in all blanks!</a>';	
}
}
?>