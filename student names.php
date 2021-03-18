<?php
echo "<h3>";
$a="<h3 style='color:red'>";
$b="<h3 style='color:green'>";
$c="</h3>";
$name=["appu","willium","abhinand","kumar","abhiram"];
$t=$name;
echo "$a Printing using print_r $c";
print_r($name);
echo "<br>";
asort($name);
echo "$a Sorting using asort() $c";
foreach ($name as $i)
  echo ", ".$i;
echo "<br>";
arsort($name);
echo "$a Sorting using arsort() $c";
foreach ($name as $i)
  echo ", ".$i;
echo "</h3>";
?>