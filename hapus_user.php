<?php  
include "koneksi.php";

mysql_query("DELETE FROM user WHERE username='$_GET[id]'");
header('location:tampil_user.php');
?>