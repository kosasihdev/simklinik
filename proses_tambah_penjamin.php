<?php 
include 'db.php';

$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$no_telp = $_POST['no_telp'];


$cek = $db->query("SELECT * FROM penjamin WHERE nama='$nama' ");

$jumlah = mysqli_num_rows($cek);

if($jumlah == 0)
{

$query = $db->query("INSERT INTO penjamin (nama,alamat,no_telp) VALUES ('$nama','$alamat','$no_telp') ");



header('location:penjamin.php');



}


else{


	echo "<h1><center>NAMA PENJAMIN YANG ANDA MASUKAN SUDAH TERDAFTAR</center></h1>";


}






 ?>