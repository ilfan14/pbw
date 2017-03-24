<?php  
include "koneksi.php";

mysqli_query($connection,"DELETE FROM user WHERE username='$_GET[id]'");
header('location:tampil_user.php');
?>