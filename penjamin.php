<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';





$query = $db->query("SELECT * FROM penjamin");

?>
<div class="container">
<h1>Penjamin</h1>
<div class="table-responsive">  
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal"> Tambah Penjamin </button>
<br>
<br>




  <table id="table-pelamar" class="table table-bordered">
 
    <thead>
      <tr>
        <th>Nama </th>
        
       <th>Alamat</th>
        <th>No Telp</th>
       <th>Edit</th>
       <th>Hapus</th>

    </tr>
    </thead>
    <tbody>
    
   <?php while($data = mysqli_fetch_array($query))
      
      {
      echo "<tr>
      <td>". $data['nama']."</td>
           

      <td>". $data['alamat']."</td>
      <td>". $data['no_telp']."</td>

     
      <td><a href='edit_penjamin.php?id=".$data['id']."'class='btn btn-warning'>Edit </a>
      </td>
<td><a href='delete_penjamin.php?id=".$data['id']."'class='btn btn-danger'>Hapus </a>
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
          <h4 class="modal-title">Form Tambah Penjamin</h4>
        </div>
        <div class="modal-body">

          <form role="form" action="proses_tambah_penjamin.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Penjamin</label>
  <input type="text" class="form-control" id="nama" name="nama">
</div>

<div class="form-group">
  <label for="sel1">Alamat Penjamin</label>
  <textarea class="form-control" id="alamat" name="alamat"></textarea>
</div>

<div class="form-group">
  <label for="sel1">No Telpon</label>
  <textarea class="form-control" id="no_telp" name="no_telp"></textarea>
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

   <script type="text/javascript">
 $(function() {
   
$( "#tanggal_lahir" ).datepicker({
  dateFormat: "yy-mm-dd"
});
});



</script>
