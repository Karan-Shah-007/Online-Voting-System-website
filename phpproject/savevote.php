<?php

$conn=mysqli_connect("localhost","root","","voting");
$button1=$_POST['BJP'];
$button2=$_POST['Congress'];
$button3=$_POST['AAP'];
$button4=$_POST['ShivSena'];
if(isset($button1))
{
$partyname="BJP";
$sql="UPDATE candidate SET VoteCount=VoteCount+1 WHERE Partyname='$partyname'";
if(mysqli_query($conn,$sql))
{
header('Location:a.php');
}
}
if(isset($button2))
{
$partyname2="Congress";
$sql="UPDATE candidate SET VoteCount=VoteCount+1 WHERE Partyname='$partyname2'";
if(mysqli_query($conn,$sql))
{
header('Location:a.php');
}
}
if(isset($button3))
{
$partyname="AAP";
$sql="UPDATE candidate SET VoteCount=VoteCount+1 WHERE Partyname='$partyname'";
if(mysqli_query($conn,$sql))
{
header('Location:a.php');
}
}
if(isset($button4))
{
$partyname="ShivSena";
$sql="UPDATE candidate SET VoteCount=VoteCount+1 WHERE Partyname='$partyname'";
if(mysqli_query($conn,$sql))
{
header('Location:a.php');
}
}

?>