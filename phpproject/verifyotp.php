<?php
$conn=mysqli_connect("localhost","root","","voting");

$otp=1234;

if(isset($_POST['Submit']))
{
$enteredotp=$_POST['otp'];
if($enteredotp==$otp)
{
header('location:vote.php');
}
}

?>