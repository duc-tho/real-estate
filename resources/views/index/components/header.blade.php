<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>
    <link rel="canonical" href="https://flex-home.botble.com">
    <link rel="shortcut icon" href="https://flex-home.botble.com/storage/logo/favicon.png">

    <title>Sàn BDS - Real Estate site</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Global site tag (gtag.js) - Google Analytics -->

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-42586526-15');
</script>
<meta property="og:site_name" content="Sàn BDS">
<meta property="og:description" content="">
<meta property="og:url" content="sanbds.eso.vn">
<meta property="og:title" content="Sàn BDS - Real Estate site">
<meta property="og:type" content="article">
<meta name="twitter:title" content="Sàn BDS - Real Estate site">
<meta name="twitter:description" content="">

<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,600,700,800" rel="stylesheet" type="text/css">
    <!-- CSS Library-->

    <style>
        :root {
            --primary-color: rgb(29, 95, 111);
            --primary-color-hover: rgb(6, 58, 93);
        }

        body {
            font-family: 'Nunito Sans', sans-serif !important;
        }
    </style>
</head>
<body >

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
                                <li class="login-item">
                                    <a href="https://bdsnew.eso.vn/login"><i class="fas fa-sign-in-alt"></i>  Đăng nhập</a>
                                </li>
                                <li class="login-item">
                                    <a href="https://bdsnew.eso.vn/register"><i class="fas fa-user-plus"></i> Đăng ký</a>
                                </li>
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
                                            <a class="navbar-brand" href="https://bdsnew.eso.vn">
                            <img src="{{ asset('asset/img/logobds.png') }}"
                                 class="logo" height="40" alt="">
                        </a>
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul  class="navbar-nav justify-content-end">
        <li class="nav-item ">
        <a class="nav-link " href="/html/listduan.php" target="_self">
            Dự án
                    </a>
    </li>
        <li class="nav-item ">
        <a class="nav-link " href="https://bdsnew.eso.vn/properties" target="_self">
            BDS bán
                    </a>
    </li>
        <li class="nav-item ">
        <a class="nav-link " href="https://bdsnew.eso.vn/news" target="_self">
            BDS Cho thuê
                    </a>
    </li>
        <li class="nav-item ">
        <a class="nav-link " href="https://bdsnew.eso.vn/careers" target="_self">
            Tin tức
                    </a>
    </li>
        <li class="nav-item ">
        <a class="nav-link " href="https://bdsnew.eso.vn/contact" target="_self">
            Liên hêk
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
                
        </div>
    </header>
=======
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
                                        <a data-toggle="dropdown" href="#">
                                             <img height="17px" src="{{ asset(Auth::user()['ProfileImage']) }}" class="img-circle" alt="User Image">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right text-center">
                                             <span class="dropdown-item dropdown-header">{{ Auth::user()['FirstName'] }}</span>

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
                                        <a class="nav-link " href="{{ route('home') }}" target="_self">
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
                                   <li class="nav-item ">
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
>>>>>>> c47bc0955b4262a2e2a0602ad79661214c951933
