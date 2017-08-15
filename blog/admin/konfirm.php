<?php
include 'koneksi.php';
if ($_GET['jenis']=="artikel") {
   $id = $_GET['id'];
        $query = "UPDATE tabel_berita SET status='1' WHERE id_berita='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:list_article.php");
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
} elseif ($_GET['jenis']=="komentar") {
   $id = $_GET['id'];
        $query = "UPDATE tabel_komentar SET status='Y' WHERE id='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:listkoment.php");
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
}



 ?>