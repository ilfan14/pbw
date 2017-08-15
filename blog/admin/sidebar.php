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
                  <li class="mt <?php echo $dashboard ?>">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $artikel ?>">
                      <a href="javascript:;" >
                          <i class="fa fa-pencil-square-o"></i>
                          <span>Article</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_article.php">Buat Artikel</a></li>
                          <li><a  href="list_article.php">List Artikel</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu <?php echo $kategori ?>">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Kategori</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_kategori.php">Buat Kategori</a></li>
                          <li><a  href="list_kategori.php">List Kategori</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu <?php echo $user ?>">
                      <a href="javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Manajemen User</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_user.php">Buat User</a></li>
                          <li><a  href="list_user.php">List User</a></li>
                      </ul>
                  </li>
                  <?php } else if ($sess1=='penulis')  { ?>
                    <li class="mt <?php echo $dashboard ?>">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $artikel ?>">
                      <a href="javascript:;" >
                          <i class="fa fa-pencil-square-o"></i>
                          <span>Article</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_article.php">Buat Artikel</a></li>
                          <li><a  href="list_article.php">List Artikel</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu <?php echo $kategori ?>">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Kategori</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="create_kategori.php">Buat Kategori</a></li>
                          <li><a  href="list_kategori.php">List Kategori</a></li>
                      </ul>
                  </li>

                  <?php } else if ($sess1=='editor')  { ?>
                  <li class="mt <?php echo $dashboard ?>">
                      <a href="index.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $artikel ?>">
                      <a href="list_article.php" >
                          <i class="fa fa-pencil-square-o"></i>
                          <span>Article</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $kategori ?>">
                      <a href="list_kategori.php" >
                          <i class="fa fa-tasks"></i>
                          <span>Kategori</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $archiv ?>">
                      <a href="listarchiv.php">
                          <i class="fa fa-file-archive-o"></i>
                          <span>Archivment</span>
                      </a>
                  </li>

                  <li class="sub-menu <?php echo $komentar ?>">
                      <a href="listkoment.php">
                          <i class="fa fa-file-text-o"></i>
                          <span>Komentar</span>
                      </a>
                  </li>
                  <?php } ?>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->