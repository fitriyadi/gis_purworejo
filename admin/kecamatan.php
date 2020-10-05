<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6"> 
        <h1 class="m-0 text-dark">Data Kecamatan</h1>
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
          </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>Puskesmas</th>
                <th>Rumah Sakit</th>
                <th>Apotek</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $query="SELECT * from tb_kecamatan";
              $result=$mysqli->query($query);
              $num_result=$result->num_rows;
              if ($num_result > 0 ) { 
                $no=0;
                while ($data=mysqli_fetch_assoc($result)) {
                  extract($data);
                  ?>
                  <tr>
                    <td width="5%"><?=$no+=1; ?></td>
                    <td><?=$namakecamatan; ?></td>
                    <td><?=$_puskesmas; ?></td>
                    <td><?=$_rumahsakit; ?></td>
                    <td><?=$_apotek; ?></td>
                    <td width="10%">
                      <a href="?hal=kecamatan_olah&id=<?=$idkecamatan; ?>" 
                        class="btn btn-icon btn-primary" title="Edit Data"><i class="fa fa-edit"></i> </a>
                        
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

