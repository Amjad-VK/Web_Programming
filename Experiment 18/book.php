<?php
//data base connection code
//$con = mysqli_connect('localhost','database_user','database_password','database');
$con = mysqli_connect('localhost', 'root' ,'', 'book');

//get the post records


$title = $_POST['title'];
$athr =$_POST['auther'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];


//database insert SQLcode
$sql = "INSERT INTO `book2` ( `accession_no`, `title`, `authors`, `edition`,`publisher`) VALUES ('0', '$title', '$athr', '$edition','$publisher')";
//insert in database
$rs = mysqli_query($con,$sql);

if($rs)
{
    echo "book inserted to library";
}


?>

