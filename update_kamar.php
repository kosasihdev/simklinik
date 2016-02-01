<?php 

include 'db.php';

$nama_kamar = $_POST['nama_kamar'];
$group_kamar =  $_POST['grup_kamar'];
$tarif = $_POST['tarif'];
$fasilitas = $_POST['fasilitas'];
$status = $_POST['status'];
$id = $_POST['id'];


$query = $db->query("UPDATE bed SET nama_kamar='$nama_kamar', group_bed='$group_kamar', tarif='$tarif', fasilitas='$fasilitas',status='$status' WHERE id='$id' ");


if($query == TRUE)

{

	header('location:tambah_kamar.php');

}



 ?>