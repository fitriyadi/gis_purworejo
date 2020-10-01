<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['simpan']))
{	
	//Proses penambahan admin
	mysqli_query($mysqli,"delete from tb_jumlah_sdm where idfasilitas='".$_POST['kode']."'");
	foreach ($_POST['sdm'] as $key => $value) {
		simpan($mysqli,$key,$_POST['kode'],$value);
	}

	echo "<script>alert('Data Jumlah SDM Berhasil Disimpan')</script>";
	echo "<script>window.location='index.php?hal=jumlah_sdm';</script>";	

}

function simpan($mysqli,$idsdm,$idfasilitas,$jumlah){
	$stmt = $mysqli->prepare("INSERT INTO tb_jumlah_sdm 
		(idsdm,idfasilitas,jumlah) 
		VALUES (?,?,?)");

	$stmt->bind_param("sss", 
		$idsdm,
		$idfasilitas,
		$jumlah);	

	$stmt->execute();
}
?>