<?php
$id=$_POST["ID"];

$host="localhost";
$dbname="id470";
$username="root";
$password="";

$conn=mysqli_connect($host,$username,$password,$dbname)

$sql="INSERT INTO id470(id) VALUES($id)";

?>


