<?php
include 'db.php';


$id = $_GET['id'];
$query = $db->query("DELETE FROM poli WHERE id='$id'");


if ($query == TRUE)

{
	header('location:tambah_poli.php');
}

?>
