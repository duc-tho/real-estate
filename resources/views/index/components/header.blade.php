<div class="bravo_topbar">
     <div class="container-fluid w90">
          <div class="row">
               <div class="col-12">
                    <div class="content">
                         <div class="topbar-left d-none d-sm-block">
                              <div class="top-socials">
                                   <a href="https://www.facebook.com" title="Facebook" class="fab fa-facebook-f"></a>
                                   <a href="" title="Twitter" class="fab fa-twitter"></a>
                                   <a href="https://youtube.com" title="Youtube" class="fab fa-youtube"></a>
                              </div>
                              <span class="line"></span>
                              <a href="mailto:contact@flex-home.com">contact@eso.vn</a>
                         </div>
                         <div class="topbar-right">
                              <div class="padtop10 mb-2 language">
                              </div>

                              <ul class="topbar-items">
                                   @if (!Auth::check())
                                   <li class="login-item">
                                        <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a>
                                   </li>
                                   <li class="login-item">
                                        <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Đăng ký</a>
                                   </li>
                                   @else
                                   <li class="dropdown">
                                        <span class="d-flex ouline-none text-light justify-content-center align-items-center" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <a data-toggle="dropdown" href="#" aria-expanded="false">
                                                  <img height="17px" src="{{ asset(Auth::user()['ProfileImage']) }}" class="img-circle" alt="User Image">
                                             </a>
                                             <span class="font-weight-bold">&nbsp; {{ Auth::user()['FirstName'] }}</span>
                                        </span>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                             <a href="{{ route('logout') }}" class="dropdown-item dropdown-footer text-danger">
                                                  <i class="fas fa-sign-out-alt mr-2"></i>
                                                  Đăng Xuất
                                             </a>
                                        </div>
                                   </li>
                                   @endif
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<header class="topmenu bg-light">
     <div class="container-fluid w90">
          <div class="row">
               <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                         <a class="navbar-brand" href="{{ route('home') }}">
                              <img src="{{ asset('dist/img/logobds.png') }}" class="logo" height="40" alt="">
                         </a>
                         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="fas fa-bars"></span>
                         </button>
                         <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                              <ul class="navbar-nav justify-content-end">
                                   <li class="nav-item ">
                                        <a class="nav-link " href="{{ route('project') }}" target="_self">
                                             Dự Án
                                        </a>
                                   </li>
                                   <li class="nav-item ">
                                        <a class="nav-link " href="https://bdsnew.eso.vn/properties" target="_self">
                                             BDS Bán
                                        </a>
                                   </li>
                                   <li class="nav-item ">
                                        <a class="nav-link " href="https://bdsnew.eso.vn/news" target="_self">
                                             BDS Cho Thuê
                                        </a>
                                   </li>
                                   <li class="nav-item ">
                                        <a class="nav-link " href="https://bdsnew.eso.vn/careers" target="_self">
                                             Tin Tức
                                        </a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link " href="https://bdsnew.eso.vn/contact" target="_self">
                                             Liên Hệ
                                        </a>
                                   </li>
                              </ul>

                              <a class="btn btn-primary add-property" href="https://bdsnew.eso.vn/account/properties">
                                   <i class="fas fa-plus-circle"></i> Add Property
                              </a>
                         </div>
                    </nav>
               </div>
          </div>
     </div>
</header>
