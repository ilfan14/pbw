<?php
    include 'koneksi.php';
    $home="active";
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
            <div class="#">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <?php
                                $artikeldepan=mysqli_query($connection, "SELECT * FROM tabel_berita WHERE id_berita=$id");
                                while ($r=mysqli_fetch_array($artikeldepan)) {
                                    echo "<center><h1>$r[judul_berita]</h1></center>";
                                    echo "<center><img src=images/$r[gbr_berita] alt='' class='poster'></center>  </br> ";
                                    echo "$r[isi_berita]";
                                }
                            ?>


                        </div>
                    </div>

                    <div class="mt" style="margin-top: 100px">
                      <div class="col-lg-12">
                          <div class="form-panel">
                              <h4 class="mb"><i class="fa fa-angle-right"></i> KOMEN</h4>

                              <?php
                                $komentar = mysqli_query($connection, "SELECT * FROM tabel_komentar WHERE status='Y' AND id_berita=$id ORDER BY tanggal");
                                while ($r=mysqli_fetch_array($komentar)) {
                                    ?>
                                    <div class="container-fluid" style="border: 1px solid #cac1c1;border-radius: 10px;margin-top:1%;">
                                        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1" style="margin:10px">

                                            <img src="admin/assets/img/friends/fr-05.jpg" alt="" width="150%" height="100%">
                                        </div>
                                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10" style="margin-top: 10px">

                                            <?php
                                            echo " <label class=control-label style=font-family: -webkit-body;>$r[nama]</label>";
                                            echo "<label class=control-label style=float:right;font-family: -webkit-body;>$r[tanggal]</label>";
                                            echo "</br>";
                                            echo "<label class=control-label style='font-weight:100;font-family: -webkit-body;'>$r[isi_komentar]</label>";
                                            echo "</br>";
                                        echo "</div>";
                                    echo "</div>";
                                            }
                                           ?>

                                    </div>

                                      <div class="container-fluid" style="border: 1px solid #cac1c1;border-radius: 10px;margin-top: 65px;padding-bottom: 10px;">
                                    <h4 class="mb"><i class="fa fa-angle-right"></i> KOMEN</h4>
                                      <form class="form-horizontal style-form" action="admin/add.php?jenis=komen" method="POST" accept-charset="utf-8" style="margin-top: 2%;">

                                          <div class="col-lg-12 form-group">
                                          <?php
                                            $id=$_GET['id'];
                                           ?>
                                          <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>" >

                                          <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                              <div class="col-sm-10">
                                                  <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="nama" required="required">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                                              <div class="col-sm-10">
                                                  <input type="email" class="form-control" name="email" id="email" value="" placeholder="email" required="required">
                                              </div>
                                          </div>

                                          <div class="form-group">
                                              <label class="col-sm-2 col-sm-2 control-label">Komentar</label>
                                              <div class="col-sm-10">
                                                  <textarea class="form-control" rows="5" name="komentar" id="komentar" placeholder="Komentar" style="resize: none" required="required"></textarea>
                                              </div>
                                          </div>

                                          </div>
                                          <div style="margin-left: 83%;">
                                            <button type="submit" class="btn btn-success">Komen</button>
                                          </div>
                                      </form>
                                    </div>
                            </div>
                        </div>
                      </div>

                </div>


                <?php
                    include 'right-sidebar.php';
                ?>
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