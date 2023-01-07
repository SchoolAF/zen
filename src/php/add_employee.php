<?php 
include '../../config/db_handler.php';

// Define input variables
$name = $_POST['name'];
$nik = $_POST['nik'];
$bdate = $_POST['bdate'];
$bplace = $_POST['bplace'];
$division = $_POST['division'];
$address = $_POST['address'];
 
// Add data to databse using query
mysqli_query($db_handler,"insert into employee values('','$name','$nik','$bdate','$bplace','$division','$address')");
 
// Redirect back to homepage
header("location:../../index.php");
 
?>