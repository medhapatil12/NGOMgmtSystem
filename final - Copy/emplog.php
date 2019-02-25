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
$email = $_POST['empemail'];
$empid = $_POST['empid'];


$result="SELECT Email_ID, EID FROM employee WHERE Email_ID='$email'AND EID='$empid'";

$run=mysqli_query($con,$result);
   
   if(mysqli_num_rows($run)==1)  
	{
		 echo "<script>window.open('emp.html','_self')</script>";  		
	}
  
    else  
    {  
      echo "<script>alert('username or password is incorrect!')</script>";  
	  echo"<script>window.open('index.html','_self')</script>";
    }  

?>