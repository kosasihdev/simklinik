<?php 

include 'db.php';

 $nama = $_POST['nama_kamar'];
$group = $_POST['grup_kamar'];
$tarif = $_POST['tarif'];
$fasilitas = $_POST['fasilitas'];
$status = $_POST['status'];

 

$cek = $db->query("SELECT * FROM bed WHERE nama='$nama' ");

$data = mysqli_num_rows($cek);



if ($data == 0 )
{

$query = $db->query("INSERT INTO bed (nama_kamar,group_bed,tarif,fasilitas,status) VALUES ('$nama','$group','$tarif','$fasilitas','$status') ");

header('location:tambah_kamar.php');


}

else {

echo "<h1><center>Nama alamat yang anda masukan sudah ada</center></h1>";


}




	?>