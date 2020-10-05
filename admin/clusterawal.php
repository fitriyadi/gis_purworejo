<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';


//Mengambil Nilai Terbesar Puskesmas, Rumah Sakit dan Apotek
$puskemas_max=caridata($mysqli,"select max(_puskesmas) from tb_kecamatan");
$puskemas_min=caridata($mysqli,"select min(_puskesmas) from tb_kecamatan");

$rs_max=caridata($mysqli,"select max(_rumahsakit) from tb_kecamatan");
$rs_min=caridata($mysqli,"select min(_rumahsakit) from tb_kecamatan");

$apotek_max=caridata($mysqli,"select max(_apotek) from tb_kecamatan");
$apotek_min=caridata($mysqli,"select min(_apotek) from tb_kecamatan");


//Nilai Centro 1 [Puskesmas, Rumah Sakit, Apotek]
$centro1[0][0]=$puskemas_min+(((1-1)*($puskemas_max-$puskemas_min))/2)+(($puskemas_max-$puskemas_min)/(2*3));
$centro1[0][1]=$rs_min+(((1-1)*($rs_max-$rs_min))/2)+(($rs_max-$rs_min)/(2*3));
$centro1[0][2]=$apotek_min+(((1-1)*($apotek_max-$apotek_min))/2)+(($apotek_max-$apotek_min)/(2*3));

$centro2[0][0]=$puskemas_min+(((2-1)*($puskemas_max-$puskemas_min))/2)+(($puskemas_max-$puskemas_min)/(2*3));
$centro2[0][1]=$rs_min+(((2-1)*($rs_max-$rs_min))/2)+(($rs_max-$rs_min)/(2*3));
$centro2[0][2]=$apotek_min+(((2-1)*($apotek_max-$apotek_min))/2)+(($apotek_max-$apotek_min)/(2*3));

$centro3[0][0]=$puskemas_min+(((3-1)*($puskemas_max-$puskemas_min))/2)+(($puskemas_max-$puskemas_min)/(2*3));
$centro3[0][1]=$rs_min+(((3-1)*($rs_max-$rs_min))/2)+(($rs_max-$rs_min)/(2*3));
$centro3[0][2]=$apotek_min+(((3-1)*($apotek_max-$apotek_min))/2)+(($apotek_max-$apotek_min)/(2*3));



//Nilai Centro 1 [Puskesmas, Rumah Sakit, Apotek]

//Nilai Centro 1 [Puskesmas, Rumah Sakit, Apotek]
?>