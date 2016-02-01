<?php
include 'db.php';


$id = $_GET['id'];
$query = $db->query("DELETE FROM dokter WHERE id='$id'");


if ($query == TRUE)

{
	header('location:tambah_dokter.php');
}

?>
