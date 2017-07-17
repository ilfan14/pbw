<?php

    include 'koneksi.php';

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
 ?>