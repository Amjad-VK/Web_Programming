<?php

echo "<center><h3><a href='?insert=1'>insert</a><br><a href='?search=1'>search</a><br></h3>";

if(isset($_GET['insert']))
{
echo "
<form action='' method='POST'>
<table>
<tr><td>accession no:</td>
<td><input type='number' name='no' required=''></td></tr>

<tr><td>title</td>
<td><input type='text' name='title' required=''></td></tr>

<tr><td> author</td>
<td><input type='text' name='author' required=''></td></tr>

<tr><td>edition</td>
<td><input type='number' name='edition' required=''></td></tr>

<tr><td>publisher</td>
<td><input type='text' name='pub' required=''></td></tr>

<tr><td colspan='2'><input type='submit' name='submit1'></td></tr>
</table>
</form>";

if(isset($_POST['submit1']))
{
$no=$_POST['no'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$pub=$_POST['pub'];
$con=mysqli_connect('localhost','root','','books');
$sql="INSERT INTO book VALUES(0,$no,'$title','$author','$edition','$pub')";
$result=mysqli_query($con,$sql);
echo "<script>
    alert('Inserted Successfully.........');
  </script> ";
}

}

if(isset($_GET['search']))
{
echo "
<h2><u>search book</u></h2><br>
<form action='' method='POST'>
<table>
<tr>
<td><input type='text' name='titl' required=''></td>
<td><input type='submit' name='submit2'>
</tr>

</table>
</form>";

if(isset($_POST['submit2']))
{
$title=$_POST['titl'];
$con=mysqli_connect('localhost','root','','books');
$sql="SELECT * FROM book WHERE title='$title'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if(mysqli_num_rows($result)==0)
    {
echo "<script>
    alert('No book found with title $title.........');
  </script> ";
}
else{
echo "
<table border='1px' bgcolor='#bfffff' >
<tr><td>accession no:</td>
<td>$row[no]</td></tr>

<tr><td>title</td>
<td>$row[title]</td></tr>

<tr><td> author</td>
<td>$row[author]</td></tr>

<tr><td>edition</td>
<td>$row[edition]</td></tr>

<tr><td>publisher</td>
<td>$row[publisher]</td></tr>


</table>
";
}
}
}


?>