<?php 


include 'koneksi.php';

if(isset($_POST['username'])){

	$isiuser = $_POST['username'];
	$isipassword = $_POST['password'];
	$isinama_lengkap = $_POST['nama_lengkap'];
	$isiemail = $_POST['email'];
	$isilevel = $_POST['level'];
	$isistatus = $_POST['status'];

	if (empty($isipassword)){
		mysql_query("UPDATE user SET 	nama_lengkap = '$isinama_lengkap',
										email = '$isiemail',
										level = '$isilevel',
										status = '$isistatus' 
										where username = '$isiuser'");
		header('location:tampil_user.php');
	} else{
		mysql_query("UPDATE user SET 	password = '$isipassword',
										nama_lengkap = '$isinama_lengkap',
										email = '$isiemail',
										level = '$isilevel',
										status = '$isistatus' 
										where username = '$isiuser'");
		header('location:tampil_user.php');
	}
}


?>