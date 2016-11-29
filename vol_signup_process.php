<?php
error_reporting(0);
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$vavdate = $_POST['volPickupDate'];
$capacity = $_POST['passengers'];
$numtrips = $_POST['roundTrips'];
$comments = $_POST['comments'];

//if values are not empty, proceed to store them in the database
if(!empty($lname) && !empty($fname) && !empty($gender) && !empty($level) && !empty($major) && !empty($contact) && !empty($email) && !empty($password))
{
		  $email = $_POST['email'];
		  if(isset($email)){
			  $mysql_get_users = mysqli_query($dbc, "SELECT * FROM login where student_email='$email'");

			  $get_rows = mysqli_affected_rows($dbc);

			  if($get_rows >=1){
				  echo "ERROR: Email is already being used!";
				  echo'<br><a href="studentreg.php">Please try different email.</a>';
				  die();
			  }
			  else

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$begdate = $_POST['volStartHousingDate'];
$enddate = $_POST['volEndHousingDate'];
$acc = $_POST['studentsHoused'];
$commenth = $_POST['commentsh'];
$type = 0;

//if values are not empty, proceed to store them in the database
if(!empty($vavdate) && !empty($capactiy) && !empty($numtrips) && !empty($comments))
{
		mysqli_query($dbc, "INSERT INTO login (email, pass, type) VALUES ('$email','$password', '$type')");

		mysqli_query($dbc, "INSERT INTO vsticket (vavdate, capacity, numtrips, comments)
		VALUES ('$vavdate', '$capacity', '$numtrips', '$comments')");

		echo "Thank you for registering!";
		echo'<br><a href="userportal.php">Go Back To Main Page</a>';
		}

		else{
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
		}
	}
		  }
}
else{
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
}
}

if(!empty($begdate) && !empty($enddate) && !empty($acc) && !empty($commenth))
{
		mysqli_query($dbc, "INSERT INTO login (email, pass, type) VALUES ('$email','$password', '$type')");

		mysqli_query($dbc, "INSERT INTO vhticket (begdate, enddate, acc, commenth)
		VALUES ('$begdate', '$enddate', '$acc', '$commenth')");

		echo "Thank you for registering!";
		echo'<br><a href="userportal.php">Go Back To Main Page</a>';
		}

		else{
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
		}
	}
		  }
}
else{
			echo "ERROR: You left some values in blank!";
			echo'<br><a href="voldash.php">Please go back and fill in all blanks!</a>';
}
}
?>
