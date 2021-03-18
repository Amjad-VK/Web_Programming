<html>
 <head>
  <title>form</title>
  <style>
#player{
 border:3px solid grey;
background-color:#bcf9ff;
box-shadow: 0 0 2rem 0 rgba(87, 92, 75, .6);
 border-radius: 9px;
}
.h{
  background-color: #0279a1;
}
.t{
  background-color: #9a9a9a;
}
.ph{
    color:#2fb45a;
}

      </style>
 </head>
<center>
<body bgcolor="#abf9ff">
<br>
<?php

$con=mysqli_connect('localhost','root','','contacts');
$sql="SELECT * FROM table_contacts";
$result=mysqli_query($con,$sql);
$t= "<h4> <h2>Contacts</h2></h4><table id='player' border='0px' width='50%' height='10%' cellpadding='8px'> <tr><th class='h'>Sl No</th><th class='h'>Name</th><th class='h'>Phone</th><th class='h'>E-Mail</th><th class='h'>Address</th></tr>";
echo "$t";
$i=0;
while($row=mysqli_fetch_array($result))
{
$i++;
echo " <tr><th>$i</th><th>$row[name]</th><th id='ph'>$row[phone]</th><th>$row[email]</th><th>$row[address]</th></tr>";

}
echo "</table>";
?>
</body>
</html>