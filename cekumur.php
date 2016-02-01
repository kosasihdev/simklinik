<?php
include 'db.php';



$tanggal_lahir = $_POST['tanggal_lahir'];

$query = $db->query("SELECT TIMESTAMPDIFF(YEAR,'$tanggal_lahir', CURDATE()) AS umur ");

$data = mysqli_fetch_array($query);
echo $data['umur'];





?>