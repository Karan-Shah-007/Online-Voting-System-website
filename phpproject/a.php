<?php
session_start();
$id=$_SESSION['sid'];
$conn=mysqli_connect("localhost","root","","voting");


$abc= "UPDATE verification SET Login=Login+1 WHERE ID='$id'";

if(mysqli_query($conn,$abc))
{
header('Location:sucessfullyvoted.php');
}
else
{
echo "not".mysqli_connect_error();
}

?>