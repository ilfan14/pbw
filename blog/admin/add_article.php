<?php
    include 'koneksi.php';
    $sql = mysqli_query($connection,"INSERT INTO tabel_berita (judul_berita, id_kategori, isi_berita, penulis, jam) VALUES ('$_POST[judul_artikel]','$_POST[kategori_artikel]','$_POST[isi_artikel]','$_POST[penulis_artikel]', NOW())");
 
    // header("location:tampil_user.php")



 ?>