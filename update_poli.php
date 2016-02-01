<?php 

include 'db.php';


$nama =  $_POST['nama'];
$tarif =  $_POST['tarif'];


$id = $_POST['id'];

$query = $db->query("UPDATE poli SET nama='$nama', tarif='$tarif' WHERE id='$id' ");


if($query == TRUE)

{

	header('location:tambah_poli.php');

}



 ?>