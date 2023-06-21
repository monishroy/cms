<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Log In </title>
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

  <body
    class="loading authentication-bg"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'
  >
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-4 col-lg-5">
            <div class="card">
              <!-- Logo -->
              <div class="card-header pt-4 pb-4 text-center bg-primary">
                <a href="{{url('/')}}">
                  <span
                    ><img src="{{url('admin/assets/images/logo.png')}}" alt="" height="30"
                  /></span>
                </a>
              </div>

              <div class="card-body p-4">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <i class="dripicons-checkmark me-2"></i>
                    {{Session::get('success')}}
                </div>
                @endif
                @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    <i class="dripicons-wrong me-2"></i>
                    {{Session::get('error')}}
                </div>
                @endif
                <form action="{{route('postlogin')}}" method="POST">
                    @csrf
                  <div class="mb-3">
                    <label for="emailaddress" class="form-label"
                      >Email address</label
                    >
                    <input
                      class="form-control"
                      type="email"
                      id="emailaddress"
                      name="email"
                      placeholder="Enter your email"
                    />
                    <span class="text-danger text-sm">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                  </div>

                  <div class="mb-3">
                    <a href="pages-recoverpw.html" class="text-muted float-end"
                      ><small>Forgot your password?</small></a
                    >
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                      <input
                        class="form-control"
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                      />
                      <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                      </div>
                    </div>
                    <span class="text-danger text-sm">
                        @error('password')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="mb-3 mb-3">
                    <div class="form-check">
                      <input
                        type="checkbox"
                        class="form-check-input"
                        id="checkbox-signin"
                        checked
                      />
                      <label class="form-check-label" for="checkbox-signin"
                        >Remember me</label
                      >
                    </div>
                  </div>
                  <div class="mb-3 mb-0 text-center">
                    <button class="btn btn-primary" type="submit">
                      Log In
                    </button>
                  </div>
                </form>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->

            <div class="row mt-3">
              <div class="col-12 text-center">
                <p class="text-muted">
                  Don't have an account?
                  <a href="{{route('register')}}" class="text-muted ms-1"
                    ><b>Sign Up</b></a
                  >
                </p>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        2022 - 2023 © Mnotion - mnotion.com
    </footer>

    <!-- bundle -->
    <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
    <script src="{{url('admin/assets/js/app.min.js')}}"></script>
  </body>
</html>
