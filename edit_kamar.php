<?php 

include 'header.php';
include 'navbar.php';
include 'db.php';

$id = $_GET['id'];


$data = $db->query("SELECT * FROM bed WHERE id='$id' ");
$rows = $data->fetch_object();


?>

<div class="container">

   <h4 class="modal-title">Form Edit Kamar</h4>
       
<br>


          <form role="form" action="update_kamar.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Kamar</label>
  <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" value="<?php echo $rows->nama_kamar; ?>">
</div>

<div class="form-group">
  <label for="sel1">Grup Kamar</label>
  <select class="form-control" id="grup_kamar" name="grup_kamar" value="<?php echo $rows->group_bed; ?>">
  
  <?php 
  $query = $db->query("SELECT * FROM group_bed");
 
while ( $data = mysqli_fetch_array($query)) {
  echo "<option value='".$data['nama']."'>".$data['nama']."</option>";
}
   ?>
  </select>
</div>


<div class="form-group">
  <label for="sel1">Tarif</label>
  <input type="text" class="form-control" id="tarif" name="tarif" value="<?php echo $rows->tarif; ?>">
</div>

<div class="form-group">
  <label for="sel1">Fasilitas</label>
  <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?php echo $rows->fasilitas; ?>">
</div>


<div class="form-group">
  <label for="sel1">Status</label>
  <select class="form-control" id="status" name="status">
<option> Silakan Pilih</option>
<option value="OK">OK</option>
<option value="NO OK">NO OK</option>
  </select>
</div>



  <input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>">

<button type="submit" class="btn btn-info">Edit</button>
</form>
</div>

<?php include'footer.php';
?>


