<?php
require_once '../setting/crud.php';
require_once '../setting/koneksi.php';
require_once '../setting/tanggal.php';
require_once '../setting/fungsi.php';

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sistem Informasi Geografis Persebaran Fasilitas Kesehatan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- DataTables -->
  <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>

<!-- =======================================================
Theme Name: Reveal
Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/
======================================================= -->
</head>
<body id="body">

<!--==========================
Header
============================-->
<header id="header">
  <div class="container">

    <div id="logo" class="pull-left">
      <h1 style="font-size: 25px;!important"><img src="img/logo.png" height="60px" style="margin: 0px;"><a href="#body" class="scrollto"> Provinsi <span> Purworejo</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">

        <li class="<?=@$_GET['hal']=='beranda' || !isset($_GET['hal'])? 'menu-active':'';?>"><a href="?hal=beranda">Home</a></li>
        <li class="<?=@$_GET['hal']=='persebaran' ? 'menu-active':'';?>"><a href="?hal=persebaran">Persebaran Fasilitas</a></li>
        <li class="<?=@$_GET['hal']=='grafik' ? 'menu-active':'';?>"><a href="?hal=grafik">Grafik</a></li>
        <li class="<?=@$_GET['hal']=='kontak' ? 'menu-active':'';?>"><a href="?hal=kontak">Tentang Kami</a></li>
        <li><a href="../login.php">Login</a></li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->
<main id="main">
  <?php
  $hal = @$_GET['hal'];
  $modul = "";
  $default = $modul."beranda.php";
  if(!$hal){
    require_once "$default";
  }else{
    switch($hal){
      case $hal:
      if(is_file($modul.$hal.".php"))
      {
        require_once $modul.$hal.".php";
      }
      else
      {
        require_once "$default";
      }
      break;
      default:
      require_once "$default";
    }
  }
  ?>
</main>

<!--==========================
Footer
============================-->
<footer id="footer">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong> Adit </strong>. All Rights Reserved
    </div>
    <div class="credits">
<!--
All the links in the footer should remain intact.
You can delete the links only if you purchased the pro version.
Licensing information: https://bootstrapmade.com/license/
Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
-->
Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
</div>
</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/magnific-popup/magnific-popup.min.js"></script>
<script src="lib/sticky/sticky.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<!-- init -->
<script src="../assets/pages/jquery.datatables.init.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

</body>
</html>
