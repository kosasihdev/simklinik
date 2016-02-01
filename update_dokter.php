<?php 

include 'db.php';


$nama =  $_POST['nama'];
$alamat =  $_POST['alamat'];
$nik =  $_POST['nik'];
$tanggal_lahir =  $_POST['tanggal_lahir'];

$id = $_POST['id'];

$query = $db->query("UPDATE dokter SET nama='$nama', alamat='$alamat', nik='$nik', tanggal_lahir='$tanggal_lahir' WHERE id='$id' ");


if($query == TRUE)

{

	header('location:tambah_dokter.php');

}



 ?>