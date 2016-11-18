<?php
error_reporting(0);
session_start();
 if(!isset($_SESSION['loginEmail']))
  {
      header('Location: logout_error.php');
      exit();
  }
include('db_connection.php');
	
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$vavdate = $_POST['volPickupDate'];
$capacity = $_POST['passengers'];
$numtrips	= $_POST['roundTrips'];
$comments = $_POST['comments'];
	
//if values are not empty, proceed to store them in the database
if(!empty($vavdate) && !empty($capacity) && !empty($numtrips) && !empty($comments))
{		
		 mysqli_query($dbc, "INSERT INTO vsticket (vavdate, capacity, numtrips, comments, email) VALUES ('$vavdate','$capacity', '$numtrips', '$comments', '".$_SESSION['loginEmail']."')");
			  
		echo "Thank you for registering!";	
		echo'<br><a href="voldash.php">Go Back To Dashboard</a>';
		}
		
		else{	
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
		}
	}
?>