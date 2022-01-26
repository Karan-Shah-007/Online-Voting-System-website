<?php
$conn=mysqli_connect("localhost","root","","voting");
$vote1;
$vote2;
$vote3;
$vote4;
$max;
$sql="SELECT Partyname,VoteCount FROM candidate";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
if($row['Partyname']=="BJP")
{
$vote1= $row['VoteCount'];
}
if($row['Partyname']=="Congress")
{
$vote2= $row['VoteCount'];
}
if($row['Partyname']=="AAP")
{
$vote3= $row['VoteCount'];
}
if($row['Partyname']=="ShivSena")
{
$vote4= $row['VoteCount'];
}
}
}


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

}
if($row['Partyname']=="Congress")
{
$name2= $row['Partyname'];

}
if($row['Partyname']=="AAP")
{
$name3= $row['Partyname'];

}
if($row['Partyname']=="ShivSena")
{
$name4= $row['Partyname'];

}
}
}
?>

<html> 
<head>  
<meta charset="utf-8">
<title> RESULTS </title>
<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap');
*
{
	margin : 0;
	padding :0;
	font-family : 'Roboto',sans-serif;
}
body
{
	display:flex;
	justify-content:center;
	align-items:center;
	min-height:100vh;
	background:"india.jpg";
	background-size:100% 100%;
}

.container
{
	position:static;
	width:1000px;
	display:flex;
	justify-content:space-around;
}
.container .card
{
	position:relative;
	width:250px;
	display:flex;
	justify-content:center;
	align-items:center;
	height:300px;
	border-radius:4px;
	text-align:center;
	transition:0.5s;
	overflow:hidden;
	cursor: pointer;
}
.card:before
{
	content:' ';
	position:absolute;
	top:0;
	left:-50%;
	width:100%;
	height:100%;
	background:rgba(255,255,255,0.03);
	pointer-events:none;
	z-index:1;
}
.percent
{
	position:relative;
	width:150px;
	height:150px;
	border-radius:50%;
	//box-shadow:inset 0 0 50px #000;
	z-index:1000;
	
}
.number
{
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	display:flex;
	justify-content:center;
	align-items:center;
	border-radius:50%;
	color:#999;
	
}
svg
{
	position:relative;
	width:150px;
	height:150px;	
}
svg circle
{
	width:100%;
	height:100%;
	fill:none;
	stroke:#D7DBDD;
	stroke-width:9;
	stroke-linecap:round;
	transform:translate(6px,5px);
}
svg circle:nth-child(2)
{
	stroke-dasharray:440;
	stroke-dashoffset:440;
}
.card:nth-child(1) svg circle:nth-child(2)
{
	stroke-dashoffset:50;
	//stroke:#03a9f4;
	padding: 50px 80px;
}
.card:nth-child(2) svg circle:nth-child(2)
{
	stroke-dashoffset:90;
	//stroke:#03a9f4;
}
.card:nth-child(3) svg circle:nth-child(2)
{
	stroke-dashoffset:80;
	//stroke:#03a9f4;
}
.card:nth-child(4) svg circle:nth-child(2)
{
	stroke-dashoffset:110;
	//stroke:#03a9f4;
}
img
{
	display:block;
	margin-left:auto;
	margin-right:auto;
}
.text
{
padding:4px;
}
</style>
</head>
<body background="india.jpg"> 
<center>
<br>
   <h1> CONGRATULATIONS !!!  <?php if(!empty($name1)){echo "BJP  ";}  if(!empty($name2)){echo "Congress  ";}  if(!empty($name3)){echo "AAP  ";}  if(!empty($name4)){echo "ShivSena  ";} ?></ h1> <br> <br> <br> <br> <br>
      <div class ="container">
	 <div class="card">
	  <div class="box">
	   <div class="percent">
	    <svg>
		     <circle cx="70" cy="70" r="70"> </circle>
			 <circle cx="70" cy="70" r="70"> </circle>
		</svg>
		<div class="number">
		    <h2><?php echo $vote1; ?></h2>
		</div>
	   </div>
	   <h4 class="text">BJP </h4> 
	    <img src="BJP.png" alt=""  width="90 pix" height="100 pix"  align="leftwards" hspace="50 pix" vspace="20 pix">
	  </div>
     </div>
	 <div class="card">
	  <div class="box">
	   <div class="percent">
	    <svg>
		     <circle cx="70" cy="70" r="70"> </circle>
			 <circle cx="70" cy="70" r="70"> </circle>
		</svg>
		<div class="number">
		    <h2><?php echo $vote2; ?></h2>
		</div>
	   </div>
	   <h4 class="text">Congress </h4>
	   <img src="CONG.png" alt=""  width="90 pix" height="100 pix"  align="center" vspace="20 pix">
	  </div>
     </div>
	 <div class="card">
	  <div class="box">
	   <div class="percent">
	    <svg>
		     <circle cx="70" cy="70" r="70"> </circle>
			 <circle cx="70" cy="70" r="70"> </circle>
		</svg>
		<div class="number">
		    <h2><?php echo $vote3; ?></h2>
		</div>
	   </div>
	   <h4 class="text">AAP</h4>
	   <img src="AAP.png" alt=""  width="90 pix" height="100 pix"  align="center" vspace="20 pix">
	  </div>
     </div>
	 <div class="card">
	  <div class="box">
	   <div class="percent">
	    <svg>
		     <circle cx="70" cy="70" r="70"> </circle>
			 <circle cx="70" cy="70" r="70"> </circle>
		</svg>
		<div class="number">
		    <h2><?php echo $vote4; ?></h2>
		</div>
	   </div>
	   <h4 class="text">Shiv Sena </h4>
	   <img src="SHIV.jpg" alt=""  width="90 pix" height="100 pix"  align="center" vspace="20 pix">
	  </div>
     </div>	
    </div>
</body>
</html>