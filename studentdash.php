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
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <nav class = "navbar navbar-default">
  	<div class = "container-fluid">
  		<div class = "collapse navbar-collapse">
        <ul class = "nav navbar-nav">
         <li style="float:right"><a href="signedout.php">Logout</a></li>
         <li style="float:right"><a href="index_student.php">Home</a></li>
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
	  <table class="portaltable borderless">
      <th class="ccol"><a href="">Click here to view your housing and pickup tickets.</a></th>
    </table>
	  <br>
    <hr/>

    <form name="studentTicketForm" action="">
      <table class="width borderless table">
        <th class="ccol" colspan=2>Need a lift from the Airport? Arrange for a ride:</th>
        <tr>
          <td class="lcol">Departure flight number: </td>
          <td><input type="text" name="departNumber"></td>
        </tr>
        <tr>
          <td class="lcol">Departure flight name: </td>
          <td><input type="text" name="departNumber"></td>
        </tr>
        <tr>
          <td class="lcol">Arrival flight number: </td>
          <td><input type="text" name="flightNumber"></td>
        </tr>
        <tr>
          <td class="lcol">Arrival airline name: </td>
          <td><input type="text" name="flightName"></td>
        </tr>
        <tr>
          <td class="lcol">Arival date:  </td>
          <td><input type="date" name="flightDate"></td>
        </tr>
        <tr>
          <td class="lcol">Arival time: </td>
          <td><input type="time" name="flightTime"></td>
        </tr>
        <th class="ccol" colspan=2>Do you also need temporary housing? (must select one)</th>
        <tr>
          <td class="ccol" colspan=2>
            <input type="radio" name="housingOption" value="yesHousing">Yes
            <input type="radio" name="housingOption" value="yesHousing">No
          </td>
        </tr>
        <tr>
          <td class="lcol">If yes...</td>
        </tr>
        <tr>
          <td class="lcol">Start date: </td>
          <td><input type="date" name="housingStartDate"></td>
        </tr>
        <tr>
          <td class="lcol">End date: </td>
          <td><input type="date" name="housingEndDate"></td>
        </tr>
        <tr>
          <td class="lcol">Comments: </td>
          <td><textarea rows="4" cols="40" name="comments" form="studentTicketForm"></textarea></td>
        </tr>
        <tr>
          <td class="ccol" colspan=2><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form>

    <hr/>

    <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>
	</center>
  </body>
  </html>

  <tr>
    <td class="lcol"></td>
    <td></td>
  </tr>
