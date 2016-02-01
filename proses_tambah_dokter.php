<?php 
include 'db.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nik = $_POST['nik'];
$tanggal_lahir = $_POST['tanggal_lahir'];


$cek = $db->query("SELECT * FROM dokter WHERE nik='$nik' ");

$jumlah = mysqli_num_rows($cek);

if($jumlah == 0)
{

$query = $db->query("INSERT INTO dokter (nama,alamat,nik,tanggal_lahir) VALUES ('$nama','$alamat','$nik','$tanggal_lahir') ");



header('location:tambah_dokter.php');



}


else{


	echo "<h1><center>NIK YANG ANDA MASUKAN SUDAH TERDAFTAR</center></h1>";


}






 ?>