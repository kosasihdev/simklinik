<?php
include 'db.php';


$id = $_GET['id'];
$query = $db->query("DELETE FROM group_bed WHERE id='$id'");


if ($query == TRUE)

{
	header('location:group_bed.php');
}

?>