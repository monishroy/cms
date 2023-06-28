<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{url('frontend/img/fav.png')}}" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>@yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  <!--
      CSS
      =============================================
    -->
  <link rel="stylesheet" href="{{url('frontend/css/linearicons.css')}}" />
  <link rel="stylesheet" href="{{url('frontend/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{url('frontend/css/bootstrap.css')}}" />
  <link rel="stylesheet" href="{{url('frontend/css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.css')}}" />
  <link rel="stylesheet" href="{{url('frontend/css/nice-select.css')}}">
  <link rel="stylesheet" href="{{url('frontend/css/hexagons.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="{{url('frontend/css/main.css')}}" />
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{url('frontend/img/logo.png')}}" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="{{url('/')}}">@lang('lang.Home')</a></li>
            <li><a href="{{url('/about')}}">@lang('lang.About')</a></li>
            <li><a href="{{url('/courses')}}">@lang('lang.Courses')</a></li>

            <li><a href="{{url('/contact')}}">@lang('lang.Contacts')</a></li>
            <!-- Dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" href="javascript::void(0)" data-toggle="dropdown">
                @lang('lang.Login/Register')
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{url('/login')}}">Login</a>
                <a class="dropdown-item" href="{{url('/register')}}">Registration</a>
                </div>
            </li>
            <li>
              <button class="search">
                <span class="lnr lnr-magnifier" id="search"></span>
              </button>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" href="javascript::void(0)" data-toggle="dropdown">
                EN
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/')}}">EN</a>
                    <a class="dropdown-item" href="{{url('/bn')}}">BN</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- ================ End Header Area ================= -->
