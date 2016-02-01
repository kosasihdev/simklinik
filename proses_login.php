<?php 
include 'db.php';




$username = $_POST['username'];
$password = $_POST['password'];

$cek=$db->query("SELECT * FROM user WHERE username='$username' AND password='$password' ");


$data=mysqli_num_rows($cek);


if($data > 0 )

{
	header('location:home.php');

}

else
{
	echo "<h1><center>Username dan Password anda salah</center></h1>";

}





 ?>