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

    <title>Ndes' MOVIE - Buat Artikel</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" type="text/css" href="assets/datepicker/css/bootstrap-datepicker.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" /> -->

    <!-- Custom styles for this template -->
    <link href="assets/css/style1.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link href="assets/css/select2.css" rel="stylesheet">
    <script src="assets/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea',
      plugins: "image, imagetools, advlist, code, media, link, colorpicker, paste, table, textcolor",
      media_live_embeds: true
    });</script>

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
            <h3><i class="fa fa-angle-right"></i> Buat Artikel</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Buat  Artikel</h4>
                      <form class="form-horizontal style-form" action="add.php?jenis=artikel" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                          <div class="col-lg-12 form-group">
                          <div class="">
                            <label class="col-sm-1 col-sm-1 control-label">Kategori</label>
                              <div class="col-sm-2">
                              <select class="form-control" name="kategori_artikel" id="select" style="height: 0">
                                <?php
                                  $kategori=mysqli_query($connection, "SELECT * FROM tabel_kategori");
                                  while ($r=mysqli_fetch_array($kategori)) {
                                    echo "<option value=$r[id_kategori]> $r[kategori]</option>";
                                  }
                                ?>
                              </select>
                              </div>
                          </div>

                          <div class="" style="float:right;">
                              <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="judul_artikel" id="judul_artikel" value="" placeholder="judul artikel">
                              </div>
                          </div>

                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Isi Artikel</label>
                              <div class="col-sm-10">
                                  <textarea class="form-control" rows="10" name="isi_artikel" id="isi_artikel" placeholder="isi artikel" style="resize: none"></textarea>
                              </div>
                          </div>



                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar Artikel</label>
                              <div class="col-sm-10">
                                  <input type="file" class="#" name="foto" id="foto" value="">
                              </div>
                          </div>

                                  <input type="hidden" class="form-control" name="penulis" id="penulis" value="<?php echo $sess ?>" placeholder="penulis">


                          <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Penulis Artikel</label>
                            <div class="col-sm-10">
                                  <input readonly  class="form-control" name="penulis" id="penulis" value="<?php echo $sess ?>" placeholder="penulis">
                            </div>
                          </div>


                          <div style="margin-left: 83%;">
                  <button type="submit" class="btn btn-success">Tambah</button>
                  <a href="list_article.php"><button type="button" class="btn btn-danger">Batal</button></a>
              </div>


                        <!-- <input type="submit" id="bsubmit" name="" value="SIMPAN" > -->

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

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
  <!-- <script type="text/javascript" src="assets/datepicker/js/bootstrap-datepicker.js"></script> -->
  <!-- <script type="text/javascript" src="assets/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
<!--
    <script type="text/javascript">
                    $(".form_datetime").datetimepicker({
                        format: "dd MM yyyy - hh:ii",
                        autoclose: true,
                        todayBtn: true,
                        pickerPosition: "top-right"
                    });
  </script> -->
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    <script src="assets/js/extra/select2.js"></script>
    <script src="assets/js/extra/select2script.js"></script>

    <!--script for this page-->
    <!-- <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script> -->

  <!--custom switch-->
  <!-- <script src="assets/js/bootstrap-switch.js"></script> -->

  <!--custom tagsinput-->
  <!-- <script src="assets/js/jquery.tagsinput.js"></script> -->

  <!--custom checkbox & radio-->

  <!-- <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script> -->
  <!-- <script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script> -->

  <!-- <script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script> -->


  <!-- <script src="assets/js/form-component.js"></script> -->

 <!--  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script> -->

  </body>
</html>
