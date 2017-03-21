<?php 
include 'koneksi.php';
 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MANAJEMEN USER</title>
    <link rel="stylesheet" href="">

    <script>
    function check() {
    if(document.getElementById('password').value === document.getElementById('kpassword').value) {
        document.getElementById('message').innerHTML = "Password Cocok Lanjutkan";
        return true;
    } else {
        document.getElementById('message').innerHTML = "Password Tidak Coccok";
        alert("Password Tidak Coccok");
        return false;
    }
    }
   </script>
</head>
<body></body>
<center><section>
<H1>EDIT USER</H1>
    <form onSubmit="return check()" action="update_user.php" method="POST" accept-charset="utf-8">

        <?php
            $edit = mysql_query("SELECT * from user where username='$_GET[id]'");
            $r = mysql_fetch_array($edit);
            echo "<table>
            <tr>
                <td><label for=\"\">Username :</label></td>
                <td><input type=\"text\" name=\"username\" value=\"$r[username]\" placeholder=\"Username\" required=\"required\" readOnly><br></td>
            </tr>
            <tr>
                <td><label for=\"\">Password :</label></td>
                <td><input type=\"password\" name=\"password\" id=\"password\" value=\"\" placeholder=\"Password\" ><br></td>
            </tr>
            <tr>
                <td><label for=\"\">Konfirm Password :</label></td>
                <td><input type=\"password\" name=\"kpassword\" id=\"kpassword\" value=\"\" placeholder=\"Input ulang password\" onChange=\"check()\"> <span id=\"message\"></span> <br></td>

            </tr>
            <tr>
                <td><label for=\"\">Nama Lengkap :</label></td>
                <td><input type=\"text\" name=\"nama_lengkap\" value=\"$r[nama_lengkap]\" placeholder=\"Nama Lengkap\" required=\"required\"><br></td>
            </tr>
            <tr>
                <td><label for=\"\">Email :</label></td>
                <td><input type=\"email\" name=\"email\" value=\"$r[email]\" placeholder=\"Email\" required=\"required\"><br></td>
            </tr>";


            if ($r['level'] == 'admin') {
                echo"<tr>
                <td><label for=\"\">Level :</label></td>
                <td><input type=\"radio\" name=\"level\" value=\"admin\" placeholder=\"\" checked=\"checked\">Admin
                <input type=\"radio\" name=\"level\" value=\"operator\" placeholder=\"\" >Operator
                </td>
                </tr>";

            } else {
                 echo"<tr>
                <td><label for=\"\">Level :</label></td>
                <td><input type=\"radio\" name=\"level\" value=\"admin\" placeholder=\"\" >Admin
                <input type=\"radio\" name=\"level\" value=\"operator\" placeholder=\"\" checked=\"checked\">Operator
                </td>
                </tr>";
            }
            
            if ($r['status'] == 'aktif'){
                echo "<tr>
                <td><label for=\"\">Status :</label></td>
                <td><input type=\"radio\" name=\"status\" value=\"aktif\" placeholder=\"\" checked=\"checked\">Aktif
                <input type=\"radio\" name=\"status\" value=\"non-aktif\" placeholder=\"\">Non-Aktif
                </td>
                </tr>";
            } else {
                echo "<tr>
                <td><label for=\"\">Status :</label></td>
                <td><input type=\"radio\" name=\"status\" value=\"aktif\" placeholder=\"\" >Aktif
                <input type=\"radio\" name=\"status\" value=\"non-aktif\" placeholder=\"\" checked=\"checked\">Non-Aktif
                </td>
                </tr>";
            }
            

            echo "<tr>
                <td><input type=\"submit\" name=\"\" value=\"UPDATE\">
                <input type=\"submit\" name=\"\" value=\"BATAL\">
                </td>
            </tr>
        </table>";

        ?>
    
        


    </form>
</section></center>

</body>
</html>