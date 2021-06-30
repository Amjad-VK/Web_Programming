<html>
<head>
  <title>..........SEARCH FOR A BOOK........</title>

<style>
  table,th,td{
    border: 2px solid black;
    width: 1100px;
    background-color: white;
    length: 5px;
}
.btn{
   width: 25%;
   heigt: 5%;
   font-size:20px;
   padding: 0px;
}

</style>
</head>
<body bgcolor="grey">
<center><h2>SEARCH FOR BOOK</h2>
<form action="" method="POST">
  <input type="text" name="title" class= " btn" placeholder="Enter the title of book"/>
  <input type="submit" name="search" class="btn" value="search">
</form>
<table>
<tr>
  <th><center>accession no<center></th>
  <th>title</th>
  <th>authors</th>
  <th>edition</th>
  <th>publisher</th>
</tr><br>

<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'book');

if(isset($_POST['search']))
{
  $title = $_POST['title'];

  $query ="SELECT * FROM `book2` where title like '%{$title}%'";
  $query_run = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
  { 
    ?>
       <tr>
        <td><center><?php echo $row['accession_no']; ?></center></td>
        <td><center><?php echo $row['title']; ?></center></td>
        <td><center><?php echo $row['authors']; ?></center></td>
        <td><center><?php echo $row['edition']; ?></center></td>
        <td><center><?php echo $row['publisher']; ?></center></td>
        </tr>
     
    <?php
  }

}

?>  
</table>
</center>

</body>
</html>
