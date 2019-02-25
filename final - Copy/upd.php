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



$Newdate=$_POST['newdate'];
$Delid=$_POST['idno'];

$sql = "UPDATE `help`.`delivery` SET  `Date`='$Newdate' WHERE  `delivery`.`DelID`='$Delid'";


if(!mysqli_query($con,$sql))
{
    echo 'Not Updated';
    header("refresh:2; url=Upd.html");
}
else
{
    echo 'Updated';
    header("refresh:2; url=emp.html");
}


?>