<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_jenis  SET 
		namajenis=?
		where idjenis=?");
	$stmt->bind_param("ss",
		$_POST['namajenis'],
		$_POST['kode']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data jenis Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=jenis';</script>";	
	} else {
		echo "<script>alert('Data jenis Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
}
?>