<?php 
    include 'koneksi.php';

    $id=$_GET['id'];
    $sql = "UPDATE tabel_berita SET dibaca=dibaca+1 WHERE id_berita='$id'";
     
    if ($connection->query($sql) === TRUE) {
           
    } else {
                echo "Error: " . $sql . "<br>" . $connection->error;
    }

     
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'header.php';
     ?>
        <!-- ISI -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 isi">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <?php 
                                $artikeldepan=mysqli_query($connection, "SELECT * FROM tabel_berita WHERE id_berita=$id");
                                while ($r=mysqli_fetch_array($artikeldepan)) {

                                    echo "<center><img src=images/$r[gbr_berita] alt='' class='poster'></center>";
                                    echo "<center><h1>$r[judul_berita]</h1></center>"; 
                                    echo "$r[isi_berita]";
                                }
                            ?>

                           
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 latest-movies">
                    <h1>Latest Movies</h1>
                    <div class="row">


                           <?php 
                            $artikeldepan=mysqli_query($connection, "SELECT * FROM tabel_berita WHERE status=1 ORDER BY id_berita  DESC LIMIT 6");
                            while ($r=mysqli_fetch_array($artikeldepan)) {
                                echo "<a href=single-page.php?id=$r[id_berita] class='col-xs-12 col-sm-12 col-md-12 col-lg-12 kolom'><div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                <img src=images/$r[gbr_berita] alt=''></div><div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>";

                                echo "<h4>$r[judul_berita]</h4>";
                                $lengkap = "$r[isi_berita]";
                                $penggalan = substr($lengkap, 0, 150);  
                                echo "<p>" . $penggalan . "</p>" . "....";
                                echo "</div></a>";
                                
                            }
                            ?>

                        <center><a href="morepage-latest.html"><button type="button" class="btn btn-success">More</button></a></center>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer" id="footer">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <center><h2>About</h2></center>
                <p><ol>
                    <li>Website ini hanya bertujuan untuk mendownload film. website ini tidak bertujuan untuk streaming / menonton langsung film yang diinginkan.</li>
                    <li>Website ini hanya menampilkan film-film yang berkualitas bluray. Tidak ada pilihan kualitas dari video tersebut.</li>
                </ol></p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <h2>Contact Us</h2>
                <ul>
                    <li>M.Ilfan Zulkarnain</li>
                    <li>Rendi</li>
                    <li>Antonius</li>
                    <li>Maulana</li>
                    <li>Desy Amalia</li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copyright">
            <p>copyright 2016 &copy;Kelompok1</p>
        </div>
    </body>
</html>