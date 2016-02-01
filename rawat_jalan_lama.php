<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';
$no_reg = $db->query("SELECT * FROM kunjungan_pasien_rawat_jalan ORDER BY id DESC limit 1");



$tampil2= mysqli_fetch_array($no_reg);



$no_reg_terakhir =1 + $tampil2['id'];
?>



<div class="container">
  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Pencarian Pasien </h4>
      </div>
      <div class="modal-body">
        <table id="siswa" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No RM</th>
                                    <th>Nama Lengkap</th>
           <th>Umur</th>
            <th>Jenis Kelamin</th>
           <th>Alamat</th>
           <th>No Telp/HP</th>
          
           

                  
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //Data mentah yang ditampilkan ke tabel    
                               include 'db.php';
                               $hasil = $db->query("SELECT * FROM pasien ");
                            
                                while ($data =  $hasil->fetch_assoc()) {
                                    ?>
                                    <tr class="pilih" data-no="<?php echo $data['no_rm']; ?>" data-nama="<?php echo $data['nama_lengkap']; ?>" data-umur="<?php echo $data['umur']; ?>" data-alamat="<?php echo $data['alamat_sekarang']; ?>" data-jenis-kelamin="<?php echo $data['jenis_kelamin']; ?>" >
                                        <td><?php echo $data['no_rm']; ?></td>
                                        <td><?php echo $data['nama_lengkap']; ?></td>
                                         <td><?php echo $data['umur']; ?></td>   
          
          <td><?php echo $data['jenis_kelamin']; ?></td>
          <td><?php echo $data['alamat_sekarang']; ?></td>
          <td><?php echo $data['no_hp']; ?></td>
           
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  
<!-- akhir modal -->
<div class="row">

  <div class="col-sm-6">
    
 <form role="form" action="proses_rawat_jalan.php" method="POST">
   <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-search"></span>Cari</button>
    <a href="rawat_jalan_baru.php" class="btn btn-info" >Pasien Baru</a> <br><br>

  <div class="form-group">
   
    <label for="no_rm">No RM:</label>
    <input type="text" class="form-control" id="no_rm" name="no_rm" readonly="" >
  </div>

<div class="form-group">
    <label for="no_reg">No Reg</label>
    <input type="text" class="form-control" id="no_reg" name="no_reg" readonly="" value="REG/<?php echo $no_reg_terakhir;?>" >
  </div>

  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap Pasien:</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" readonly="">
  </div>



  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <textarea class="form-control" id="alamat" name="alamat" readonly=""></textarea>
  </div>

   
<div class="form-group" >
  <label for="umur">Umur</label>
 <input type="text" class="form-control" id="umur" name="umur" readonly="">
</div>



  

  </div> <!--row no 1-->


  <div class="col-sm-6">


    <div class="form-group">
  <label for="sel1">Jenis Kelamin</label>
  <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" readonly="">
  
</div>



<div class="form-group">
  <label for="sel1">Penjamin</label>
  <select class="form-control" id="sel1" name="penjamin">
  <option>Silahkan Pilih</option>
    <?php 
  $query = $db->query("SELECT * FROM penjamin ");
 
while ( $data = mysqli_fetch_array($query)) {
  echo "<option value='".$data['nama']."'>".$data['nama']."</option>";
}



   ?>
  </select>
</div>


 <div class="panel panel-success">
<div class="panel-body">



<div class="form-group">
  <label for="sel1">Dokter</label>
  <select class="form-control" id="sel1" name="dokter">
  <option>Silahkan Pilih</option>
 <?php 
  $query = $db->query("SELECT * FROM dokter ");
 
while ( $data = mysqli_fetch_array($query)) {
  echo "<option value='".$data['nama']."'>".$data['nama']."</option>";
}



   ?>
  </select>
</div>

<div class="form-group">
  <label for="sel1">Poli</label>
  <select class="form-control" id="sel1" name="poli">
  <option>Silahkan Pilih</option>
 <?php 
  $query = $db->query("SELECT * FROM poli ");
 
while ( $data = mysqli_fetch_array($query)) {
  echo "<option value='".$data['nama']."'>".$data['nama']."</option>";
}



   ?>
  </select>
</div>

  

<div class="form-group">
  <label for="sel1">Kondisi</label>
  <select class="form-control" id="sel1" name="kondisi">
  <option>Silahkan Pilih</option>
    <option>Baik</option>
    <option>Kurang Baik</option>
    <option>Sangat Baik</option>
    <option>Tidak Baik</option>
  </select>
</div>
  
<div class="form-group">
  <label for="sel1">Rujukan</label>
  <select class="form-control" id="sel1" name="rujukan">
  <option>Silahkan Pilih</option>
    <option>Rujukan </option>
    <option>Non Rujukan </option>
  </select>
</div>

<div class="form-group">
    <label for="tanggal_lahir">Asal Rujukan</label>
    <textarea class="form-control" id="tanggal_lahir" name="asal_rujukan"></textarea>
  </div>
 
  <button type="submit" class="btn btn-info">Daftar Rawat Jalan</button> 

</form>

</div> 
</div><!--panel body-->
</div> <!-- row no 2-->







 </div> <!--row utama-->
 
</div> <!--container-->


<script type="text/javascript">
 $(function() {
   
$( "#tanggal_lahir" ).datepicker({
  dateFormat: "yy-mm-dd", changeYear: true,  yearRange: "1800:2500"


});
});

 

</script>
<script type="text/javascript">

  $(function () {
  $("#siswa").dataTable();
  });
  
  </script>


<script type="text/javascript">
  $("#tanggal_lahir").change (function(){

  var tanggal_lahir = $("#tanggal_lahir").val();
$.post('cekumur.php',{tanggal_lahir:tanggal_lahir},function(data){
  $("#umur").val(data);
});
});


  


</script>
<script type="text/javascript">

//            jika dipilih, nim akan masuk ke input dan modal di tutup
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("no_rm").value = $(this).attr('data-no');
                document.getElementById("nama_lengkap").value = $(this).attr('data-nama');
                document.getElementById("umur").value = $(this).attr('data-umur');
document.getElementById("alamat").value = $(this).attr('data-alamat');
document.getElementById("jenis_kelamin").value = $(this).attr('data-jenis-kelamin');
                $('#myModal').modal('hide');
            });
      

//            tabel lookup mahasiswa
            
          
        </script>



<?php 'footer.php';
?>


















