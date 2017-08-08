<?php 
    include 'koneksi.php';
 ?>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Download Lah</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/bootstrap-3.3.5-dist/css/bootstrap.min.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/font-awesome-4.6.3/css/font-awesome.min.css">

        <!-- lightslider -->
        <link rel="stylesheet" href="assets/lightslider/css/lightslider.css">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">

        <!-- jQuery -->
        <script src="assets/jquery/jquery.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="assets/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

        <!-- lightslider Javascipt -->
        <script src="assets/lightslider/js/lightslider.js"></script>
        <script src="js/runlightslider.js"></script>
    </head>
    <body>
        <!-- HEADER -->
        <div class="header">
            <ul id="autoplay" class="content-slider">
                 <?php 
                    $artikelhot=mysqli_query($connection, "SELECT * FROM tabel_berita WHERE status=1 ORDER BY dibaca DESC LIMIT 6");
                    while ($r=mysqli_fetch_array($artikelhot)) {
                        echo "<li><a href=single-page.php?id=$r[id_berita]>";
                        echo "<img src=images/$r[gbr_berita] alt=''> </a>";
                        echo "</li>"; 
                        
                    }
                ?>
                
            </ul>
        </div>
        <!-- NAVIGASI -->
        <div class="navigasi">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand" href="index.html">Title</a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.php" class="padding">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle padding" data-toggle="dropdown">Genre <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                <?php 
                                    $listkategori=mysqli_query($connection, "SELECT * FROM tabel_kategori");
                                    while ($r=mysqli_fetch_array($listkategori)) {
                                        echo "<li><a href=category-page.php?id=$r[id_kategori]> $r[kategori]</a></li>";
                                    }
                                 ?>
                                </ul>
                            </li>
                            
                            <li><a href="#footer" class="padding">About</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle padding" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><form class="navbar-form navbar-left" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>