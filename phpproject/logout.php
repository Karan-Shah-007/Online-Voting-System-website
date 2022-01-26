<?php
$conn=mysqli_connect("localhost","root","","voting");

if(isset($_POST['btn']))
{
header('location:newlogin.php');
}


?>