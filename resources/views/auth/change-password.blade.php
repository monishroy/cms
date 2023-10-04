<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      content="Wallpaper Galaxy Forgot Password Page"
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
                  <span><img src="{{url('admin/assets/images/logo.png')}}" alt="" height="30"/></span>
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
                <div class="text-center w-75 m-auto">
                  <h4 class="text-dark-50 text-center mt-0 fw-bold mb-4">
                    Change Password
                  </h4>
                </div>

                <form class="needs-validation" action="{{ route('changePasswordPost') }}" novalidate="" method="POST">
                  @csrf
                  <input type="hidden" name="id" value="{{ $id }}">
                  <input type="hidden" name="varify_token" value="{{ $token }}">
                  <div class="mb-3">
                    <label for="newpassword" class="form-label">New Password</label>
                    <div class="input-group input-group-merge">
                      <input class="form-control" type="password" id="newpassword" name="new_password" placeholder="Enter your new password" value="{{ old('new_password') }}" autocomplete="off" required>
                      <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                      </div>
                      <div class="invalid-feedback">
                        Please enter new password.
                      </div>
                    </div>
                    @error('new_password')
                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="re_new_password" class="form-label">Re-new Password</label>
                    <div class="input-group input-group-merge">
                      <input class="form-control" type="re_new_password" id="re_new_password" name="re_new_password" placeholder="Enter your re-new password" value="{{ old('re_new_password') }}" autocomplete="off" required>
                      <div class="input-group-text" data-password="false">
                        <span class="password-eye"></span>
                      </div>
                      <div class="invalid-feedback">
                        Please enter Re new password.
                      </div>
                    </div>
                    @error('re_new_password')
                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                    @enderror
                  </div>
                  <div class="mb-0 text-center">
                    <button class="btn btn-primary" type="submit">
                      Change Password
                    </button>
                  </div>
                </form>
              </div>
              <!-- end card-body-->
            </div>
            <!-- end card -->

            <div class="row mt-3">
              <div class="col-12 text-center">
                <p class="text-muted">
                  Back to
                  <a href="{{ route('login') }}" class="text-muted ms-1"><b>Log In</b></a>
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
      <script>
       document.write(new Date().getFullYear());
      </script>
       © mnotion.com
    </footer>

    <!-- bundle -->
    <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
    <script src="{{url('admin/assets/js/app.min.js')}}"></script>
  </body>
</html>
