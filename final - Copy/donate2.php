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

$Amount = $_POST['amt'];
$PanNo = $_POST['pno'];
$Did=$_POST['did'];


$sql = "INSERT INTO `help`.`donate` (`Amount`, `PanNo`,`DID`) VALUES ('$Amount', '$PanNo', '$Did')";


if(!mysqli_query($con,$sql))
{
    echo 'not inserted';
    header("refresh:2; url=donate2.html");
}
else
{
    echo 'inserted';
    header("refresh:2; url=admin.html");
}


?>