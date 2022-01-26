<?php
$conn=mysqli_connect("localhost","root","","voting");

$name1;
$name2;
$name3;
$name4;

$abc="SELECT Partyname FROM candidate WHERE VoteCount=(SELECT MAX(VoteCount) FROM candidate)";
$res=mysqli_query($conn,$abc);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
if($row['Partyname']=="BJP")
{
$name1= $row['Partyname'];
echo $name1;
}
if($row['Partyname']=="Congress")
{
$name2= $row['Partyname'];
echo $name2;
}
if($row['Partyname']=="AAP")
{
$name3= $row['Partyname'];
echo $name3;
}
if($row['Partyname']=="ShivSena")
{
$name4= $row['Partyname'];
echo $name4;
}
}
}
?>