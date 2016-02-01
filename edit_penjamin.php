<?php 
include 'header.php';
include 'navbar.php';

include 'db.php';


$id = $_GET['id'];
$data = $db->query("SELECT * FROM penjamin WHERE id='$id' ");

$rows = $data->fetch_object();


 ?>

 <div class="container">

   <h4 class="modal-title">Form Edit Penjamin</h4>
       
<br>

   <form role="form" action="update_penjamin.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama </label>
  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $rows->nama; ?>">
</div>

<div class="form-group">
  <label for="sel1">Alamat</label>
  <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $rows->alamat; ?>">
</div>

<div class="form-group">
  <label for="sel1">No Telp</label>
  <input type="text" class="form-control" id="no_telp" name="no_telp" value="<?php echo $rows->no_telp; ?>">
</div>

  <input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>">

<button type="submit" class="btn btn-info">Edit</button>
</form>
</div>

<?php include'footer.php';
?>
