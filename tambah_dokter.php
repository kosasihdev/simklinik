<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';





$query = $db->query("SELECT * FROM dokter");

?>
<div class="container">
<h1>Dokter</h1>
<div class="table-responsive">  
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal"> Tambah Dokter </button>
<br>
<br>




  <table id="table-pelamar" class="table table-bordered">
 
    <thead>
      <tr>
        <th>Nama </th>
         <th>Alamat</th>
       <th>NIK</th>
         <th>Tanggal Lahir</th>
       
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
      <td>". $data['nik']."</td>
      <td>". $data['tanggal_lahir']."</td>
     

     
      <td><a href='edit_dokter.php?id=".$data['id']."'class='btn btn-warning'>Edit </a>
      </td>
<td><a href='delete_dokter.php?id=".$data['id']."'class='btn btn-danger'>Hapus </a>
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
          <h4 class="modal-title">Form Tambah Dokter</h4>
        </div>
        <div class="modal-body">

          <form role="form" action="proses_tambah_dokter.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Dokter</label>
  <input type="text" class="form-control" id="nama" name="nama">
</div>

<div class="form-group">
  <label for="sel1">Alamat Dokter</label>
  <textarea class="form-control" id="alamat" name="alamat"></textarea>
</div>


<div class="form-group">
  <label for="sel1">NIK</label>
  <input type="text" class="form-control" id="nik" name="nik">
</div>

<div class="form-group">
  <label for="sel1">Tanggal Lahir</label>
  <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
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
