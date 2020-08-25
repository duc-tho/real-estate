<nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
          <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
               <a href="{{ route('admin') }}" class="nav-link">Trang chủ</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
               <a href="{{ route('admin') }}" class="nav-link">Dashboard</a>
          </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
               <a class="nav-link" data-toggle="dropdown" href="#">
                    <img height="24px" src="{{ asset(Auth::user()['ProfileImage']) }}" class="img-circle" alt="User Image">
               </a>
               <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">{{ Auth::user()['FirstName'] }}</span>

                    <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer">
                         <i class="fas fa-sign-out-alt mr-2"></i>
                         Logout
                    </a>
               </div>
          </li>
     </ul>
</nav>
<!-- /.navbar -->
