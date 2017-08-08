<?php
//include 'koneksi.php';
session_start();

// $sess=isset($_SESSION["sess"])?$_SESSION["sess"]:"";
if (!isset($_SESSION['sess'])) {
    echo "<script>alert ('Anda Belum Login!');
    window.location.href='../login.php'</script>";
} else {
     $sess = $_SESSION['sess'];
     $sess1 = $_SESSION['sess1'];
 }
?>