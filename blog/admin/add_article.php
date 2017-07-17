<?php
    include 'koneksi.php';

    $judul_berita = $_POST['judul_artikel'];
    $kategori_artikel = $_POST['kategori_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $penulis = $_POST['penulis'];
    //$hari = $_POST['hari'];
    //$tanggal = $_POST['tanggal'];
    //$jam = $_POST['jam'];

    //get date now
    $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $date=($date->format('Y-m-d H:i:s'));

    //get time now
    $time = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $time=($time->format('H:i:s'));
    $tanggal=$date;
    $jam=$time;

    $dir_upload='assets/gambar/';
    $nama_gmb=$_FILES['foto']['name'];
    //tambahkan info foto
    $dir_sementara=$_FILES['foto']['tmp_name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];

    is_uploaded_file($_FILES['foto']['tmp_name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir_upload.$nama_gmb);

    $sql = "INSERT INTO tabel_berita (judul_berita, id_kategori, isi_berita, gmb_berita, penulis, tanggal, jam) VALUES ('judul_berita','kategori_artikel','$isi_artikel','$nama_gmb','$penulis','$tanggal','$jam')";

    if ($connection->query($sql) === TRUE) {
        header("location:create_article.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }


 ?>