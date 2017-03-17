<?php
    include 'koneksi.php';
    mysql_query("INSERT INTO user (username, password, nama_lengkap, email, level, status) VALUES ('$_POST[username]','$_POST[password]','$_POST[nama_lengkap]','$_POST[email]','$_POST[level]','$_POST[status]')");
    echo "<script>alert('Berhasil')</script>";

    header("location:tampil_user.php")
 ?>