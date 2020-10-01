<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{	
//Proses penambahan sdm
	$stmt = $mysqli->prepare("INSERT INTO tb_sdm 
		(nama) 
		VALUES (?)");

	$stmt->bind_param("s",
		$_POST['nama']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data SDM Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=sdm';</script>";	
	} else {
		echo "<script>alert('Data SDM Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_sdm  SET 
		nama=?
		where idsdm=?");
	$stmt->bind_param("ss",
		$_POST['nama'],
		$_POST['kode']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data SDM Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=sdm';</script>";	
	} else {
		echo "<script>alert('Data SDM Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_sdm where idsdm=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data SDM Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=sdm';</script>";	
	} else {
		echo "<script>alert('Data SDM Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>