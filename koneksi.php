 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "6c";


mysql_connect($servername,$username,$password) or die ("Koneksi gagal");
mysql_select_db($dbname) or die ("database tidak ditemukan");

?>