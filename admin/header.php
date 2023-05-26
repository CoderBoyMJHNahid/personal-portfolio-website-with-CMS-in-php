<?php 
  include "includes/connect.php";
  session_start();
  if (!isset($_SESSION['username']) and !isset($_SESSION['pwd'])) {
    header("Location:index.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- ionic's -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- summer note -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="dist/css/style.css"/>
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>
    <a class="nav-link" href="includes/logout.php">Log Out</a>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Kailee Hardwick</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "dashboard.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="hero-section.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "hero-section.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Hero Section
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="who-am-i.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "who-am-i.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Who Am I?
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="what-i-do.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "what-i-do.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                What I Do?
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="service-boxs.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "service-boxs.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Consulting Services
              </p>
            </a>
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "protfolio-category.php" OR basename($_SERVER['PHP_SELF']) == "portfolio-image.php"){ echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "protfolio-category.php" OR basename($_SERVER['PHP_SELF']) == "portfolio-image.php"){ echo "active";} ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Portfolio
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="protfolio-category.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "protfolio-category.php"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="portfolio-image.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "portfolio-image.php"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Image</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item <?php if(basename($_SERVER['PHP_SELF']) == "clients.php" OR basename($_SERVER['PHP_SELF']) == "client-say.php"){ echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "clients.php" OR basename($_SERVER['PHP_SELF']) == "client-say.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Testimonial
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="clients.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "clients.php"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Reviews</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="client-say.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "client-say.php"){ echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>What They Say</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="footer_content.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "footer_content.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Footer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="setting.php" class="nav-link <?php if(basename($_SERVER['PHP_SELF']) == "setting.php"){ echo "active";} ?>">
              <i class="nav-icon fas fa-user"></i>
              <p>Setting</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
