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
$begining_available_date = $_POST['volStartHousingDate'];
$ending_available_date = $_POST['volEndHousingDate'];
$accommodate_student_number	= $_POST['studentsHoused'];
$comment = $_POST['comments'];
	
//if values are not empty, proceed to store them in the database
if(!empty($begining_available_date) && !empty($ending_available_date) && !empty($accommodate_student_number) && !empty($comment))
{		
		 mysqli_query($dbc, "INSERT INTO vsticket2 (begining_available_date, ending_available_date, accommodate_student_number, comment, email) VALUES ('$begining_available_date','$ending_available_date', '$accommodate_student_number', '$comment', '".$_SESSION['loginEmail']."')");
			  
		echo "Thank you for registering!";	
		echo'<br><a href="voldash.php">Go Back To Dashboard</a>';
		}
		
		else{	
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
		}
	}
?>