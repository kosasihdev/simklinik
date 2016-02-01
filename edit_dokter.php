<?php 

include 'header.php';
include 'navbar.php';
include 'db.php';

$id = $_GET['id'];


$data = $db->query("SELECT * FROM dokter WHERE id='$id' ");
$rows = $data->fetch_object();


?>

<div class="container">

   <h4 class="modal-title">Form Edit Dokter</h4>
       
<br>

   <form role="form" action="update_dokter.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Dokter</label>
  <input type="text" class="form-control" id="nama_dokter" name="nama" value="<?php echo $rows->nama; ?>">
</div>

<div class="form-group">
  <label for="sel1">Alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $rows->alamat; ?>">
</div>

<div class="form-group">
  <label for="sel1">NIK</label>
  <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $rows->nik; ?>">
</div>

<div class="form-group">
  <label for="sel1">Tangal Lahir</label>
  <input type="text" class="form-control" id="group_kamar" name="tanggal_lahir" value="<?php echo $rows->tanggal_lahir; ?>">
</div>

  <input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>">

<button type="submit" class="btn btn-info">Edit</button>
</form>
</div>

<?php include'footer.php';
?>


