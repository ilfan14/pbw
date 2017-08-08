 <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">

              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $sess ?></h5>
                  <?php if ($sess1=='admin') { ?>
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Article</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_article.php">Buat Artikel</a></li>
                          <li><a  href="list_article.php">List Artikel</a></li>
                          <li><a  href="panels.html">Comming soon</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Kategori</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_kategori.php">Buat Kategori</a></li>
                          <li><a  href="list_kategori.php">List Kategori</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Manajemen User</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_user.php">Buat User</a></li>
                          <li><a  href="list_user.php">List User</a></li>
                          <li><a  href="panels.html">Comming soon</a></li>
                      </ul>
                  </li>
                  <?php } else if ($sess1=='penulis')  { ?>
                    <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Article</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_article.php">Buat Artikel</a></li>
                          <li><a  href="list_article.php">List Artikel</a></li>
                          <li><a  href="panels.html">Comming soon</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Kategori</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_kategori.php">Buat Kategori</a></li>
                          <li><a  href="list_kategori.php">List Kategori</a></li>
                      </ul>
                  </li>

                  <?php } else if ($sess1=='editor')  { ?>
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Article</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="list_article.php">List Artikel</a></li>
                          <li><a  href="panels.html">Comming soon</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span>Kategori</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="list_kategori.php">List Kategori</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="listarchiv.php">
                          <i class="fa fa-desktop"></i>
                          <span>Archivment</span>
                      </a>
                  </li>
                  <?php } ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->