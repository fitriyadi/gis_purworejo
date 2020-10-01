
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h3 class="m-0 text-dark">Selamat Datang, Admin </h3>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="row">
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-info">
				<div class="inner">
					<h3><?=JumlahData($mysqli,"tb_sdm")?></h3>

					<p>Data SDM</p>
				</div>
				<div class="icon">
					<i class="fa fa-user"></i>
				</div>
				<a href="?hal=kamus" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-warning">
				<div class="inner">
					<h3><?=JumlahData($mysqli,"tb_fasilitas where idjenis='1'")?></h3>


					<p>Data Rumah Sakit</p>
				</div>
				<div class="icon">
					<i class="fa fa-ambulance"></i>
				</div>
				<a href="?hal=fasilitas&get=1" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-primary">
				<div class="inner">
					<h3><?=JumlahData($mysqli,"tb_fasilitas where idjenis='2'")?></h3>


					<p>Data Puskesmas</p>
				</div>
				<div class="icon">
					<i class="fa fa-medkit"></i>
				</div>
				<a href="?hal=fasilitas&get=2" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>

		<div class="col-lg-3 col-6">
			<!-- small box -->
			<div class="small-box bg-success">
				<div class="inner">
					<h3><?=JumlahData($mysqli,"tb_fasilitas where idjenis='3'")?></h3>


					<p>Data Data Apotek</p>
				</div>
				<div class="icon">
					<i class="fa fa-shopping-bag"></i>
				</div>
				<a href="?hal=fasilitas&get=2" class="small-box-footer">Detail <i class="fas fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row -->