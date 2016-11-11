	  <?php
session_start();
include('db_connection.php');
if(isset($_POST['submit']))
{
 $email=$_POST['loginEmail'];
 $password=$_POST['loginPass'];
 if($email!=''&&$password!='')
 {
   $query=mysqli_query($dbc, "select * from student where email='".$email."' and password='".$password."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['loginEmail']=$email;
    header('location:studentdash.php');
   }
 }
	else
		 {
   $query=mysqli_query($dbc, "select * from volunteer where email='".$email."' and password='".$password."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['loginEmail']=$email;
    header('location:voldash.php');
   }
 }
}