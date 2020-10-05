<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

//Populate Data  -> Hitung Jumlah Data Perkecamatan


//

//Inisialisasi Cluster Awal
$jumlahkecamatan=caridata($mysqli,"select count(*) from tb_kecamatan");
for ($i=0;$i<$jumlahkecamatan; $i++) { 
	$clusterawal[$i]="1";
}

//Set Default Nilai Centroid 1,2,3
$centro1[0] = array('1.33','2','2.67');
$centro2[0] = array('0.33','1','1.67');
$centro3[0] = array('2.67','1.67','10.17');


$status='false';
$loop='0';
$x=0;
while ($status=='false'){

	//Proses K-Means Perhitungan
	$query="select * from tb_kecamatan";
	$result=$mysqli->query($query);
	while ($data=mysqli_fetch_assoc($result)) {
		extract($data);
		$hasilc1=0;
		$hasilc2=0;
		$hasilc3=0;

		//Proses Pencarian Nilai Centro 1
		$hasilc1=sqrt(pow($_puskesmas-$centro1[$loop][0],2) +
			pow($_rumahsakit-$centro1[$loop][1],2) + 
			pow($_apotek-$centro1[$loop][2],2));

		//Proses Pencarian Nilai Centro 2
		$hasilc2=sqrt(pow($_puskesmas-$centro2[$loop][0],2) +
			pow($_rumahsakit-$centro2[$loop][1],2) + 
			pow($_apotek-$centro2[$loop][2],2));

		//Proses Pencarian Nilai Centro 3
		$hasilc3=sqrt(pow($_puskesmas-$centro3[$loop][0],2) +
			pow($_rumahsakit-$centro3[$loop][1],2) + 
			pow($_apotek-$centro3[$loop][2],2));

		//Mencari Nilai Terkecil
		if ($hasilc1<$hasilc2 && $hasilc1<$hasilc3){
			$clusterakhir[$x]='C1';
			update_kecamatan($mysqli,$idkecamatan,'C1');

		}else if($hasilc2<$hasilc1 && $hasilc2<$hasilc3){
			$clusterakhir[$x]='C2';
			update_kecamatan($mysqli,$idkecamatan,'C2');

		}else{
			$clusterakhir[$x]='C3';
			update_kecamatan($mysqli,$idkecamatan,'C3');

		}
		//Penambhan Counter Index
		$x+=1;



	}

	$loop+=1;
	//Proses mencari centroid baru ambil dari basis data.
	//Centroid Baru Pusat 1
	$centro1[$loop][0]=caridata($mysqli,"select avg(_puskesmas) from tb_kecamatan where kelompok='C1'");
	$centro1[$loop][1]=caridata($mysqli,"select avg(_rumahsakit) from tb_kecamatan where kelompok='C1'");
	$centro1[$loop][2]=caridata($mysqli,"select avg(_apotek) from tb_kecamatan where kelompok='C1'");

	//Centroid Baru Pusat 2
	$centro2[$loop][0]=caridata($mysqli,"select avg(_puskesmas) from tb_kecamatan where kelompok='C2'");
	$centro2[$loop][1]=caridata($mysqli,"select avg(_rumahsakit) from tb_kecamatan where kelompok='C2'");
	$centro2[$loop][2]=caridata($mysqli,"select avg(_apotek) from tb_kecamatan where kelompok='C2'");

	//Centroid Baru Pusat 3
	$centro3[$loop][0]=caridata($mysqli,"select avg(_puskesmas) from tb_kecamatan where kelompok='C3'");
	$centro3[$loop][1]=caridata($mysqli,"select avg(_rumahsakit) from tb_kecamatan where kelompok='C3'");
	$centro3[$loop][2]=caridata($mysqli,"select avg(_apotek) from tb_kecamatan where kelompok='C3'");

	$status='true';
	for ($i=0;$i<$jumlahkecamatan;$i++) { 
		if($clusterawal[$i]!=$clusterakhir[$i]){
			$status='false';
		}
	}

	if($status=='false'){
		$clusterawal=$clusterakhir;
	}
}


echo "<script>alert('Proses Perhitungan berhasil dilakukan sebanyak $loop kali')</script>";
echo "<script>window.location='index.php?hal=beranda';</script>";	

function update_kecamatan($mysqli,$idkecamatan,$nilai){

	$stmt=$mysqli->prepare("update tb_kecamatan set 
		kelompok=?
		where idkecamatan=?");
	$stmt->bind_param("ss",
		$nilai,
		$idkecamatan);
	$stmt->execute();
}
?>