<?php
session_start();
$idd=$_SESSION['sid'];
$conn=mysqli_connect("localhost","root","","voting");


if(isset($_POST['Submit']))
{
$mobile=$_POST['ph_no'];
$abc="SELECT Mobileno FROM registereduser WHERE VoterID='$idd' ";
$res=mysqli_query($conn,$abc);

if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
if($mobile=="")
{
header('location:otp.php');
}
if($row['Mobileno']==$mobile)
{
header('location:enterotp.php');
}
else
{
echo "<script>alert('Check your credentials')</script>";
echo"<script>location.replace('mobile.php')</script>";
}
}
}



}
?>