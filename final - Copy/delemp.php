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


$Empid=$_POST['idno'];


$sql = "DELETE FROM `help`.`employee` WHERE `employee`.`EID` =$Empid";


if(!mysqli_query($con,$sql))
{
    echo 'not deleted';
    
}
else
{
    echo 'deleted';
    header("refresh:2; url=admin.html");
}


?>