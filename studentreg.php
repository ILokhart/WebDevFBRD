<?php
	include('db_connection.php');
	include('signup_process.php');
	?>

<html>

<head>
  <title>Student Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./js/FormValidator.js"></script>
  <nav class = "navbar navbar-default">
  	<div class = "container-fluid">
  		<div class = "collapse navbar-collapse">
  		<ul class = "nav navbar-nav">
  			<li style="float:right"><a href="index.php">Home</a></li>
  		</ul>
  		</div>
  	</div>
  </nav>
</head>

<body>
  <center>
    <img src="./images/georgia-tech-logos.png" alt="Georgia Tech Logo" class="logo img-responsive">
    <br>
    <hr>
    <br>
<<<<<<< HEAD
    <form action="signup_process.php" method="post">
=======

    <form action="signup_process.php" method="post">

>>>>>>> 51502ec9da701073e961d379f17d56365943e2dd
      <div style="margin:auto;display:none;" name="pwmatch" id="pwmatch"><p style="color:#eeb211">Passwords do not match!</p></div>
    <table class="padtable">
      <tr>
        <td>
          <p>Last Name: </p>
        </td>
        <td>
          <input type="text" name="lname" placeholder="Last Name">
        </td>
      </tr>
      <tr>
        <td>
          <p>First Name: </p>
        </td>
        <td>
          <input type="text" name="fname" placeholder="First Name">
        </td>
      </tr>
      <tr>
        <td>
          <p>Gender: </p>
        </td>
        <td>
          <p><input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other</p>
        </td>
      </tr>
      <tr>
        <td>
          <p>Level: </p>
        </td>
        <td>
          <p><input type="radio" name="lev" value="ug"> Undergrad<br>
          <input type="radio" name="lev" value="grad"> Graduate<br>
        <input type="radio" name="lev" value="vs"> Visiting Scholar</p>
        </td>
      </tr>
      <tr>
        <td>
          <p>Major: </p>
        </td>
        <td>
          <input type="text" name="major" placeholder="Major">
        </td>
      </tr>
      <tr>
        <td>
          <p>Emergency Contact:</p>
        </td>
        <td>
<<<<<<< HEAD
          <input type="text" name="ccode" maxlength="11" placeholder="Format ###########">
        </td>
=======
          <input type="text" name="econtact" maxlength="11" placeholder="Format: ###########">
>>>>>>> 51502ec9da701073e961d379f17d56365943e2dd
      </tr>
      <tr>
        <td>
          <p>Email: </p>
        </td>
        <td>
<<<<<<< HEAD
          <input type="text" name="email" placeholder="E-mail">
=======
          <input type="text" name="email" placeholder="E-Mail">
>>>>>>> 51502ec9da701073e961d379f17d56365943e2dd
        </td>
      </tr>
      <tr>
        <td>
          <p>Password:</p>
        </td>
        <td>
          <input type="password" name="pw" id="pw" placeholder="Password">
        </td>
      </tr>
      <tr>
        <td>
          <p>Verify Password:</p>
        </td>
        <td>
          <input type="password" name="vpw" id="vpw" placeholder="Verify Password">
        </td>
      </tr>
      <tr>
        <td>
        </td>
        <td>
          <input type="submit" value="Submit">
		  </td>
    </table>
  </form>
  <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>
  <script src="./js/FormValidatorr.js"></script>
	</center>
</body>
</html>
