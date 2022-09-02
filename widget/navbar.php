    <nav class="main-header navbar navbar-expand dark-mode ">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
        </li>
        <li class="nav-item d-sm-inline-block">
          <p class="nav-link">Niguse</p>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="?listUsers" class="nav-link">Utilisateurs</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments text-white"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell text-white"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt text-white"></i>
          </a>
        </li>
      </ul>
    </nav>
        
    <aside class="main-sidebar sidebar-light-primary elevation-4 ">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="upload/logo/<?php echo  $appData[0]["logo"] ?>" alt="logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light"><?php echo $appData[0]["name"] ?></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <div class="col-lg-12 col-12">
              <div class="small-box bg-success">
                <div class="inner" style="line-height: 1px;padding-top:25px">
                  <p>Mode payant dans :</p>
                  <h3><span id="day">29</span><sup style="font-size: 20px">jours</sup></h3>
                  <p><span id="hour">24</span> : <span id="min">60</span> : <span id="sec">60</span><sup style="font-size: 15px"> sec</sup></p>
                  
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                  Activer mon compte <i class="fas fa-arrow-circle-right"></i>
                </a>
              </div>
            </div>
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-home  text-purple"></i>
                    <p class="text">Home</p>
                </a>
            </li>
          
            <li class="nav-item">
                <a href="index.php?profile=1" class="nav-link">
                    <i class="nav-icon fas fa-user  text-purple"></i>
                    <p class="text">Profil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?inbox" class="nav-link">
                    <i class="nav-icon fas fa-comment  text-purple"></i>
                    <p class="text">Messagerie</p>
                </a>
            </li> 
            <!-- <li class="nav-item">
                <a href="index.php?profile=1&connected" class="nav-link">
                    <i class="nav-icon fas fa-user text-purple"></i>
                    <p class="text">Profile</p>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="index.php?search" class="nav-link">
                    <i class="nav-icon fas fa-search text-purple"></i>
                    <p class="text">Recherche</p>
                </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-lock text-purple"></i>
                <p>
                  Admin Options
                  <i class="fas fa-angle-left right "></i>
                  <!-- <span class="badge badge-info right">6</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview ml-2">
                <li class="nav-item">
                  <a href="?listUsers" class="nav-link">
                    <i class="fas fa-users nav-icon"></i>
                    <p>Utilisateurs</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview ml-2">
                <li class="nav-item">
                  <a href="?edit" class="nav-link">
                    <i class="fas fa-pen nav-icon"></i>
                    <p>Site & Publicite </p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
                <a href="index.php?deconnexion" class="nav-link">
                    <i class="nav-icon fas fa-circle text-danger"></i>
                    <p class="text">Deconnexion</p>
                </a>
            </li>
  </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>