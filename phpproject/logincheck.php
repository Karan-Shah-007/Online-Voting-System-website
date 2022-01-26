<?php
session_start();
$_SESSION['sid']=$_POST['voterid'];
$_SESSION['sfname']=$_POST['firstname'];
$_SESSION['slname']=$_POST['lastname'];
$conn=mysqli_connect("localhost","root","","voting");
//if (!$conn)
//{
//echo "ERROR";
//}
//else
//{
//echo "connected";
//}
if(isset($_POST['submit']))
{
$vid=$_POST['voterid'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
//echo $vid;
//echo $fname;

$def="SELECT * FROM verification WHERE ID='$vid' ";
$res=mysqli_query($conn,$def);
$row=mysqli_fetch_array($res);
if($row['Login']==1)
{
echo "<script>alert('Already voted')</script>";
echo"<script>location.replace('newlogin.php')</script>";
}
else
{
$sql="SELECT * FROM registereduser WHERE VoterID='$vid' AND Firstname='$fname' AND Lastname='$lname'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if($vid=="" && $fname=="" && $lname="")
{
header('location:newlogin.php');
}
if($row['VoterID']==$vid && $row['Firstname']==$fname && $row['Lastname']==$lname)
{
header('Location:mobile.php');
}
else
{
echo "<script>alert('Check your credentials')</script>";
echo"<script>location.replace('newlogin.php')</script>";
}
}
}
?>