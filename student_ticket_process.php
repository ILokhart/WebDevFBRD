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
$dflightnum = $_POST['departNumber'];
$dflightname = $_POST['departName'];
$aflightnum	= $_POST['flightNumber'];
$aflightname = $_POST['flightName'];
$adate = $_POST['flightDate'];
$atime = $_POST['flightTime'];
$acomments = $_POST['comments'];
$shousing = $_POST['housingOption'];
$sdatestart = $_POST['housingStartDate'];
$sdateend = $_POST['housingEndDate'];
	
//if values are not empty, proceed to store them in the database
if(!empty($dflightnum) && !empty($dflightname) && !empty($aflightnum) && !empty($aflightname) && !empty($adate) && !empty($atime) && !empty($acomments) && !empty($shousing) && !empty($sdatestart) && !empty($sdateend))
{		
		 mysqli_query($dbc, "INSERT INTO sticket (dflightnum, dflightname, aflightnum, aflightname, adate, atime, email) VALUES ('$dflightnum','$dflightname', '$aflightnum', '$aflightname', '$adate', '$atime', '".$_SESSION['loginEmail']."')");
	
		mysqli_query($dbc, "INSERT INTO sticket2 (shousing, sdatestart, sdateend, acomments, email) VALUES ('$shousing', '$sdatestart', '$sdateend', '$acomments', '".$_SESSION['loginEmail']."')");
			  
		echo "Thank you for registering!";	
		echo'<br><a href="studentdash.php">Go Back To Dashboard</a>';
		}
		
		else{	
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="studentdash.php">Please go back and fill in all blanks!</a>';
		}
	}
?>