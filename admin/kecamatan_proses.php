<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_kecamatan  SET 
		namakecamatan=?
		where idkecamatan=?");
	$stmt->bind_param("ss",
		$_POST['namakecamatan'],
		$_POST['kode']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data kecamatan Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=kecamatan';</script>";	
	} else {
		echo "<script>alert('Data kecamatan Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
}
?>