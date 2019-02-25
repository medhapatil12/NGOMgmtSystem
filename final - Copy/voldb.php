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

$Volunteer_ID = $_POST['idno'];
$Email_id = $_POST['email'];

$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];

$Phone_No = $_POST['phno'];

$Address = $_POST['addr'];

$VFor = $_POST['volfor'];


$sql = "INSERT INTO `volunteer` (`VID`, `Email_ID`, `FName`, `LName`, `Phone`, `Address`, `VFor`) VALUES ('$Volunteer_ID', '$Email_id', '$First_Name', '$Last_Name', '$Phone_No', '$Address', '$VFor')";


if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
}
else
{
    echo 'VOLUNTEERED!';
    header("refresh:2; url=index.html");
}


?>