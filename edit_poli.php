<?php 
include 'header.php';
include 'navbar.php';

include 'db.php';


$id = $_GET['id'];
$data = $db->query("SELECT * FROM poli WHERE id='$id' ");

$rows = $data->fetch_object();


 ?>

 <div class="container">

   <h4 class="modal-title">Form Edit Poli</h4>
       
<br>

   <form role="form" action="update_poli.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Poli </label>
  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $rows->nama; ?>">
</div>

<div class="form-group">
  <label for="sel1">Tarif</label>
  <input type="text" class="form-control" id="tarif" name="tarif" value="<?php echo $rows->tarif; ?>">
</div>


  <input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>">

<button type="submit" class="btn btn-info">Edit</button>
</form>
</div>

<?php include'footer.php';
?>
