<?php
session_start();
unset($_SESSION['admin']);

echo "<script>alert('Anda berhasil log Out')</script>";
echo "<script>window.location='../index.php';</script>";
?> 