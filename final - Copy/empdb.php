<?php
$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not Connected';
}

if(!mysqli_select_db($con,'help'))
{
    echo 'Not selected';
}


$Email_id = $_POST['email'];
$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$Address = $_POST['addr'];
$Phone_No = $_POST['phno'];


$sql = "INSERT INTO `help`.`employee` (`Email_ID`, `FName`, `LName`, `Address`, `Phone`) VALUES ('$Email_id', '$First_Name', '$Last_Name', '$Address', '$Phone_No')";


if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
}
else
{
    echo 'INSERTED';
}

header("refresh:2; url=admin.html");
?>