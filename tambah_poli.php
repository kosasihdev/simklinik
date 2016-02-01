<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';





$query = $db->query("SELECT * FROM poli");

?>
<div class="container">
<h1>Poli</h1>
<div class="table-responsive">  
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal"> Tambah Poli </button>
<br>
<br>




  <table id="table-pelamar" class="table table-bordered">
 
    <thead>
      <tr>
        <th>Nama </th>
         <th>Tarif</th>
      
       <th>Edit</th>
       <th>Hapus</th>

    </tr>
    </thead>
    <tbody>
    
   <?php while($data = mysqli_fetch_array($query))
      
      {
      echo "<tr>
      <td>". $data['nama']."</td>
      <td>". $data['tarif']."</td>
     

     
      <td><a href='edit_poli.php?id=".$data['id']."'class='btn btn-warning'>Edit </a>
      </td>
<td><a href='delete_poli.php?id=".$data['id']."'class='btn btn-danger'>Hapus </a>
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
          <h4 class="modal-title">Form Tambah Poli</h4>
        </div>
        <div class="modal-body">

          <form role="form" action="proses_tambah_poli.php" method="POST">

<div class="form-group">
  <label for="sel1">Nama Poli</label>
  <input type="text" class="form-control" id="nama" name="nama">
</div>

<div class="form-group">
  <label for="sel1">Tarif</label>
  <textarea class="form-control" id="tarif" name="tarif"></textarea>
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

  