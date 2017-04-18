
<?php
   include("koneksi.php");
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $isiuser = mysqli_real_escape_string($connection,$_POST['iduser']);
      $isipassword = mysqli_real_escape_string($connection,$_POST['password']); 
      // cek pertama user tersedia apa tidak
      $sql = "SELECT username FROM user WHERE username = '$isiuser'";
      $hasiluser = mysqli_query($connection,$sql);
      $row = mysqli_fetch_array($hasiluser,MYSQLI_ASSOC);
      $hrow = mysqli_num_rows($hasiluser);
      if($hrow == 1) {
        // lanjut pengecekan password jika username benar
        $sqlpas = "SELECT * FROM user WHERE username = '$isiuser' and password = '$isipassword'";
        $hasilpass = mysqli_query($connection,$sqlpas);
        $rowpas = mysqli_fetch_array($hasilpass,MYSQLI_ASSOC);
        $hpas = mysqli_num_rows($hasilpass);
        if ($hpas == 1){
          // password benar redirect ke Welcome.php
          header("location: welcome.php");
        } else {
          // salah password 
          $error = "<span>Password Salah</span>
                    <script>
                    var timer = setTimeout(function() {
                      window.location='forgetpas.php'
                    }, 3000);
                    </script>";
        }
        // header("location: welcome.php");
      } else {
         $error = "<span>Username Tidak Terdaftar</span>
                    <script>
                    var timer = setTimeout(function() {
                      window.location='tambah_user.php'
                    }, 3000);
                    </script>";
      }
   }
?>




<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <!-- Framework material desain  -->
  <link rel="stylesheet" href="./mdl/material.css">
  <script src="./mdl/material.js"></script>
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
  <!-- end framework material desain -->
  <script type="text/javascript">
    function checkLogin(str) {
      if (str.length == 0) { 
          document.getElementById("musername").innerHTML = "";
          return;
      } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("musername").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
      }
    }
  </script>

</head>
<body>

  <dialog class="mdl-dialog" >
  <h4 class="mdl-dialog__title">Login Page</h4>
    <div class="mdl-dialog__content">
      <form action="" method="post" >
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" id="username">
          <span id="musername"></span>
          <label class="mdl-textfield__label" for="username">Username</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="password" id="password">
          <span id="mpassword"></span>
          <label class="mdl-textfield__label" for="password">Password</label>
        </div>
         <?php echo $error; ?>
        <div class="mdl-dialog__actions">
          <button type="submit" class="mdl-button">Login</button>
        </div>
      </form>

    </div>

  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  </script>

</body>
</html>