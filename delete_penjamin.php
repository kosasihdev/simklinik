<?php 
include 'db.php';

$id = $_GET['id'];
$query = $db->query("DELETE FROM penjamin WHERE id='$id'");

if($query == TRUE)

{
header('location:penjamin.php');
}

 ?>