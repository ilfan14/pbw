<?php
include 'koneksi.php';
include 'cek_session.php';
$artikel="active";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

  <title>Ndes' MOVIE - Movie -Movie Premier</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!--external css-->
  <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet">

  </head>

    <body>

      <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php
      include "header.php";
      ?>

      <?php
      include "sidebar.php";
      ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
         <h3><i class="fa fa-angle-right"></i> DAFTAR ARTIKEL</h3>
         <div class="row">

           <div class="col-md-12">
            <div class="content-panel">
             <h4><i class="fa fa-angle-right"></i> Tabel Artikel</h4>
             <hr>
             <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Judul Artikel</th>
                  <th>Penulis</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($sess1=="admin") {

                  $kategori=mysqli_query($connection, "SELECT tabel_berita.*, tabel_kategori.kategori FROM tabel_berita INNER JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_berita.id_kategori ORDER BY tabel_berita.judul_berita ASC");
                  $nomor = null;
                  while ($r=mysqli_fetch_array($kategori)) {
                    if ($r > 0) {
                    $nomor += 1;
                    echo "<tr> <td>";
                    echo $nomor;
                    echo "</td> <td> $r[judul_berita] </td>";
                    echo "<td> $r[penulis] </td>";
                    echo "<td> $r[kategori] </td>";
                    echo "<td> $r[tanggal] </td>";
                    echo "<td> <a href=edit_article.php?jenis=artikel&id=$r[id_berita]&list=artikel><button type='button' class='btn btn-info'>Edit</button></a> |
                        <a href=\"delete.php?jenis=artikel&id=$r[id_berita]\"
                        onclick=\"return confirm('Anda yakin akan menghapus $r[judul_berita]?')\"><button type='button' class='btn btn-danger'>Hapus</button></a> </td> </tr>";
                      }else {
                        echo "<td colspans=6>Tidak ada data</td>";
                      }
                  }
                } else if($sess1=="editor") {
                    $kategori=mysqli_query($connection, "SELECT tabel_berita.*, tabel_kategori.kategori FROM tabel_berita INNER JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_berita.id_kategori WHERE tabel_berita.status=0 ORDER BY tabel_berita.judul_berita ASC");
                  $nomor = null;
                  if (mysqli_num_rows($kategori) > 0) {
                  while ($r=mysqli_fetch_array($kategori)) {
                    $nomor += 1;
                    echo "<tr> <td>";
                    echo $nomor;
                    echo "</td> <td> $r[judul_berita] </td>";
                    echo "<td> $r[penulis] </td>";
                    echo "<td> $r[kategori] </td>";
                    echo "<td> $r[tanggal] </td>";
                    echo "<td> <a href=edit_article.php?id=$r[id_berita]&list=artikel><button type='button' class='btn btn-info'>Edit</button></a> |
                        <a href=\"delete.php?jenis=artikel&id=$r[id_berita]\"
                        onclick=\"return confirm('Anda yakin akan menghapus $r[judul_berita]?')\"><button type='button' class='btn btn-danger'>Hapus</button></a> |
                        <a href=\"konfirm.php?jenis=artikel&id=$r[id_berita]\"
                        onclick=\"return confirm('Konfirmasi Berita $r[judul_berita]?')\"><button type='button' class='btn btn-success'>Konfirmasi</button></a></td> </tr>";

                  }
                } else {
                        echo "<td style='text-align:center' colspan='6'>Tidak ada data</td>";
                  }
                } else if($sess1=="penulis") {
                  $kategori=mysqli_query($connection, "SELECT tabel_berita.*, tabel_kategori.kategori FROM tabel_berita INNER JOIN tabel_kategori ON tabel_kategori.id_kategori = tabel_berita.id_kategori WHERE tabel_berita.status=0 AND tabel_berita.penulis='$sess' ORDER BY tabel_berita.judul_berita ASC");
                  $nomor = null;
                  if (mysqli_num_rows($kategori) > 0) {
                  while ($r=mysqli_fetch_array($kategori)) {
                    $nomor += 1;
                    echo "<tr> <td>";
                    echo $nomor;
                    echo "</td> <td> $r[judul_berita] </td>";
                    echo "<td> $r[penulis] </td>";
                    echo "<td> $r[kategori] </td>";
                    echo "<td> $r[tanggal] </td>";
                    echo "<td> <a href=edit_article.php?id=$r[id_berita]&list=artikel><button type='button' class='btn btn-info'>Edit</button></a> |
                        <a href=\"delete.php?jenis=artikel&id=$r[id_berita]\"
                        onclick=\"return confirm('Anda yakin akan menghapus $r[judul_berita]?')\"><button type='button' class='btn btn-warning'>Hapus</button></a> </td> </tr>";
                  }
                  } else {
                        echo "<td style='text-align:center' colspan='6'>Tidak ada data</td>";
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div><!-- /col-md-12 -->

      </div><!-- row -->

    </section>
  </section>

  <!--main content end-->
  <!--footer start-->
  <?php
  include "footer.php";
  ?>
  <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->

<script>
  //custom select box
  $(function(){
      $('select.styled').customSelect();
  });
</script>

</body>
</html>
