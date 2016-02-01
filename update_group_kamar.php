<?php 

include 'db.php';


$group_kamar =  $_POST['group_kamar'];

$id = $_POST['id'];


$query = $db->query("UPDATE group_bed SET nama='$group_kamar' WHERE id='$id' ");


if($query == TRUE)

{

	header('location:group_bed.php');

}



 ?>