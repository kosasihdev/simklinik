<?php 
include 'db.php';

$no_rm = $_POST['no_rm'];
$no_reg = $_POST['no_reg'];
$nama_lengkap =  $_POST['nama_lengkap'];
echo $umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kondisi = $_POST['kondisi'];
$penjamin = $_POST['penjamin'];
$dokter = $_POST['dokter'];
$rujukan = $_POST['rujukan'];
$asal_rujukan = $_POST['asal_rujukan'];
$poli = $_POST['poli'];

$no_urut = 1;

$query= $db->query("SELECT * FROM kunjungan_pasien_rawat_jalan WHERE poli='$poli' ORDER BY urut DESC LIMIT 1");

$jumlah = mysqli_num_rows($query);

$data= mysqli_fetch_array($query);

if($jumlah > 0)

{

$no_urut_terakhir = $no_urut + $data['urut'];

$query1 = $db->query("INSERT INTO kunjungan_pasien_rawat_jalan (poli,urut,nama,jam,jenis,dokter,status,no_reg,no_rm,tanggal,kondisi,petugas,alamat,umurku,jenis_kelamin) VALUES ('$poli','$no_urut_terakhir','$nama_lengkap',now(),'$penjamin','$dokter','menunggu','$no_reg','$no_rm',now(),'$kondisi','admin','$alamat','$umur','$jenis_kelamin')");





}


else {



$query2 = $db->query("INSERT INTO kunjungan_pasien_rawat_jalan (poli,urut,nama,jam,jenis,dokter,status,no_reg,no_rm,tanggal,kondisi,petugas,alamat,umurku,jenis_kelamin) VALUES ('$poli','$no_urut','$nama_lengkap',now(),'$penjamin','$dokter','menunggu','$no_reg','$no_rm',now(),'$kondisi','admin','$alamat','$umur','$jenis_kelamin')");


}



 ?>