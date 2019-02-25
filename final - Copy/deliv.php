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

$Delivery_ID = $_POST['idno'];
$Delivery_Date = $_POST['date'];
$Address = $_POST['addr'];
$Needy_ID = $_POST['nid'];
$Employee_ID = $_POST['eid'];



$sql = "INSERT INTO `help`.`delivery` (`DelID`, `Date`, `Address`, `NID`, `EID`) VALUES ('$Delivery_ID', '$Delivery_Date', '$Address', '$Needy_ID', '$Employee_ID')";


if(!mysqli_query($con,$sql))
{
    echo 'NOT INSERTED';
}
else
{
    echo 'INSERTED';
}

header("refresh:2; url=emp.html");
?>