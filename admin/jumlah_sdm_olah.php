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
            <h3 class="card-title">Olah Data Jumlah SDM</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" id="quickForm" action="jumlah_sdm_proses.php" method="post">

            <div class="card-body">

              <input type="hidden" name="kode" value="<?=$idfasilitas;?>">

              <div class="form-group">
                <label for="nama">Nama Unit</label>
                <input type="text" name="namaunit" class="form-control" value="<?=@$namaunit?>" placeholder="Inputkan Nama Unit" readonly>
              </div>

              <div class="form-group">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Isikan Alamat" readonly><?=@$alamat?></textarea>
              </div>

              <div class="form-group">
                <h5> Jumlah Tenaga Sumber Daya Manusia</h5>
                <table id="" class="table table-bordered table-hover">
                  <?php
                  $query="SELECT * from tb_sdm";
                  $result=$mysqli->query($query);
                  $num_result=$result->num_rows;
                  if ($num_result > 0 ) { 
                    $no=0;
                    while ($data=mysqli_fetch_assoc($result)) {
                      extract($data);
                      ?>
                      <tr>
                        <td width="5%"><?=$no+=1; ?></td>
                        <td><?=$nama; ?></td>
                        <td width="20%">
                          <input type="number" name="sdm[<?=$idsdm?>]" 
                          value="<?=caridata($mysqli,"select jumlah from tb_jumlah_sdm where idfasilitas='$kode' and idsdm='$idsdm'")?>"
                          > 
                        </tr>
                      <?php }} ?>
                    </table>
                  </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="submit" name="simpan" 
                  class="btn btn-primary" value="Simpan">
                  <a href="?hal=jumlah_sdm" class="btn btn-default">
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