<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        @if(!empty(Auth::user()->profile->profile_pic))
        <img src="{{asset('public/storage/profile-pictures/'.Auth::user()->profile->profile_pic)}}" class="img-responsive img-circle" height="10px;" width="10px;" alt="User Image"
        >
        @else
        Image Donot Exist
        @endif
      </div>
      <div class="pull-left info">
        <p>{{Auth::user()->fullname}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>Online</a>
      </div>
    </div>
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <br>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">PAGES</li>
      <li><a href="{{route('users')}}"><i class="fa fa-user text-aqua"></i> <span>Users</span></a></li>

      <li><a href="{{route('services')}}"><i class="fa fa-bars text-aqua"></i> <span>Services</span></a></li>

      <li><a href="{{route('projects')}}"><i class="fa fa-bars text-aqua"></i> <span>Projects</span></a></li>
      <li><a href="{{route('resources')}}"><i class="fa fa-bars text-aqua"></i> <span>Resources</span></a></li>

      <li><a href="{{route('aboutus')}}"><i class="fa fa-bars text-aqua"></i> <span>About Us</span></a></li>

      <li><a href="{{route('contacts')}}"><i class="fa fa-bars text-aqua"></i> <span>Contact Emails</span></a></li>
      <li><a href="{{route('careers')}}"><i class="fa fa-bars text-aqua"></i> <span>Careers</span></a></li>

      <!-- <li><a href=""><i class="fa fa-bars text-aqua"></i> <span>Transactions</span></a></li> -->
      
   <!--   
      <li class="treeview">
         <a href="#">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           <span class="pull-right-container">
             <i class="fa fa-angle-left pull-right"></i>
           </span>
         </a>
         <ul class="treeview-menu" style="display: none;">
           <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
           <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
         </ul>
       </li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
