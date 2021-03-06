<?php
include 'koneksi.php';
include 'cek_session.php';
if ($_GET['list']=="list") {
  $archivkomentar="active";
} else {
$komentar="active";
}
$id=$_GET['id'];
$sql="SELECT tabel_berita.id_berita,tabel_berita.judul_berita,tabel_komentar.* FROM tabel_berita INNER JOIN tabel_komentar ON tabel_berita.id_berita = tabel_komentar.id_berita WHERE tabel_komentar.status='T'";
$r = $connection->query($sql);
$data = $r->fetch_array();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Ndes' MOVIE - Edit Komentar</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
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
            <h3><i class="fa fa-angle-right"></i>Edit Kategori</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i>Edit Komentar</h4>
                      <form class="form-horizontal style-form" action="update.php?jenis=komentar" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                      <input type="hidden" name="id" id="input_id" value="<?php echo $data['id'] ?>" placeholder="">


                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="nama" id="nama" value="<?php echo $data['nama']; ?>" placeholder="nama" disabled>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="email" id="email" value="<?php echo $data['email']; ?>" placeholder="email" disabled>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Judul Berita</label>
                            <div class="col-sm-10">
                              <input class="form-control" name="judul_berita" id="judul_berita" value="<?php echo $data['judul_berita']; ?>" placeholder="judul_berita" disabled>
                            </div>
                          </div>


                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Isi Komentar</label>
                            <div class="col-sm-10">
                              <textarea class="form-control" rows="7" name="isi_komentar" id="isi_komentar" placeholder="isi komentar" style="resize: none"><?php echo $data['isi_komentar']; ?></textarea>
                            </div>
                          </div>

                          <div style="margin-left: 83%;">
                  <button type="submit" class="btn btn-success">Simpan</button>
                  <a href="<?php if ($_GET['list']=="list") {
                              echo "listarchiv.php?arsip=komentar";
                            } else {
                            echo "listkoment.php";
                            } ?>"><button type="button" class="btn btn-danger">Batal</button></a>
              </div>



                      </form>
                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php
        include "footer.php";
      ?>
      <!--footer end-->
  </section>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>



  </body>
</html>
