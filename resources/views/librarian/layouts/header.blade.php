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
    </head>

    <body
        class="loading"
        data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}'
    >
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
                <!-- LOGO -->
                <a href="{{ url('/admin/dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{url('admin/assets/images/logo.png')}}" alt="" height="30"/>
                    </span>
                    <span class="logo-sm">
                        <img src="{{url('admin/assets/images/logo_sm.png')}}" alt="" height="30"/>
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ url('/admin/dashboard') }}" class="logo text-center logo-dark">
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
                                <i class="uil-home-alt"></i>
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
                                <i class="uil-book-alt"></i>
                                <span> All Books </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('issue.create') }}" class="side-nav-link">
                                <i class="uil-book-alt"></i>
                                <span> Issue Books </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('books.return') }}" class="side-nav-link">
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
                            <li class="dropdown notification-list d-lg-none">
                                <a
                                    class="nav-link dropdown-toggle arrow-none"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-haspopup="false"
                                    aria-expanded="false"
                                >
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input
                                            type="text"
                                            class="form-control"
                                            placeholder="Search ..."
                                            aria-label="Recipient's username"
                                        />
                                    </form>
                                </div>
                            </li>
                            
                            <li class="dropdown notification-list">
                                <a
                                    class="nav-link dropdown-toggle arrow-none"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-haspopup="false"
                                    aria-expanded="false"
                                >
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0">
                                            <span class="float-end">
                                                <a
                                                    href="javascript: void(0);"
                                                    class="text-dark"
                                                >
                                                    <small>Clear All</small>
                                                </a> </span
                                            >Notification
                                        </h5>
                                    </div>
                                    <div style="max-height: 230px" data-simplebar="">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                            <p class="notify-details">
                                                Caleb Flakelar commented on Admin
                                                <small class="text-muted">1 min ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                            <p class="notify-details">
                                                New user registered.
                                                <small class="text-muted">5 hours ago</small>
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-item notify-item"
                                        >
                                            <div class="notify-icon">
                                                <img
                                                    src="{{url('admin/assets/images/users/avatar-2.jpg')}}"
                                                    class="img-fluid rounded-circle"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="notify-details">
                                                Cristina Pride
                                            </p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small
                                                    >Hi, How are you? What about
                                                    our next meeting</small
                                                >
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-item notify-item"
                                        >
                                            <div class="notify-icon bg-primary">
                                                <i
                                                    class="mdi mdi-comment-account-outline"
                                                ></i>
                                            </div>
                                            <p class="notify-details">
                                                Caleb Flakelar commented on
                                                Admin
                                                <small class="text-muted"
                                                    >4 days ago</small
                                                >
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-item notify-item"
                                        >
                                            <div class="notify-icon">
                                                <img
                                                    src="{{url('admin/assets/images/users/avatar-4.jpg')}}"
                                                    class="img-fluid rounded-circle"
                                                    alt=""
                                                />
                                            </div>
                                            <p class="notify-details">
                                                Karen Robinson
                                            </p>
                                            <p class="text-muted mb-0 user-msg">
                                                <small
                                                    >Wow ! this admin looks good
                                                    and awesome design</small
                                                >
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-item notify-item"
                                        >
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-heart"></i>
                                            </div>
                                            <p class="notify-details">
                                                Carlos Crouch liked
                                                <b>Admin</b>
                                                <small class="text-muted"
                                                    >13 days ago</small
                                                >
                                            </p>
                                        </a>
                                    </div>

                                    <!-- All-->
                                    <a
                                        href="javascript:void(0);"
                                        class="dropdown-item text-center text-primary notify-item notify-all"
                                    >
                                        View All
                                    </a>
                                </div>
                            </li>

                            <li
                                class="dropdown notification-list d-none d-sm-inline-block"
                            >
                                <a
                                    class="nav-link dropdown-toggle arrow-none"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    role="button"
                                    aria-haspopup="false"
                                    aria-expanded="false"
                                >
                                    <i
                                        class="dripicons-view-apps noti-icon"
                                    ></i>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0"
                                >
                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="https://mnotion.com"
                                                    target="_blank"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/favicon.ico')}}"
                                                        alt="slack"
                                                    />
                                                    <span>Mnotion</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="#"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/brands/github.png')}}"
                                                        alt="Github"
                                                    />
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="#"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/brands/dribbble.png')}}"
                                                        alt="dribbble"
                                                    />
                                                    <span>Dribbble</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="row g-0">
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="#"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/brands/bitbucket.png')}}"
                                                        alt="bitbucket"
                                                    />
                                                    <span>Bitbucket</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="#"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/brands/dropbox.png')}}"
                                                        alt="dropbox"
                                                    />
                                                    <span>Dropbox</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a
                                                    class="dropdown-icon-item"
                                                    href="#"
                                                >
                                                    <img
                                                        src="{{url('admin/assets/images/brands/g-suite.png')}}"
                                                        alt="G Suite"
                                                    />
                                                    <span>G Suite</span>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end row-->
                                    </div>
                                </div>
                            </li>

                            <li class="notification-list">
                                <a
                                    class="nav-link end-bar-toggle"
                                    href="javascript: void(0);"
                                >
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
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
                                            Welcome {{ Auth::user()->name }} !
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
                                        Users
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
                                                class="d-flex me-2 rounded-circle"
                                                src="{{url('admin/assets/images/users/avatar-2.jpg')}}"
                                                alt="Generic placeholder image"
                                                height="32"
                                            />
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">
                                                    Erwin Brown
                                                </h5>
                                                <span class="font-12 mb-0"
                                                    >UI Designer</span
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
                                                class="d-flex me-2 rounded-circle"
                                                src="{{url('admin/assets/images/users/avatar-5.jpg')}}"
                                                alt="Generic placeholder image"
                                                height="32"
                                            />
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">
                                                    Jacob Deo
                                                </h5>
                                                <span class="font-12 mb-0"
                                                    >Developer</span
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
                        <a href="javascript: void(0);">CMS</a>
                      </li>
                      <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                  </div>
                  <h4 class="page-title">@yield('title')</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->