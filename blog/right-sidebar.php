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

                       
                        <center><a href="all-movie.php"><button type="button" class="btn btn-success">More</button></a></center>
                    </div>
                </div>