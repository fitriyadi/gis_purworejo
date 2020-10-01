<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"> 
        <h1 class="m-0 text-dark">Data Jumlah SDM</h1>
      </div><!-- /.col -->
      <div class="col-sm-5">
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title primary">List Data</h3>

          <div class="card-tools">
            <a href="?hal=jumlah_sdm" class="btn btn-sm btn-<?=(!isset($_GET['get'])) ?'success':'secondary';?>">Semua</a>
            <a href="?hal=jumlah_sdm&get=1" class="btn btn-sm btn-<?=@$_GET['get']=='1' ?'success':'secondary';?>">Rumah Sakit </a>
            <a href="?hal=jumlah_sdm&get=2" class="btn btn-sm btn-<?=@$_GET['get']=='2' ?'success':'secondary';?>">Puskesmas </a>
            <a href="?hal=jumlah_sdm&get=3" class="btn btn-sm btn-<?=@$_GET['get']=='3' ?'success':'secondary';?>">Apotek</a>
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Unit</th>
                <th>Jenis</th>
                <th>Kecamatan</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Informasi SDM</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if(!isset($_GET['get']))
                $query="SELECT * from tb_fasilitas join tb_jenis using(idjenis) join tb_kecamatan using(idkecamatan)";
              else
                $query="SELECT * from tb_fasilitas join tb_jenis using(idjenis) join tb_kecamatan using(idkecamatan) where idjenis='".$_GET['get']."'";

              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?=$no+=1; ?></td>
                    <td><?=$namaunit; ?></td>
                    <td><?=$namajenis; ?></td>
                    <td><?=$namakecamatan; ?></td>
                    <td><?=$alamat; ?></td>
                    <td><?=$nohp; ?></td>
                    <td><?=lihatdata($mysqli,$idfasilitas); ?></td>
                    <td width="10%">

                      <a href="?hal=jumlah_sdm_olah&id=<?=$idfasilitas; ?>" 
                        class="btn btn-icon btn-primary" title="Tambah Data"><i class="fa fa-plus"></i> </a>

                      </td>
                    </tr>
                  <?php }} ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->


      <?php
      function lihatdata($mysqli,$idfasilitas){
        $hasil="";
        $result=$mysqli->query("select * from tb_jumlah_sdm join tb_sdm using (idsdm) where idfasilitas='$idfasilitas'");
        $num_result=$result->num_rows;
        if ($num_result > 0 ) { 
          while ($data=mysqli_fetch_assoc($result)) {
            extract($data);
            $hasil=$hasil.$nama."[".$jumlah."] <br>";
          }
        }

        return $hasil; 
      }
      ?>
