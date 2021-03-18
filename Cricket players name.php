<html>
 <head>
  <title>form</title>
  <style>
#player{
 border:3px solid grey;
background-color:#bcf9ff;
box-shadow: 0 0 4rem 0 rgba(0, 0, 0, .2);
 border-radius: 9px;
}
.h{
  background-color: #9a9a9a;
}
.t{
  background-color: #9a9a9a;
}
      </style>
 </head>
<center>
<body bgcolor="#abf9ff">
<br>
<?php

$na=["Rohit sharma","shikar Dhawan","KL Rahul","Virat kohli","Rishab pant","Hardic pandya","R jadeja","R Ashwin","B kumar","J Bhumrha","m shami"];
$t= "<h4> <u>Cricket Team Players</u></h4><table id='player' border='0px' width='50%' height='10%'> <tr><th class='h'>Sl No</th><th class='h'>Name</th><th class='h'>Role</th></tr>";
echo "$t";
$role="Batsman";
for($i=0;$i<11;$i++)
{
$te=$i+1;
if($i==5)
   $role="All rounder";
if($i==8)
   $role="Bowler";
echo " <tr><th>$te</th><th>$na[$i]</th><th>$role</th></tr>";
}
echo "</table>";
?>
</body>
</html>