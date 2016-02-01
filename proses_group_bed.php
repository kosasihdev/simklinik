<?php 

include 'db.php';

 $nama = $_POST['group_kamar'];
 

$cek = $db->query("SELECT * FROM group_bed WHERE nama='$nama' ");

$data = mysqli_num_rows($cek);



if ($data == 0 )
{

$query = $db->query("INSERT INTO group_bed (nama) VALUES ('$nama') ");

header('location:group_bed.php');


}

else {

echo "<h1><center>Nama alamat yang anda masukan sudah ada</center></h1>";


}




	?>