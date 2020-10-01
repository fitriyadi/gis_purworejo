<?php
if (isset($_GET['id'])){
  $kode=$_GET['id'];
  extract(ArrayData($mysqli,"tb_fasilitas","idfasilitas='$kode'"));
}
?>

<!-- Main content -->
<section class="content" style="margin-top: 10px;">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Olah Data Fasilitas</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="quickForm" action="fasilitas_proses.php" method="post">

            <div class="card-body">

              <input type="hidden" name="kode" value="<?=$idfasilitas;?>">

              <div class="form-group">
                <label for="nama">Nama Unit</label>
                <input type="text" name="namaunit" class="form-control" value="<?=@$namaunit?>" placeholder="Inputkan Nama Unit" required="">
              </div>

              <div class="form-group">
                <label for="nama">Jenis</label>
                <select class="form-control select2" name="idjenis">
                  <?php
                  $query="SELECT * from tb_jenis";
                  $result=$mysqli->query($query);
                  $num_result=$result->num_rows;
                  while ($data=mysqli_fetch_assoc($result)) { ?>
                    <option value="<?=$data['idjenis']?>"><?=$data['namajenis']?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nama">Kecamatan</label>
                <select class="form-control select2" name="idkecamatan">
                  <?php
                  $query="SELECT * from tb_kecamatan";
                  $result=$mysqli->query($query);
                  $num_result=$result->num_rows;
                  while ($data=mysqli_fetch_assoc($result)) { ?>
                    <option value="<?=$data['idkecamatan']?>"><?=$data['namakecamatan']?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="form-group">
                <label for="nama">Logitude</label>
                <input type="text" name="longitude" class="form-control" value="<?=@$longitude?>" placeholder="Inputkan Longitude" required="">
              </div>

              <div class="form-group">
                <label for="nama">Latitude</label>
                <input type="text" name="latitude" class="form-control" value="<?=@$latitude?>" placeholder="Inputkan Latitiude" required="">
              </div>

              <div class="form-group">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Isikan Alamat" required=""><?=@$alamat?></textarea>
              </div>

              <div class="form-group">
                <label for="nama">No HP</label>
                <input type="text" name="nohp" class="form-control" value="<?=@$nohp?>" placeholder="Inputkan No HP" required="">
              </div>

            </div>

            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" name="<?=isset($_GET['id'])?'ubah':'tambah';?>" 
              class="btn btn-primary" value="Simpan">
              <a href="?hal=fasilitas" class="btn btn-default">
                Batal
              </a>
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->