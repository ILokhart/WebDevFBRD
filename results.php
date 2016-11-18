<?php
include('db_connection.php'); 
echo "<br>";
$sql = "SELECT * FROM student";
$result = $dbc->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
		 print "<table><h2> Query Results </h2>";
print "<tr align = 'center'>";
		 print "</tr>";
	print "</table>";
		 
         echo "<br> <strong>ID: </strong> ". $row["id"]. "<br> <strong>First Name: </strong>". $row["last_name"]. "<br><strong>Last Name: </strong>". $row["first_name"]. " <br><strong>Email: </strong>". $row["gender"]. " <br><strong>Phone: </strong>". $row["level"].  "<br>
		 <strong>Phone: </strong>". $row["major"].  "<br>
		 <strong>Phone: </strong>". $row["contact"].  "<br>
		 <strong>Phone: </strong>". $row["email"].  "<br>";
     }
} else {
     echo "0 results";
}

$dbc->close();
?>
<html>
  <head>
    <title> Access to the cars database </title>
  </head>
  <body>
	  <p><br>When you are done, please sign out!</p>
		  <form action  = "signedout.php" method = "get">
        <input type = "submit"  value = "Sign Out" />
      </form>    
  </body>
</html>