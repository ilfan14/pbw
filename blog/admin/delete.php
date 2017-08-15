<?php

    include 'koneksi.php';

    if ($_GET['jenis'] == "artikel") {
        $id=$_GET['id'];
        $sql = "select * from tabel_berita where id_berita='$id'";
        $get_data = $connection->query($sql);
        $data = $get_data->fetch_array();
        $query = "DELETE FROM tabel_berita WHERE id_berita='$id'";

        if ($connection->query($query) === TRUE) {
            // $file='../../assets/foto/'.$data['foto'];
            // if ($data['foto']!='') {
            $file='assets/gambar/'.$data['gbr_berita'];
            // echo $file;
            if(file_exists($file)){
                unlink($file);
                # code...

            }
            header("location:list_article.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

    } else if ($_GET['jenis'] == 'kategori') {
        $id = $_GET['id'];
        $query = "DELETE FROM tabel_kategori WHERE id_kategori='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:list_kategori.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

    } else if ($_GET['jenis'] == 'user') {
        $id = $_GET['id'];
        $query = "DELETE FROM tabel_user WHERE id_user='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:list_user.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

    } else if ($_GET['jenis'] == 'komentar') {
        $id = $_GET['id'];
        $query = "DELETE FROM tabel_komentar WHERE id='$id'";
        if ($connection->query($query) === TRUE) {
            header("location:listkoment.php");
        } else {
            echo "Error: " . $sql . "<br>" . $connection->error;
        }

    }
?>