<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>
            @yield('title')
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            content="A fully featured admin theme which can be used to build CRM, CMS, etc."
            name="description"
        />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('admin/assets/images/favicon.ico')}}" />

        <!-- third party css -->
        <link href="{{url('admin/assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css"/>
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{url('admin/assets/css/icons.min.css')}}"  rel="stylesheet" type="text/css"
        />
        <link href="{{url('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style"
        />
        <link href="{{url('admin/assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style"/>
        <!-- Datatables css -->
        <link href="{{url('admin/assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{url('admin/assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{url('admin/assets/js/jquery/jquery-3.5.1.min.js')}}"></script>
    </head>

    <body
        class="loading"
        data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'
    >
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
                <!-- LOGO -->
                <a href="{{ url('/') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{url('admin/assets/images/logo.png')}}" alt="" height="30"/>
                    </span>
                    <span class="logo-sm">
                        <img src="{{url('admin/assets/images/logo_sm.png')}}" alt="" height="30"/>
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ url('/') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{url('admin/assets/images/logo-dark.png')}}" alt="" height="30"/>
                    </span>
                    <span class="logo-sm">
                        <img src="{{url('admin/assets/images/logo_sm_dark.png')}}" alt="" height="30"/>
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar="">
                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-title side-nav-item">Navigation</li>
                        <li class="side-nav-item">
                            <a href="{{ route('librarian.profile') }}" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Profile </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('books.create') }}" class="side-nav-link">
                                <i class="uil-book-alt"></i>
                                <span> Add Book </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('books.index') }}" class="side-nav-link">
                                <i class="uil-books"></i>
                                <span> Books </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('issue.create') }}" class="side-nav-link">
                                <i class="uil-book-alt"></i>
                                <span> Issue Books </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('return.index') }}" class="side-nav-link">
                                <i class="uil-book-alt"></i>
                                <span> Retuen Books </span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="mt-2">
                                <h4 class="text-body" style="margin-top: 16px; margin-right: 85px" id="clock"></h4>
                            </li>
                            <li class="dropdown notification-list">
                                <a
                                    class="nav-link dropdown-toggle nav-user arrow-none me-0"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-haspopup="false"
                                    aria-expanded="false"
                                >
                                    <span class="account-user-avatar">
                                        <img
                                            src="{{ asset('storage/users/'.Auth::user()->image)}}"
                                            alt="user-image"
                                            class="rounded-circle"
                                        />
                                    </span>
                                    <span>
                                        <span class="account-user-name"
                                            >{{ Auth::user()->name }}</span
                                        >
                                        <span class="account-position"
                                            >Librarian</span
                                        >
                                    </span>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                                >
                                    <!-- item-->
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">
                                            <span id="getup"></span>, {{ Auth::user()->name }} !
                                        </h6>
                                    </div>

                                    <!-- item-->
                                    <a
                                        href="{{route('logout')}}"
                                        class="dropdown-item notify-item"
                                    >
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input
                                        type="text"
                                        class="form-control dropdown-toggle"
                                        placeholder="Search..."
                                        autocomplete="off"
                                        id="top-search"
                                    />
                                    <span
                                        class="mdi mdi-magnify search-icon"
                                    ></span>
                                    <button
                                        class="input-group-text btn-primary"
                                        type="submit"
                                    >
                                        Search
                                    </button>
                                </div>
                            </form>

                            <div
                                class="dropdown-menu dropdown-menu-animated dropdown-lg"
                                id="search-dropdown"
                            >
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h5 class="text-overflow mb-2">
                                        Found
                                        <span class="text-danger">17</span>
                                        results
                                    </h5>
                                </div>

                                <!-- item-->
                                <a
                                    href="javascript:void(0);"
                                    class="dropdown-item notify-item"
                                >
                                    <i class="uil-notes font-16 me-1"></i>
                                    <span>Analytics Report</span>
                                </a>

                                <!-- item-->
                                <a
                                    href="javascript:void(0);"
                                    class="dropdown-item notify-item"
                                >
                                    <i class="uil-life-ring font-16 me-1"></i>
                                    <span>How can I help you?</span>
                                </a>

                                <!-- item-->
                                <a
                                    href="javascript:void(0);"
                                    class="dropdown-item notify-item"
                                >
                                    <i class="uil-cog font-16 me-1"></i>
                                    <span>User profile settings</span>
                                </a>

                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6
                                        class="text-overflow mb-2 text-uppercase"
                                    >
                                        Books
                                    </h6>
                                </div>

                                <div class="notification-list">
                                    <!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                    >
                                        <div class="d-flex">
                                            <img
                                                class="d-flex me-2"
                                                src="{{asset('storage/books/default-book.png')}}"
                                                alt="Generic placeholder image"
                                                height="32"
                                            />
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">
                                                    Web Development
                                                </h5>
                                                <span class="font-12 mb-0"
                                                    >66643</span
                                                >
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item notify-item"
                                    >
                                        <div class="d-flex">
                                            <img
                                                class="d-flex me-2 "
                                                src="{{asset('storage/books/default-book.png')}}"
                                                alt="Generic placeholder image"
                                                height="32"
                                            />
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">
                                                    Database Management
                                                </h5>
                                                <span class="font-12 mb-0"
                                                    >66653</span
                                                >
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
<!-- Start Content-->
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box">
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">PIMS</a>
                      </li>
                      <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                  </div>
                  <h4 class="page-title">@yield('title')</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->