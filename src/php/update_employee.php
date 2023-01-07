<?php 
include '../../config/db_handler.php';
 
// Define input variables
$id = $_POST['id'];
$name = $_POST['name'];
$nik = $_POST['nik'];
$bdate = $_POST['bdate'];
$bplace = $_POST['bplace'];
$division = $_POST['division'];
$address = $_POST['address'];

// Update data to databse using query
mysqli_query($db_handler,"update employee set name='$name', nik='$nik', bdate='$bdate', bplace='$bplace', division='$division', address='$address' where id='$id'");

// Redirect back to homepage
header("location:../../index.php");
 
?>