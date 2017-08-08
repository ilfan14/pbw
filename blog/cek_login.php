<?php
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query($connection,"SELECT * FROM tabel_user WHERE username='$username' AND password='$password'");
    $row=mysqli_fetch_array($sql);
    if ($sql->num_rows > 0) {
            session_start();
            $_SESSION["sess"]=$row['username'];
            $_SESSION["sess1"]=$row['level'];
            header('location:admin/');
    } else {

        header('location:login.php?message=username atau password salah!');
    }
 ?>

