<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <link rel="icon" type="image/png" href="{{url('/')}}/assets/front/images/footer-logo-2.jpg"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{url('/')}}/assets/dist/css/fontawesome.css">

  <!-- overlayScrollbars -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/')}}/assets/dist/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{url('/')}}/assets/dist/css/dataTables.bootstrap4.min.css">


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  
  <!-- Navbar -->
  <nav class="main-header   navbar-dark">
    <!-- Left navbar links -->
    <div class="navbar-expand navbar hedtop">
      <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('signout')}}" onclick="return confirm('Are you sure to logout?')" class="nav-link">
          <span style="color: red;"><i class="fa fa-power-off" aria-hidden="true"></i>Sign Out</span>
        </a>

        <a href="{{url('/')}}">
          <button class="btn btn-warning">Go Home</button>
        </a>

      </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->


  