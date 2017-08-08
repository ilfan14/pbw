<?php
include 'koneksi.php';
        $id = $_GET['id'];
        $query = "UPDATE tabel_berita SET status='1' WHERE id_berita='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:list_articleeditor.php");
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }


 ?>