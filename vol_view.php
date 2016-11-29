<?php
		session_start();

 if(!isset($_SESSION['loginEmail']))
  {
      header('Location: logout_error.php');
      exit();
  }
?>

<html>

<head>
  <title>Administrator Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="./css/admin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class = "navbar navbar-default">
  	<div class = "container-fluid">
  		<div class = "collapse navbar-collapse" style="float:right;">
        <ul class = "nav navbar-nav">
         <li style="float:right"><a href="signedout.php">Logout</a></li>
         <li style="float:right"><a href="index_admin.php">Home</a></li>
       </ul>
     </div>
   </div>
 </nav>
</head>

<body>
  <center>
    <img src="./images/georgia-tech-logos.png" alt="Georgia Tech Logo" class="logo img-responsive">
    <br>
	  	  <ul>
  <li><a><strong>Welcome <?php echo $_SESSION['loginEmail']; ?>!</strong></a></li>
</ul>
	  <br>
    <hr>
    <nav class="navbar navbar-default">
      <div class="container-fluid center">
        <div class = "collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registered Users<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student_view.php">Student List</a></li>
                <li><a href="vol_view.php">Volunteer List</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Requests/Availability<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="student_request.php">Student Requests</a></li>
                <li><a href="student_housing.php">Student Housing Requests</a></li>
                <li><a href="volunteer_pickup.php">Volunteer Pickup Availability</a></li>
                <li><a href="volunteer_housing.php">Volunteer Housing Availability</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Matchmaking/Scheduling<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Pickup Schedule</a></li>
                <li><a href="#">Edit Housing Schedule</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<center>
              <?php
                include("db_connection.php");
                $query = "SELECT * FROM volunteer";
                $result = mysqli_query($dbc, $query);
                echo "<br>";
								echo '<table class="results">';
								echo "<tr><th><u>First Name</th><th><u>Last Name</th><th><u>Gender</th><th><u>Affilitation</th><th><u>Phone</th><th><u>E-mail</u></th></tr>";
                while ($row = mysqli_fetch_assoc($result)){
                  echo "<tr><td>";
                  echo $row['first_name'];
                  echo "</td><td>";
                  echo $row['last_name'];
                  echo "</td><td>";
                  echo $row['gender'];
                  echo "</td><td>";
                  echo $row['affiliation'];
                  echo "</td><td>";
                  echo $row['phone'];
                  echo "</td><td>";
                  echo $row['email'];
                  echo "</td></tr>";
                }
                echo "</table>";
                mysqli_close($dbc);
              ?>
</center>
	  <br>

    <p align=center><font color=#eeb211> Thank you for using AdminDash, <?php echo $_SESSION['loginEmail']; ?>.</font></p>
    <hr/>
    <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>
	</center>
  </body>
  </html>

  <tr>
    <td class="lcol"></td>
    <td></td>
  </tr>
