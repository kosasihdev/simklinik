<?php 
include 'db.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];




$query = $db->query("UPDATE penjamin SET nama='$nama' ,alamat='$alamat' ,no_telp = '$no_telp' ");

if ($query == TRUE)


{
	header('location:penjamin.php');
}



 ?>
