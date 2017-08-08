<?php
include 'koneksi.php';
if ($_GET['jenis'] == "artikel") {
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
    $dir_upload='../images/';
    $nama_gmb=$_FILES['foto']['name'];
    //tambahkan info foto
    $dir_sementara=$_FILES['foto']['tmp_name'];
    $ukuran_file=$_FILES['foto']['size'];
    $tipe_file=$_FILES['foto']['type'];


    $nama_gmb = rand(0,100) . $nama_gmb;
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

} else if ($_GET['jenis'] == "kategori") {
    $nama_kategori = $_POST['nama_kategori'];
    $id_kategori = $_POST['id_kategori'];

    $sql = "UPDATE tabel_kategori SET kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";

    if ($connection->query($sql) === TRUE) {
        header("location:list_kategori.php");
    } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
    }

} else if ($_GET['jenis'] == "user") {
    $id=$_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "UPDATE tabel_user SET username='$username',password='$password',level='$level' WHERE id_user='$id'";

    if ($connection->query($sql) === TRUE) {
        header("location:list_user.php");
    } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
    }

} else {
    echo "Wrong";
}

 ?>