<?php
include 'koneksi.php';
include 'cek_session.php';
$user="active";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Ndes' MOVIE - Buat User</title>

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
            <h3><i class="fa fa-angle-right"></i> Buat User</h3>

            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Buat  User</h4>
                      <form class="form-horizontal style-form" action="add.php?jenis=user" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

                          <div class="col-lg-12 form-group">

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" id="username" value="" placeholder="username">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password" id="password" value="" placeholder="password">
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Re-Password</label>
                              <div class="col-sm-10">
                                  <input type="password" class="form-control" name="repassword" id="re-password" value="" placeholder="re-password">
                              </div>
                          </div>

                          <!-- <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="level" id="level" value="" placeholder="level">
                              </div>
                          </div> -->

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Level</label>
                              <div class="col-sm-10">
                                  <select name="level" id="select">
                                    <option value="admin">Admin</option>
                                    <option value="penulis">Penulis</option>
                                    <option value="editor">Editor</option>
                                  </select>
                              </div>
                          </div>

                          </div>
                          <div style="margin-left: 83%;">
                  <button type="submit" class="btn btn-success">Tambah</button>
                  <a href="list_user.php"><button type="button" class="btn btn-danger">Batal</button></a>
              </div>


                        <!-- <input type="submit" id="bsubmit" name="" value="SIMPAN" > -->

                      </form>
                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->

    </section>
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
