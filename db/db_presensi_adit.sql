/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - db_presensi_adit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_admin` */

DROP TABLE IF EXISTS `tb_admin`;

CREATE TABLE `tb_admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_admin` */

insert  into `tb_admin`(`idadmin`,`username`,`password`) values (1,'admin','admin');

/*Table structure for table `tb_agenda` */

DROP TABLE IF EXISTS `tb_agenda`;

CREATE TABLE `tb_agenda` (
  `idagenda` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `jeniskegiatan` varchar(100) DEFAULT NULL,
  `keterangan` text,
  `status` char(1) DEFAULT '0',
  PRIMARY KEY (`idagenda`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tb_agenda` */

insert  into `tb_agenda`(`idagenda`,`tanggal`,`jeniskegiatan`,`keterangan`,`status`) values (1,'2020-07-07','Pembagian Raport','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.','1'),(2,'2020-07-10','Masuk Sekolah','Info Masuk Sekolah','1');

/*Table structure for table `tb_kelas` */

DROP TABLE IF EXISTS `tb_kelas`;

CREATE TABLE `tb_kelas` (
  `idkelas` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idkelas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tb_kelas` */

insert  into `tb_kelas`(`idkelas`,`kelas`) values (2,'VII A'),(3,'VII B'),(4,'VII C');

/*Table structure for table `tb_presensi` */

DROP TABLE IF EXISTS `tb_presensi`;

CREATE TABLE `tb_presensi` (
  `idpresensi` int(11) NOT NULL AUTO_INCREMENT,
  `idsiswa` char(4) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'presensi',
  PRIMARY KEY (`idpresensi`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `tb_presensi` */

insert  into `tb_presensi`(`idpresensi`,`idsiswa`,`tanggal`,`jam`,`jenis`,`status`) values (27,'1234','2020-06-01','07:57:00','pulang','kirim'),(28,'1234','2020-06-02','06:57:00','pulang','kirim'),(29,'1234','2020-06-03','06:57:00','pulang','kirim'),(30,'1234','2020-06-04','06:57:00','pulang','kirim'),(31,'1234','2020-06-05','06:57:00','pulang','kirim'),(32,'1234','2020-06-06','08:57:00','pulang','kirim'),(33,'1234','2020-06-07','06:57:00','pagi','kirim'),(34,'1234','2020-06-08','06:57:00','pagi','kirim'),(35,'1234','2020-06-09','06:57:00','pagi','kirim'),(36,'1234','2020-06-10','06:57:00','pagi','kirim'),(37,'1234','2020-06-11','06:57:00','pagi','kirim'),(38,'1234','2020-06-12','06:57:00','pagi','kirim'),(39,'1234','2020-06-13','06:57:00','pagi','kirim');

/*Table structure for table `tb_siswa` */

DROP TABLE IF EXISTS `tb_siswa`;

CREATE TABLE `tb_siswa` (
  `nis` char(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `namaortu` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `idtelegram` varchar(20) DEFAULT NULL,
  `validasi` char(1) DEFAULT 'x',
  `idkelas` int(11) DEFAULT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_siswa` */

insert  into `tb_siswa`(`nis`,`nama`,`namaortu`,`telepon`,`username`,`idtelegram`,`validasi`,`idkelas`) values ('1','Nama Siswa','Bapak Saya','0819091234556','','','x',2),('1123','Turyani','Sukamto','08190191',NULL,NULL,'x',4),('1234','Tukiman','Bpk Sukarno','081909789098','taufikfitriyadi','1048729810','Y',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
