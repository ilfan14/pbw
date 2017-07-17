<?php
    include 'koneksi.php';

    $id=$_POST['id'];
    $judul_berita = $_POST['judul_artikel'];
    $kategori_artikel = $_POST['kategori_artikel'];
    $isi_artikel = $_POST['isi_artikel'];
    $penulis = $_POST['penulis'];

    //get date now
    $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $date=($date->format('Y-m-d H:i:s'));

    //get time now
    $time = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $time=($time->format('H:i:s'));
    $tanggal=$date;
    $jam=$time;

    //get day now
    $getdate = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $getdate=($getdate->format('Y-m-d'));
    $day = date('D', strtotime($getdate));
    $dayList = array(
        'Sun' => 'Minggu',
        'Mon' => 'Senin',
        'Tue' => 'Selasa',
        'Wed' => 'Rabu',
        'Thu' => 'Kamis',
        'Fri' => 'Jumat',
        'Sat' => 'Sabtu'
    );
    $hari = $dayList[$day];

    if ($_FILES['foto']['name']!='') {
    $dir_upload='assets/gambar/';
    $nama_gmb=$_FILES['foto']['name'];
    //tambahkan info foto
    $dir_sementara=$_FILES['foto']['tmp_name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];

    is_uploaded_file($_FILES['foto']['tmp_name']);
    move_uploaded_file($_FILES['foto']['tmp_name'], $dir_upload.$nama_gmb);

    $sql = "UPDATE tabel_berita SET judul_berita='$judul_berita', id_kategori='$kategori_artikel', isi_berita='$isi_artikel', gbr_berita='$nama_gmb', penulis='$penulis', hari='$hari', tanggal='$tanggal', jam='$jam' WHERE id_berita='$id'";
    }else{
        $sql = "UPDATE tabel_berita SET judul_berita='$judul_berita', id_kategori='$kategori_artikel', isi_berita='$isi_artikel', penulis='$penulis', hari='$hari', tanggal='$tanggal', jam='$jam' WHERE id_berita='$id'";
    }

    if ($connection->query($sql) === TRUE) {
        header("location:list_article.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }


 ?>