<?php
include 'db.php';


$id = $_GET['id'];
$query = $db->query("DELETE FROM bed WHERE id='$id'");


if ($query == TRUE)

{
	header('location:tambah_kamar.php');
}

?>