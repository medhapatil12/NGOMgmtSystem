<?php
session_start();
// Grab User submitted information

// Connect to the database
$con = mysqli_connect("localhost","root","");
// Make sure we connected successfully
if(!$con)
{
    die('Connection Failed'.mysqli_error());
}

// Select the database to use
mysqli_select_db($con,'help');
$user = $_POST['ademail'];
$pass = $_POST['adpass'];


$result="SELECT username,password FROM admin WHERE username='$user' and password='$pass'";

$run=mysqli_query($con,$result);
   
   if(mysqli_num_rows($run)==1)  
	{
		 echo "<script>window.open('admin.html','_self')</script>";  		
	}
  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	  echo"<script>window.open('index.html','_self')</script>";
    }  

?>