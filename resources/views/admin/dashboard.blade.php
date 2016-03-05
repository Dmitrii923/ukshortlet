@include('admin/inc/header')
@include('admin/inc/aside')
<?php $role =  Auth::user()->role; ?>


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
        @if($role=='Admin')

          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                
                <h3>{{$userres}}</h3>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <a href="{{url('/')}}/admin/userlist" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 




          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                $verifycount = DB::table('users')->where('isverify','1')->count();
                ?>
                <h3>{{$verifycount}}</h3>
                <p>Verified Users</p>
              </div>
              <div class="icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <a href="{{url('/')}}/admin/userlist" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 


          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                 <?php 
                $activeusers = DB::table('users')->where('status','1')->count();
                ?>
                <h3><?php echo $activeusers;?></h3>
                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <a href="{{url('/')}}/admin/userlist" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 


          <div class="col-lg-3 col-6">
            <div class="small-box bg-orange">
              <div class="inner">
                <?php 
                $verifycount = DB::table('users')->where('isverify','0')->count();
                ?>
                <h3>{{$verifycount}}</h3>
                <p>Unverified Users</p>
              </div>
              <div class="icon">
                <i class="lni lni-pencil-alt"></i>
              </div>
              <a href="{{url('/')}}/admin/userlist" class="small-box-footer">More info 
                <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 





        @elseif($role=="Vendor")

       <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$pres}}</h3>
                <p>Total Property Listing</p>
              </div>
              <div class="icon">
                <i class="lni lni-book"></i>

              </div>

              <a href="{{url('/')}}/admin/propertylist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          @endif



        </div>

    </section>

    <!-- /.content -->

  </div>
@include('admin/inc/footer')

  <!-- /.content-wrapper -->

   <!-- anblik footer here -->