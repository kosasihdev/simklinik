<?php 
include 'header.php';
include 'navbar.php';
include 'db.php';

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
   <div class="form-group">
   
    <label for="no_rm">No RM:</label>
    <input type="text" class="form-control" id="no_rm" name="no_rm" readonly="" >
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
  <label for="umur">Jenis:</label>
 <input type="text" class="form-control" id="jenis" name="jenis" readonly="">
</div>
    
<div class="form-group" >
  <label for="umur">Penjamin:</label>
 <input type="text" class="form-control" id="penjamin" name="penjamin" readonly="">
</div>    

<div class="form-group" >
  <label for="umur">Surat Jaminan:</label>
 <input type="text" class="form-control" id="surat_jaminan" name="surat_jaminan" readonly="">
</div>

<div class="form-group" >
  <label for="umur">Perkiraan Menginap:</label>
 <input type="text" class="form-control" id="perkiraan" name="perkiraan" readonly="">
</div>

<div class="form-group" >
  <label for="umur">Penanggung Jawab Pasien:</label>
 <input type="text" class="form-control" id="penanggung_jawab" name="penanggung_jawab" readonly="">
</div>

<div class="form-group" >
  <label for="umur">Alamat Penanggung Jawab:</label>
 <input type="text" class="form-control" id="alamat_penanggung" name="alamat_penanggung" readonly="">
</div>

<div class="form-group" >
  <label for="umur">No Telp / HP Penanggung  :</label>
 <input type="text" class="form-control" id="no_telp_penanggung" name="no_telp_penanggung" readonly="">
</div>

<div class="form-group" >
  <label for="umur">Pekerjaan:</label>
 <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" readonly="">
</div>

<div class="form-group" >
  <label for="umur">Hubungan Dengan Pasien:</label>
 <input type="text" class="form-control" id="hubungan_pasien" name="hubungan_pasien" readonly="">
</div>


<button  type="button" class="btn btn-info">Daftar</button>

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

      

    </tr>
    </thead>
    <tbody>
    
   <?php
                                //Data mentah yang ditampilkan ke tabel    
                               include 'db.php';
                               $hasil = $db->query("SELECT * FROM bed ");
                            
                                while ($data =  $hasil->fetch_assoc()) {
                                    ?>
                                    <tr class="pilih" data-no="<?php echo $data['nama_kamar']; ?>" data-klass="<?php echo $data['group_bed']; ?>" data-tarif="<?php echo $data['tarif']; ?>" data-alamat="<?php echo $data['alamat_sekarang']; ?>" data-jenis-kelamin="<?php echo $data['jenis_kelamin']; ?>" >
                                        <td><?php echo $data['nama_kamar']; ?></td>
                                        <td><?php echo $data['group_bed']; ?></td>
                                         <td><?php echo $data['tarif']; ?></td>   
          
          						<td><?php echo $data['fasilitas']; ?></td>
          
           
                                    </tr>
                                    <?php
                                }
                                ?>
     
  
  </tbody>
 </table>
    
    </div>






    </script>
<script type="text/javascript">

  $(function () {
  $("#siswa").dataTable();
  });
  
  </script>

  