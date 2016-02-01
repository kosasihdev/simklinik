<?php 

include 'header.php';
include 'navbar.php';
include 'db.php';

$id = $_GET['id'];


$data = $db->query("SELECT * FROM group_bed WHERE id='$id' ");
$rows = $data->fetch_object();


?>

<div class="container">

   <h4 class="modal-title">Form Edit Group Kamar</h4>
       
<br>

   <form role="form" action="update_group_kamar.php" method="POST">

<div class="form-group">
  <label for="sel1">Group Kamar</label>
  <input type="text" class="form-control" id="group_kamar" name="group_kamar" value="<?php echo $rows->nama; ?>">
</div>





  <input type="hidden" id="id" name="id" value="<?php echo $rows->id; ?>">

<button type="submit" class="btn btn-info">Edit</button>
</form>
</div>

<?php include'footer.php';
?>


