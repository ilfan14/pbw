<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($connection,"SELECT * FROM tabel_user WHERE username='$username' AND password='$password'");
    $row=mysqli_fetch_array($sql);
    if ($sql->num_rows > 0) {
        if ($row['level']=='admin') {
            session_start(); //session mulai
            // header('location:admin/');
        } else if ($row['level']=='penulis') {
            // header('location:penulis/');
        } else if ($row['level']=='editor') {
            // header('location:editor/');
        }
            session_start();
            $_SESSION["sess"]=$row['username'];
            $_SESSION["sess1"]=$row['level'];
            header('location:admin/');
    } else {

        header('location:login.php?message=username atau password salah!');
    }
 ?>

