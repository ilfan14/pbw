<?php
include "koneksi.php";
if(!empty($_POST['user'])) {
  $sqlcheck = "SELECT * FROM user WHERE username='$_POST[user]'";
  $hasil = mysqli_query($connection,$sqlcheck);
  if(mysqli_num_rows($hasil) > 0) {
      echo "<span> Username Tidak Tersedia / Sudah dipakai</span>";
  }else{
      echo "<span> Username Tersedia</span>";
  }
}
?>
