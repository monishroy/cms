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
        data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'
    >
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
                <!-- LOGO -->
                <a href="{{ url('/admin/dashboard') }}" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img 
                            src="{{url('admin/assets/images/logo.png')}}" 
                            alt="" 
                            height="30" 
                        />
                    </span>
                    <span class="logo-sm">
                        <img
                            src="{{url('admin/assets/images/logo_sm.png')}}"
                            alt=""
                            height="30"
                        />
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ url('/admin/dashboard') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img
                            src="{{url('admin/assets/images/logo-dark.png')}}"
                            alt=""
                            height="30"
                        />
                    </span>
                    <span class="logo-sm">
                        <img
                            src="{{url('admin/assets/images/logo_sm_dark.png')}}"
                            alt=""
                            height="30"
                        />
                    </span>
                </a>

                <div
                    class="h-100"
                    id="leftside-menu-container"
                    data-simplebar=""
                >
                    <!--- Sidemenu -->
                    <ul class="side-nav">
                        <li class="side-nav-title side-nav-item">Navigation</li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.profile') }}" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Profile </span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Settings</li>
                        <li class="side-nav-item">
                            <a href="{{ route('setup.index') }}" class="side-nav-link">
                                <i class="uil-layers-alt"></i>
                                <span> Setup </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('users.index') }}" class="side-nav-link">
                                <i class="uil-shield-check"></i>
                                <span> Users </span>
                            </a>
                        </li>
                        <li class="side-nav-title side-nav-item">Frontend</li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Notice" aria-expanded="false" aria-controls="Notice" class="side-nav-link">
                                <i class="uil-clipboard"></i>
                                <span> Notice </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="Notice">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#addNotice" aria-expanded="false" aria-controls="addNotice">
                                            <span> Add Notice </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="addNotice">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{ route('notice.create') }}">New Notice</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Panding Notice</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Declined Notice</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('notice.index') }}"> Notice List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#technology" aria-expanded="false" aria-controls="technology" class="side-nav-link">
                                <i class="uil-award"></i>
                                <span> Technology </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="technology">
                                <ul class="side-nav-second-level">                                    
                                    <li>
                                        <a href="{{ route('technology.create') }}"> Add Technology</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('technology.index') }}"> Technology List</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#employee" aria-expanded="false" aria-controls="employee" class="side-nav-link">
                                <i class="uil-award"></i>
                                <span> Employee </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="employee">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#addemployee" aria-expanded="false" aria-controls="addemployee">
                                            <span> Add Employee </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="addemployee">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{ route('employees.create') }}">New Employee</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Panding Employee</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Declined Employee</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('employees.index') }}"> Employee List</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Employee Attendance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Employee Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#student" aria-expanded="false" aria-controls="student" class="side-nav-link">
                                <i class="dripicons-graduation"></i>
                                <span> Student </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="student">
                                <ul class="side-nav-second-level">
                                    <li class="side-nav-item">
                                        <a data-bs-toggle="collapse" href="#addstudent" aria-expanded="false" aria-controls="addstudent">
                                            <span> Add Student </span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="collapse" id="addstudent">
                                            <ul class="side-nav-third-level">
                                                <li>
                                                    <a href="{{ route('students.create') }}">New Student</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Panding Student</a>
                                                </li>
                                                <li>
                                                    <a href="javascript: void(0);">Declined Student</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('students.index') }}"> Student List</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Student Attendance</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"> Student Report</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="side-nav-title side-nav-item">Contact</li>
                        <li class="side-nav-item">
                            <a href="{{ route('message.index') }}" class="side-nav-link">
                                <i class="uil-envelopes"></i>
                                <span> Message </span>
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
                                <h4 class="text-body" style="margin-top: 16px; margin-right: 10px" id="clock"></h4>
                            </li>
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
                                <div
                                    class="dropdown-menu dropdown-menu-animated dropdown-lg p-0"
                                >
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
                                <div
                                    class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg"
                                >
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

                                    <div
                                        style="max-height: 230px"
                                        data-simplebar=""
                                    >
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
                                                    >1 min ago</small
                                                >
                                            </p>
                                        </a>

                                        <!-- item-->
                                        <a
                                            href="javascript:void(0);"
                                            class="dropdown-item notify-item"
                                        >
                                            <div class="notify-icon bg-info">
                                                <i
                                                    class="mdi mdi-account-plus"
                                                ></i>
                                            </div>
                                            <p class="notify-details">
                                                New user registered.
                                                <small class="text-muted"
                                                    >5 hours ago</small
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
                                            src="{{ asset('storage/users/'.Auth::user()->image) }}"
                                            alt="user-image"
                                            class="rounded-circle"
                                        />
                                    </span>
                                    <span>
                                        <span class="account-user-name"
                                            >{{ Auth::user()->name }}</span
                                        >
                                        <span class="account-position"
                                            >{{ Auth::user()->role }}</span
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
                                    <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
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
                                                src="{{url('admin/assets/images/users/avatar-1.jpg')}}"
                                                alt="Generic placeholder image"
                                                height="32"
                                            />
                                            <div class="w-100">
                                                <h5 class="m-0 font-14">
                                                    Monish Roy
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
                                                   Ronobir Roy
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