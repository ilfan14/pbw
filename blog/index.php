
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
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 hot-movies">
                            <h1>Hot Movies</h1><span class="garis"></span>

                            <?php 
                                $artikeldepan=mysqli_query($connection, "SELECT * FROM tabel_berita WHERE status=1 LIMIT 6 ");
                                while ($r=mysqli_fetch_array($artikeldepan)) {
                                    echo "<a href=single-page.php?id=$r[id_berita] class='col-xs-4 col-sm-4 col-md-4 col-lg-4 kolom'>";
                                    echo "<img src=images/$r[gbr_berita] alt=''>";
                                    echo "<h4>$r[judul_berita]</h4></a>"; 
                                    
                                }
                            ?>

                            
                        </div>
                        <center><a href="all-movie.php"><button type="button" class="btn btn-success">More</button></a></center>
                    </div>
                </div>
                <?php 
                    include 'right-sidebar.php';
                ?>
            </div>
        </div>
        <!-- FOOTER -->
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