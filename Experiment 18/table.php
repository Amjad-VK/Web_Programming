<html>
<body align="center" bgcolor="lightyellow">
<h2>LIBRARY</h2>
<?php

$con=mysqli_connect('localhost','root','','book');

$sql="SELECT * FROM book2";

$result = mysqli_query($con,$sql);

echo "<table border=1 align=center>";
echo "<tr><th>accession_no</th><th>title</th><th>authors</th><th>edition</th><th>publisher</th></tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr><td>".$row["accession_no"]."</td>";
    echo "<td>".$row["title"]."</td>";
    echo "<td>".$row["authors"]."</td>";
    echo "<td>".$row["edition"]."</td>";
    echo "<td>".$row["publisher"]."</td></tr>";
}
echo "</table>";
?>
</body>
</html>