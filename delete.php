<?php  
session_start();
include 'db.php';

$nim=$_GET['nim'];

$sql="DELETE from form where nim=$nim";
mysqli_query($conn, $sql);
header("Location:lihatdata.php");



?>