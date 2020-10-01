<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{	
//Proses penambahan admin
	$stmt = $mysqli->prepare("INSERT INTO tb_fasilitas 
		(namaunit,idjenis,idkecamatan,longitude,latitude,alamat,nohp) 
		VALUES (?,?,?,?,?,?,?)");

	$stmt->bind_param("sssssss", 
		$_POST['namaunit'],
		$_POST['idjenis'],
		$_POST['idkecamatan'],
		$_POST['longitude'],
		$_POST['latitude'],
		$_POST['alamat'],
		$_POST['nohp']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Fasilitas Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=fasilitas';</script>";	
	} else {
		echo "<script>alert('Data Fasilitas Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

	//print_r($_POST);
//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_fasilitas  SET 
		namaunit=?,
		idjenis=?,
		idkecamatan=?,
		longitude=?,
		latitude=?,
		alamat=?,
		nohp=?
		where idfasilitas=?");

	$stmt->bind_param("ssssssss",
		$_POST['namaunit'],
		$_POST['idjenis'],
		$_POST['idkecamatan'],
		$_POST['longitude'],
		$_POST['latitude'],
		$_POST['alamat'],
		$_POST['nohp'],
		$_POST['kode']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Fasilitas Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=fasilitas';</script>";	
	} else {
		echo "<script>alert('Data Fasilitas Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("delete from tb_fasilitas where idfasilitas=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Fasilitas Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=fasilitas';</script>";	
	} else {
		echo "<script>alert('Data Fasilitas Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>