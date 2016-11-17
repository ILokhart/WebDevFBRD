<?php
include('signup_process2.php');
?>
<html>

<head>
  <title>Volunteer Registration</title>
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
    <img src="./images/georgia-tech-logos.png" alt="Georgia Tech Logo" class="logo">
    <br>
    <hr>
    <br>
	  <form action="signup_process2.php" method="post">
    <div style="margin:auto;display:none;" name="pwmatch" id="pwmatch"><p style="color:#eeb211">Passwords do not match!</p></div>
      <table class="padtable">
        <tr>
          <td>
            <p>Last Name: </p>
          </td>
          <td>
            <input type="text" name="lname">
          </td>
        </tr>
        <tr>
          <td>
            <p>First Name: </p>
          </td>
          <td>
            <input type="text" name="fname">
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
              <p>Affiliation: </p>
            </td>
            <td>
              <p><input type="text" name="aff">
              </td>
            </tr>
            <tr>
              <td>
                <p>Cell Phone:</p>
              </td>
              <td>
                <p><input type="text" name="phone"></p>
              </td>
            </tr>
            <tr>
              <td>
                <p>Email: </p>
              </td>
              <td>
                <input type="text" name="email">
              </td>
            </tr>
            <tr>
              <td>
                <p>Password:</p>
              </td>
              <td>
              <input type="password" name="pw" id="pw">
              </td>
            </tr>
            <tr>
              <td>
                <p>Verify Password:</p>
              </td>
              <td>
                <input type="password" name="vpw" id="vpw">
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
