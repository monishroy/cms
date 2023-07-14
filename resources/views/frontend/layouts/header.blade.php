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
        <a href="index.html" class="navbar-brand me-lg-5">
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
              <a class="nav-link {{ Request::is('department') ? 'active':''}}" href="{{route('department')}}">Department</a>
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
