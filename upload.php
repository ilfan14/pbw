
<?php 

if (isset($_POST['upload'])) {
	$folder_upload = 'data/';
	$nama_file = $_FILES['file']['name'];
	$tmp_dir = $_FILES['file']['tmp_name'];
	$ukuran = $_FILES['file']['size'];
	$tipefile = $_FILES['file']['type'];

	echo "Nama File : $nama_file<br>
			Temporary Dir : $tmp_dir<br>
			Ukuran File : $ukuran<br>
			Type File : $tipefile<br>
	";

	if (is_uploaded_file($tmp_dir)) {

		$cek = move_uploaded_file($tmp_dir, $folder_upload.$nama_file);

		if ($cek) {
			// meemasukan pada database
			include 'koneksi.php';
			$direktori = $folder_upload.$nama_file;
			mysqli_query($connection,"INSERT INTO upload_file (nama, ukuran, tipe, deskripsi, data) VALUES ('$nama_file','$ukuran','$tipefile','$_POST[deskripsi]','$direktori')");
    		echo "<script>alert('Berhasil')</script>";
		}
	}
}

