<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->

     <a href="{{route('admin')}}" class="brand-link">
          <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">BDS Admin</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

          <!-- Sidebar Menu -->
          <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item menu-open">
                         <a href="{{ route('admin') }}" class="nav-link">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>
                                   Dashboard
                              </p>
                         </a>
                    </li>
                    <li class="nav-header">Quản Lý</li>
                    <li class="nav-item">
                         <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-map-signs"></i>
                              <p>
                                   Khu Vực
                                   <i class="fas fa-chevron-circle-right right"></i>
                              </p>
                         </a>
                         <ul class="nav nav-treeview">
                              <li class="nav-item">
                                   <a href="{{ route('adminCity') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Thành Phố</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="{{ route('adminDistrict') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Quận / Huyện</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="{{ route('adminArea') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Phường / Xã</p>
                                   </a>
                              </li>
                              <li class="nav-item">
                                   <a href="{{ route('adminStreet') }}" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Đường</p>
                                   </a>
                              </li>
                         </ul>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('adminCategory') }}" class="nav-link">
                              <i class="nav-icon fas fa-stream"></i>
                              <p>
                                   Danh mục
                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('adminPost') }}" class="nav-link">
                              <i class="nav-icon fas fa-hotel"></i>
                              <p>
                                   Bất Động Sản
                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('adminProject') }}" class="nav-link">
                              <i class="nav-icon fas fa-project-diagram"></i>
                              <p>
                                   Dự Án
                              </p>
                         </a>
                    </li>
                    <li class="nav-item">
                         <a href="{{ route('adminUser') }}" class="nav-link">
                              <i class="nav-icon fas fa-user-friends"></i>
                              <p>
                                   Người Dùng
                              </p>
                         </a>
                    </li>
               </ul>
          </nav>
     </div>
</aside>
