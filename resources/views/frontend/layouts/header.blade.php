<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="A fully featured admin theme which can be used to build CRM, CMS, etc."
      name="description"
    />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('admin/assets/images/favicon.ico')}}" />

    <!-- App css -->
    <link href="{{url('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link
      href="{{url('admin/assets/css/app.min.css')}}"
      rel="stylesheet"
      type="text/css"
      id="light-style"
    />
    <link
      href="{{url('admin/assets/css/bangla.css')}}"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="{{url('admin/assets/css/app-dark.min.css')}}"
      rel="stylesheet"
      type="text/css"
      id="dark-style"
    />
  </head>

  <body class="loading" data-layout-config='{"darkMode":true}'>
    <!-- NAVBAR START -->
    <nav class="navbar navbar-expand-lg py-lg-3 navbar-dark">
      <div class="container">
        <!-- logo -->
        <a href="{{url('/')}}" class="navbar-brand me-lg-5">
          <img
            src="{{url('admin/assets/images/logo.png')}}"
            alt=""
            class="logo-dark"
            height="25"
          />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="mdi mdi-menu"></i>
        </button>

        <!-- menus -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <!-- left menu -->
          <ul class="navbar-nav me-auto align-items-center">
            <li class="nav-item mx-lg-1">
              <a class="nav-link {{ Request::is('/') ? 'active':''}} " href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link {{ Request::is('notice') ? 'active':''}}" href="{{route('notice')}}">Notice</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link {{ Request::is('about') ? 'active':''}}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link {{ Request::is('technology') ? 'active':''}}" href="{{route('technology')}}">Technology</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Employees
                <div class="arrow-down"></div>
              </a>
              <div class="dropdown-menu" aria-labelledby="topnav-components">
                <a href="widgets.html" class="dropdown-item">Principal</a>
                <div class="dropdown">
                  <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Technology
                    <div class="arrow-down"></div>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">
                    <a href="" class="dropdown-item">Civil</a>
                    <a href="" class="dropdown-item">Electrical</a>
                    <a href="" class="dropdown-item">Electronics</a>
                    <a href="" class="dropdown-item">Computer</a>
                    <a href="" class="dropdown-item">Mecanical</a>
                    <a href="" class="dropdown-item">Textile</a>
                  </div>
                </div>
                <div class="dropdown">
                  <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ui-kit2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ofice Section
                    <div class="arrow-down"></div>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="topnav-ui-kit2">
                    <a href="" class="dropdown-item">Academic in charge</a>
                    <a href="" class="dropdown-item">General Branch</a>
                    <a href="" class="dropdown-item">Accounting branch</a>
                    <a href="" class="dropdown-item">Library</a>
                  </div>
                </div>
                
              </div>
            </li>
            <li class="nav-item mx-lg-1">
              <a class="nav-link {{ Request::is('contact') ? 'active':''}}" href="{{route('contact')}}">Contact</a>
            </li>
          </ul>

          <!-- right menu -->
          <ul class="navbar-nav ms-auto align-items-center">
            <li class="nav-item me-0">
              <a
                href="{{url('/login')}}"
                target="_blank"
                class="nav-link d-lg-none"
                > login / Register</a
              >
              <a
                href="{{url('/login')}}"
                target="_blank"
                class="btn btn-sm btn-light btn-rounded d-none d-lg-inline-flex"
              >
                <i class="mdi mdi-login me-2"></i> login / Register
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- NAVBAR END -->
