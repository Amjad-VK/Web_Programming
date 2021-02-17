<?php

$students=array("John","Ram","Arun","Adhil");

echo "---USING (print_r)FUNCTION----<br>";
print_r($students);

echo "<br>";

echo "-------USING asort()------ <br>";

asort($students);
foreach($students as $x)
{
    echo    " $x "; 
}



//using arsort
echo "<br>";
echo "------USING arort()------ <br>";

arsort($students);
foreach($students as $y)
{
    echo    " $y "; 
}



?>