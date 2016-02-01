<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';





$query = $db->query("SELECT * FROM bed");

?>
<div class="container">
<h1>BED / KAMAR</h1>
<div class="table-responsive">  
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal"> Tambah Kamar </button>
<br>
<br>




  <table id="table-pelamar" class="table table-bordered">
 
    <thead>
      <tr>
        <th>Nama Kamar </th>
         <th>Group Kamar</th>
       <th>Tarif</th>
         <th>Fasilitas</th>
         <th>Status</th>
       <th>Edit</th>
       <th>Hapus</th>

    </tr>
    </thead>
    <tbody>
    
   <?php while($data = mysqli_fetch_array($query))
      
      {
      echo "<tr>
      <td>". $data['nama_kamar']."</td>
      <td>". $data['group_bed']."</td>
      <td>". $data['tarif']."</td>
      <td>". $data['fasilitas']."</td>
      <td>". $data['status']."</td>

     
      <td><a href='edit_kamar.php?id=".$data['id']."'class='btn btn-warning'>Edit </a>
      </td>
<td><a href='delete_kamar.php?id=".$data['id']."'class='btn btn-danger'>Hapus </a>
      </td>
      </tr>";
      
      }
    ?>
  </tbody>
 </table>
    
    </div>

<!-- Modal -->
  <div class="modal fade" id="modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Form Tambah Kamar</h4>
        </div>
        <div class="modal-body">

          <form role="form" action="proses_bed.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Kamar</label>
  <input type="text" class="form-control" id="nama_kamar" name="nama_kamar">
</div>

<div class="form-group">
  <label for="sel1">Grup Kamar</label>
  <select class="form-control" id="grup_kamar" name="grup_kamar">
  
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
  <input type="text" class="form-control" id="tarif" name="tarif">
</div>

<div class="form-group">
  <label for="sel1">Fasilitas</label>
  <input type="text" class="form-control" id="fasilitas" name="fasilitas">
</div>


<div class="form-group">
  <label for="sel1">Status</label>
  <select class="form-control" id="status" name="status">
<option> Silakan Pilih</option>
<option value="OK">OK</option>
<option value="NO OK">NO OK</option>
  </select>
</div>

<button type="submit" class="btn btn-info">Tambah</button>
</form>




        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>





   </div>





<script type="text/javascript">

  $(function () {
  $("#table-pelamar").dataTable();
  });
  
  </script>
  <?php include 'footer.php';
   ?>
