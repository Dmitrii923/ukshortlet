<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

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
        <a href="{{url('/')}}/admin/Authentication/logout" onclick="return confirm('Are you sure to logout?')" class="nav-link">SignOut</a>

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


  
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <div class="content-header">

      <div class="container-fluid">

        <div class="row mb-2">

          <div class="col-sm-6">

            <h1 class="m-0 text-dark">Dashboard</h1>

          </div><!-- /.col -->

          <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Dashboard</li>

            </ol>

          </div><!-- /.col -->

        </div><!-- /.row -->

      </div><!-- /.container-fluid -->

    </div>

    <!-- /.content-header -->



    <!-- Main content -->

    <section class="content">

 <div class="row">
   <div class="col-12">
  <center>
  <h3><font color="blue"></font></h3>
  </center>
  </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                
                <h3>0</h3>
                <p>Total Products</p>
              </div>
              <div class="icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <a href="admin/blogs" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

        

       <div class="col-lg-3 col-6">

            <div class="small-box bg-success">

              <div class="inner">
                
                <h3>0</h3>

                <p>Main Categories</p>

              </div>

              <div class="icon">

                <i class="lni lni-book"></i>

              </div>

              <a href="admin/parentcatlist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>



          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>0</h3>
                <p>Featured Products</p>
              </div>

              <div class="icon">

                <i class="lni lni-bookmark"></i>

              </div>

              <a href="admin/blogs" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-orange">
              <div class="inner">
                <h3>0</h3>
                <p>Sub Category</p>
              </div>

              <div class="icon">

                <i class="lni lni-bookmark"></i>

              </div>

              <a href="admin/categories" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

        </div>

    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

   <!-- anblik footer here -->