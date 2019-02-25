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

$Donor_ID = $_POST['idno'];
$Email_id = $_POST['email'];
$Pass = $_POST['password'];
$First_Name = $_POST['fname'];
$Last_Name = $_POST['lname'];
$Address = $_POST['addr'];
$Phone_No = $_POST['phno'];



$sql = "INSERT INTO `help`.`donor` (`DID`, `Email_ID`, `Password`, `FName`, `LName`, `Address`, `Phone`) VALUES ('$Donor_ID', '$Email_id', '$Pass', '$First_Name', '$Last_Name', '$Address', '$Phone_No')";


if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
}
else
{
    echo 'inserted';
}

header("refresh:2; url=donate2.html");
?>