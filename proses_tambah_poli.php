<?php 
include 'db.php';



$nama = $_POST['nama'];
$tarif = $_POST['tarif'];


$cek = $db->query("SELECT FROM poli WHERE nama='$nama' ");


$jumlah = mysqli_num_rows($cek);

if($jumlah == 0)
{

$query = $db->query("INSERT INTO poli (nama,tarif) VALUES ('$nama','$tarif') ");



header('location:tambah_poli.php');



}


else{


	echo "<h1><center>NAMA POLI YANG ANDA MASUKAN SUDAH TERDAFTAR</center></h1>";


}









 ?>