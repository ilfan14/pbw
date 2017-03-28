<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MANAJEMEN USER</title>
    <link rel="stylesheet" href="">
    <script src="jquery-3.1.1.min.js"></script>

    <script>
        function checkuser() {
            jQuery.ajax({
            url: "checkuser.php",
            data:'user='+$("#username").val(),
            type: "POST",
            success:function(data){
              $("#muser").html(data);
            },
            error:function (){}
            });
        }
    </script>


    <script>
    function check() {
    if(document.getElementById('password').value === document.getElementById('kpassword').value) {
        document.getElementById('message').innerHTML = "Password Cocok Lanjutkan";
        document.getElementById('bsubmit').disabled = false;
    } else {
        document.getElementById('message').innerHTML = "Password Tidak Coccok";
        document.getElementById('bsubmit').disabled = true;
    }
    }
   </script>
</head>
<body></body>
<section>
<H1>MANAJEMEN USER</H1>
    <form action="input_user.php" method="POST" accept-charset="utf-8">
        <table>
            <tr>
                <td><label for="">Username :</label></td>
                <td><input type="text" name="username" id="username" value="" placeholder="Username" required="required" onchange="checkuser()"><br></td>
                <td><span id="muser"> </span></td>
            </tr>
            <tr>
                <td><label for="">Password :</label></td>
                <td><input type="password" name="password" id="password" value="" placeholder="Password" required="required"><br></td>
            </tr>
            <tr>
                <td><label for="">Konfirm Password :</label></td>
                <td><input type="password" name="kpassword" id="kpassword" value="" placeholder="Re-Enter Password" required="required" onchange="check()"><br></td>
                <td><span id='message'></span></td>

            </tr>
            <tr>
                <td><label for="">Nama Lengkap :</label></td>
                <td><input type="text" name="nama_lengkap" value="" placeholder="Nama Lengkap" required="required"><br></td>
            </tr>
            <tr>
                <td><label for="">Email :</label></td>
                <td><input type="email" name="email" value="" placeholder="Email" required="required"><br></td>
            </tr>
            <tr>
                <td><label for="">Level :</label></td>
                <td><input type="radio" name="level" value="admin" placeholder="" checked="checked">Admin
                <input type="radio" name="level" value="operator" placeholder="" >Operator
                </td>
            </tr>
            <tr>
                <td><label for="">Status :</label></td>
                <td><input type="radio" name="status" value="aktif" placeholder="" checked="checked">Aktif
                <input type="radio" name="status" value="non-aktif" placeholder="">Non-Aktif
                </td>
            </tr>
            <tr>
                <td><input type="submit" id="bsubmit" name="" value="SIMPAN" disabled="">
                <input type="submit" name="" value="BATAL">
                </td>
            </tr>
        </table>
    </form>
</section>
    <script src="jquery-3.1.1.min.js"></script>

</body>
</html>