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

$Needy_ID = $_POST['idno'];
$Name = $_POST['name'];
$Phone = $_POST['phno'];
$Address = $_POST['addr'];





$sql = "INSERT INTO `help`.`needy` (`NID`, `Name`, `Phone`, `Address`) VALUES ('$Needy_ID', '$Name', '$Phone', '$Address')";


if(!mysqli_query($con,$sql))
{
    echo 'NOT INSERTED';
}
else
{
    echo 'INSERTED';
}

header("refresh:2; url=admin.html");
?>