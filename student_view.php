<?php
    session_start();

 if(!isset($_SESSION['loginEmail']))
  {
      header('Location: logout_error.php');
      exit();
  }
?>
<html lang="en">

<head>
  <title>Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class = "navbar navbar-default">
    <div class = "container-fluid">
      <div class = "collapse navbar-collapse">
        <ul class = "nav navbar-nav">
          <li style="float:right"><a href="userportal.php">Sign In / Register</a></li>
        </ul>
      </div>
    </div>
  </nav>
</head>

<body>
  <center>
    <img src="./images/georgia-tech-logos.png" alt="Georgia Tech Logo" class="logo img-responsive">
    <hr>
    <div class="container">
    <div class="row">
        <div class="container hp">
          <div class="row">
            <div class="col-lg-6">
              <?php
                include("db_connection.php");
                $query = "SELECT * FROM student";
                $result = mysqli_query($dbc, $query);
                echo "<br>";
                echo '<table style="width:500px;">';
                while ($row = mysqli_fetch_assoc($result)){
                  echo "<tr><td>";
                  echo $row['first_name'];
                  echo "</td><td>";
                  echo $row['last_name'];
                  echo "</td><td>";
                  echo $row['gender'];
                  echo "</td><td>";
                  echo $row['level'];
                  echo "</td><td>";
                  echo $row['major'];
                  echo "</td><td>";
                  echo $row['contact'];
                  echo "</td><td>";
                  echo $row['email'];
                  echo "</td></tr>";
                }
                echo "</table>";
                mysqli_close($dbc);
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>
  </center>
</body>
</html>
