<html>

<head>
  <title>Login/Registration Portal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <form action= '#' method='post'>
      <table class="portaltable table borderless" width=50% cellpadding="3px">
        <th colspan=2>Already a member? Login with your email and password.</th>
        <tr>
          <td class="lcol">Email: </td>
          <td><input type="textbox" name="loginEmail" /></td>
        </tr>
        <tr>
          <td class="lcol">Password: </td>
          <td><input type="password" name="loginPass" /></td>
        </tr>
        <tr>
          <th colspan=2><input type='submit' name= 'submit' value="Submit" align="center"/></th>
        </tr>
      </table>
    </form>
	  <?php
	  session_start();
include('db_connection.php');
if(isset($_POST['submit']))
{
 $email=$_POST['loginEmail'];
 $password=$_POST['loginPass'];

 if($email!=''&& $password!='')
 {
   $query=mysqli_query($dbc, "select * from login where email='".$email."' and pass='".$password."'");
   $res=mysqli_fetch_assoc($query);
    $_SESSION['loginEmail']=$email;
	 if($res)
   {
   
	   if($res["type"] == 0)
	   {
		   header('location:studentdash.php');
	   } 
			 
	   if($res["type"] == 1)
	   {
		   header('location:voldash.php');
	   }
			 
	   if ($res["type"] == 2)
	   {
			   header('location:admindash.php');
	   }	
	   }
 }
}	
	 
?>
    <hr/>
 
      <table class="portaltable table borderless" cellpadding="3px">
         <tr>
          <th>
            <p>To register, please select an option below:</p>
          </th>
        </tr>
        <tr>
          <td class="ccol">
			  <form action  = "studentreg.php" method = "get">
        <input type = "submit"  value = "Student" />
				  </form>    
          </td>
        </tr>
        <tr>
        <td class="ccol">
         <form action  = "volreg.php" method = "get">
        <input type = "submit"  value = "Volunteer" />
				  </form>  
        </td>
      </tr>
    </table>

  <hr/>
  <p class="copyright">&copy;Copyright 2016 All rights reserved.</p>

	</center>
</body>
</html>
