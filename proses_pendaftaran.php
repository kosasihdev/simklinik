<?php 
include 'db.php';

$no_rm = $_POST['no_rm'];
$no_reg = $_POST['no_reg'];
$nama_lengkap = $_POST['nama_lengkap'];
$no_ktp = $_POST['no_ktp'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];
$alamat_sekarang = $_POST['alamat_sekarang'];
$alamat_ktp = $_POST['alamat_ktp'];
$no_telepon = $_POST['no_telepon'];
$nama_suamiortu = $_POST['nama_suamiortu'];
$pekerjaan_pasien = $_POST['pekerjaan_pasien'];
$nama_penanggungjawab = $_POST['nama_penanggungjawab'];
$hubungan_pasien = $_POST['hubungan_pasien'];
$no_telppenanggung = $_POST['no_telppenanggung'];
$alamat_penanggung = $_POST['alamat_penanggung'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_kawin = $_POST['status_kawin'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$agama = $_POST['agama'];
$penjamin = $_POST['penjamin'];
$gol_darah = $_POST['gol_darah'];
$poli = $_POST['poli'];
$dokter = $_POST['dokter'];
$kondisi = $_POST['kondisi'];
$rujukan = $_POST['rujukan'];
$asal_rujukan = $_POST['asal_rujukan'];


$no_urut = 1;


$query= $db->query("SELECT * FROM kunjungan_pasien_rawat_jalan WHERE poli='$poli' ");

$jumlah = mysqli_num_rows($query);

$data= mysqli_fetch_array($query);


if($jumlah > 0)

{

$no_urut_terakhir = $no_urut + $data['urut'];

$query2 = $db->query("INSERT INTO kunjungan_pasien_rawat_jalan (poli,urut,nama,jam,jenis,dokter,status,no_reg,no_rm,tanggal,kondisi,petugas,alamat,umur,gol_darah) VALUES ('$poli','$no_urut_terakhir','$nama_lengkap',now(),'$penjamin','$dokter','$status','$no_reg','$no_rm',now(),'$kondisi','admin','$alamat_ktp','$umur','$gol_darah')");
$query3 = $db->query("INSERT INTO pasien (no_rm,nama_lengkap,tempat_lahir,tanggal_lahir,umur,alamat_sekarang,alamat_ktp,no_hp,no_ktp,nama_suamiortu,pekerjaan_suamiortu,nama_penanggungjawab,hubungan_dengan_pasien,alamat_penanggung,no_hp_penanggung,jenis_kelamin,pendidikan_terakhir,status_kawin,agama,penjamin,gol_darah) VALUES('$no_rm','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$umur','$alamat_sekarang','$alamat_ktp','$no_telepon','$no_ktp','$nama_suamiortu','$pekerjaan_pasien','$nama_penanggungjawab','$hubungan_pasien','$alamat_penanggung','$no_telppenanggung','$jenis_kelamin','$pendidikan_terakhir','$status_kawin','$agama','$penjamin','$gol_darah')");


header('location:rawat_jalan_lama.php');



}


else {

$query4 = $db->query("INSERT INTO kunjungan_pasien_rawat_jalan (poli,urut,nama,jam,jenis,dokter,status,no_reg,no_rm,tanggal,kondisi,petugas,alamat,umur,gol_darah) VALUES ('$poli','$no_urut','$nama_lengkap',now(),'$penjamin','$dokter','$status','$no_reg','$no_rm',now(),'$kondisi','admin','$alamat_ktp','$umur','$gol_darah')");
$query5 = $db->query("INSERT INTO pasien (no_rm,nama_lengkap,tempat_lahir,tanggal_lahir,umur,alamat_sekarang,alamat_ktp,no_hp,no_ktp,nama_suamiortu,pekerjaan_suamiortu,nama_penanggungjawab,hubungan_dengan_pasien,alamat_penanggung,no_hp_penanggung,jenis_kelamin,pendidikan_terakhir,status_kawin,agama,penjamin,gol_darah) VALUES('$no_rm','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$umur','$alamat_sekarang','$alamat_ktp','$no_telepon','$no_ktp','$nama_suamiortu','$pekerjaan_pasien','$nama_penanggungjawab','$hubungan_pasien','$alamat_penanggung','$no_telppenanggung','$jenis_kelamin','$pendidikan_terakhir','$status_kawin','$agama','$penjamin','$gol_darah')");


header('location:rawat_jalan_lama.php');

}



 ?>