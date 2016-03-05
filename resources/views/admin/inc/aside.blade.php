<?php $role =  Auth::user()->role; ?>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <h3 class="text-center"><span class="brand-text font-weight-light">Admin</span></h3>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
         <!--  <img src="<?php //echo base_url()?>assets/dist/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
       </div>
       <div class="info">
        <a href="{{url('/')}}" class="d-block">Home</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links -->


        <li class="nav-item">
          <a href="{{url('/')}}/admin/dashboard" class="nav-link">
            <i class="fa fa-home fcustom" aria-hidden="true"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>



        <li class="nav-item">
          <a href="{{url('/')}}/admin/buytoollist" class="nav-link">
           <i class="fas fa-tools fcustom"></i>
            <p>
              Buy Tools
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        @if($role=='Admin')
        


        <li class="nav-item">
          <a href="{{url('/')}}/admin/citylist" class="nav-link">
          <i class="fas fa-map-marker-alt fcustom"></i>
            <p>
              Uk City
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>





        <li class="nav-item">
          <a href="{{url('/')}}/admin/userlist" class="nav-link">
          <i class="fas fa-users fcustom"></i>
            <p>
              Property Owners 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('/')}}/admin/reviewlist" class="nav-link">
          <i class="fas fa-star fcustom"></i>
            <p>
              Review Listing 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{url('/')}}/admin/buyerlist" class="nav-link">
          <i class="fas fa-users fcustom"></i>
            <p>
              Site Visitors 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>



        <li class="nav-item">
          <a href="{{url('/')}}/admin/propertylist" class="nav-link">
         <i class="fas fa-newspaper fcustom"></i>
            <p>
              Property Listing 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>





        <li class="nav-item">
          <a href="{{url('/')}}/admin/adcostlist" class="nav-link">
          <i class="fas fa-list fcustom"></i>
            <p>
              Ad Cost Manage
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>




         <li class="nav-item">
          <a href="{{url('/')}}/admin/fserviceproviderlist" class="nav-link">
            <i class="fa fa-rocket fcustom" aria-hidden="true"></i>
            <p>
              Service Providers
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{url('/')}}/admin/alertlist" class="nav-link">
            <i class="fa fa-bell fcustom" aria-hidden="true"></i>
            <p>
              Alert Services
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        



        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="fas fa-shopping-cart fcustom"></i>
            <p>
              Payment History
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{url('/')}}/admin/newslist" class="nav-link">
         <i class="fas fa-newspaper fcustom"></i>
            <p>
              News Manage
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>




        @elseif($role=='Vendor')


         <li class="nav-item">
          <a href="{{url('/')}}/admin/propertylist" class="nav-link">
         <i class="fas fa-newspaper fcustom"></i>
            <p>
             Manage Property Listing 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        @elseif($role=='Buyer')
        <li class="nav-item">
          <a href="{{url('/')}}/admin/profile" class="nav-link">
         <i class="fas fa-newspaper fcustom"></i>
            <p>
             Profile 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="{{url('/')}}/admin/favlist" class="nav-link">
         <i class="fas fa-newspaper fcustom"></i>
            <p>
             Favourites List 
              <i class="right fas fa-angle-right"></i>
            </p>
          </a>
        </li>


        @endif















      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>