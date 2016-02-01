<?php 
include 'header.php';
include 'navbar2.php';
 include 'db.php';
$no_reg = $db->query("SELECT * FROM kunjungan_pasien_rawat_jalan ORDER BY id DESC limit 1");

$no_rm = $db->query("SELECT * FROM pasien ORDER BY id DESC limit 1");

$tampil = mysqli_fetch_array($no_rm);
$tampil2= mysqli_fetch_array($no_reg);


$no_rm_terakhir =1 + $tampil['id'];
$no_reg_terakhir =1 + $tampil2['id'];



?>


<div class="container">
<div class="row">

  <div class="col-sm-6">
  	
 <form role="form" action="proses_pendaftaran.php" method="POST">
  <div class="form-group">
    <label for="no_rm">No RM:</label>
    <input type="text" class="form-control" id="no_rm" name="no_rm" readonly="" value="RM/<?php echo $no_rm_terakhir;?>">
  </div>

<div class="form-group">
    <label for="no_reg">No Reg</label>
    <input type="text" class="form-control" id="no_reg" name="no_reg" readonly="" value="REG/<?php echo $no_reg_terakhir;?>">
  </div>

  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap Pasien:</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" >
  </div>

<div class="form-group">
    <label for="no_ktp">No KTP:</label>
    <input type="text" class="form-control" id="no_ktp" name="no_ktp">
  </div>

<div class="form-group">
    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
  </div>

<div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
  </div>

<div class="form-group">
    <label for="umur">Umur:</label>
    <input type="text" class="form-control" id="umur" name="umur" readonly="">
  </div>

<div class="form-group">
    <label for="alamat_sekarang">Alamat Sekarang:</label>
    <textarea class="form-control" id="alamat_sekarang" name="alamat_sekarang"></textarea>
  </div>

  <div class="form-group">
    <label for="alamat_ktp">Alamat KTP:</label>
    <textarea class="form-control" id="alamat_ktp" name="alamat_ktp"></textarea>
  </div>

   <div class="form-group">
    <label for="no_telepon">No Telpon / HP:</label>
    <input type="text" class="form-control" id="no_telepon" name="no_telepon">
  </div>

  <div class="form-group">
    <label for="nama_suamiortu">Nama Suami /Orangtua :</label>
    <input type="text" class="form-control" id="nama_suamiortu" name="nama_suamiortu">
  </div>


  <div class="form-group">
    <label for="pekerjaan_pasien">Pekerjaan Pasien/Ortu :</label>
    <input type="text" class="form-control" id="pekerjaan_pasien" name="pekerjaan_pasien">
  </div>

 <div class="form-group">
    <label for="nama_penanggungjawab">Nama Penanggung Jawab :</label>
    <input type="text" class="form-control" id="nama_penanggungjawab" name="nama_penanggungjawab">
  </div>

   <div class="form-group">
    <label for="hubungan_pasien">Hubungan Dengan Pasien :</label>
    <input type="text" class="form-control" id="hubungan_pasien" name="hubungan_pasien">
  </div>



   <div class="form-group">
    <label for="no_telppenanggung">No Telpon /HP  :</label>
    <input type="text" class="form-control" id="no_telppenanggung" name="no_telppenanggung">
  </div>

<div class="form-group">
    <label for="alamat_penanggung">Alamat:</label>
    <textarea class="form-control" id="alamat_penanggung" name="alamat_penanggung"></textarea>
  </div>

  </div> <!--row no 1-->


  <div class="col-sm-6">


  	<div class="form-group">
  <label for="sel1">Jenis Kelamin</label>
  <select class="form-control" id="sel1" name="jenis_kelamin">
  <option>Silahkan Pilih</option>
    <option>Laki-Laki</option>
    <option>Perempuan</option> 
  </select>
</div>

<div class="form-group">
  <label for="sel1">Status Perkawinan</label>
  <select class="form-control" id="sel1" name="status_kawin">
  <option>Silahkan Pilih</option>
    <option>Menikah</option>
    <option>Belum Menikah</option>
    <option>Cerai</option>
  </select>
</div>

<div class="form-group">
  <label for="sel1">Pendidikan Terakhir</label>
  <select class="form-control" id="sel1" name="pendidikan_terakhir">
  <option>Silahkan Pilih</option>
    <option>SD</option>
    <option>SMP</option>
    <option>SMA / SMK</option>
    <option>D1</option>
    <option>D2</option>
    <option>D3</option>
    <option>S1</option>
    <option>S2</option>
   <option>S3</option>
  </select>
</div>

<div class="form-group">
  <label for="sel1">Agama</label>
  <select class="form-control" id="sel1" name="agama">
  <option>Silahkan Pilih</option>
    <option>Islam</option>
    <option>Katolik</option>
    <option>Kristen</option>
    <option>Hindu</option>
    <option>Budha</option>
  </select>
</div>

<div class="form-group">
  <label for="sel1">Penjamin</label>
  <select class="form-control" id="sel1" name="penjamin">
  <option>Silahkan Pilih</option>
    <option>Personal</option>
    <option>Reguler</option>
    <option>Perusahaan</option>
    <option>BPJS</option>
  </select>
</div>

<div class="form-group">
  <label for="sel1">Golongan Darah</label>
  <select class="form-control" id="sel1" name="gol_darah">
  <option>Silahkan Pilih</option>
    <option>A</option>
    <option>B</option>
    <option>O</option>
    <option>AB</option>
  </select>
</div>



 <div class="panel panel-success">
<div class="panel-body">

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
  <label for="sel1">dokter</label>
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
 


</div> 
</div><!--panel body-->
</div> <!-- row no 2-->

  <button type="submit" class="btn btn-info">Daftar Rawat Jalan</button> 

</form>






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
  $("#tanggal_lahir").change (function(){

  var tanggal_lahir = $("#tanggal_lahir").val();
$.post('cekumur.php',{tanggal_lahir:tanggal_lahir},function(data){
  $("#umur").val(data);
});
});


  


</script>




<?php 'footer.php';
?>


