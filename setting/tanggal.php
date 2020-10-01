<?php
date_default_timezone_set("Asia/Bangkok");

function tgl_db($tgl){
	$tgl		= date_create($tgl);
	$tanggal	= date_format($tgl,"Y-m-d");
	return $tanggal;		 
}

function tgl_indo($tgl){
	$tgl		= date_create($tgl);
	$tanggal	= date_format($tgl,"d-m-Y");
	return $tanggal;		 
}


function terlambat($jam){
	if($jam<='07:15:00'){
		echo "<span class='badge badge-primary'>Tepat Waktu</span>";
	}else{
		echo "<span class='badge badge-danger'>Terlambat</span>";
	}
}

?>