<?php 
include '../../config/db_handler.php';
 
// Define input variables
$id = $_GET['id'];
 
// Delete data in database using query
mysqli_query($db_handler,"delete from employee where id='$id'");

// Redirect back to homepage
header("location:../../index.php");
 
?>