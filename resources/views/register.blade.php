<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Register </title>
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
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":true, "showRightSidebarOnStart": true}'
  >
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xxl-4 col-lg-5">
            <div class="card">
              <!-- Logo-->
              <div class="card-header pt-4 pb-4 text-center bg-primary">
                <a href="index.html">
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
                    <a href="{{url('/login')}}" class="alert-link">login</a>
                </div>
                @endif
                @if (Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    <i class="dripicons-wrong me-2"></i>
                    {{Session::get('error')}}
                </div>
                @endif
                <form method="POST" action="{{route('postRegister')}}">
                    @csrf
                  <input type="hidden" name="image" value="{{rand(1,5)}}.png">
                  <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Enter your name"
                      value="{{old('name')}}"
                    />
                    <span class="text-danger text-sm">
                        @error('name')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

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
                      value="{{old('email')}}"
                    />
                    <span class="text-danger text-sm">
                        @error('email')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input
                      class="form-control"
                      type="text"
                      id="phone"
                      name="phone"
                      data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11"
                      placeholder="Enter your phone"
                      value="{{old('phone')}}"
                    />
                    <span class="text-danger text-sm">
                        @error('phone')
                        {{$message}}
                        @enderror
                    </span>
                  </div>

                  <div class="mb-3">
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

                  <div class="mb-3 text-center">
                    <button class="btn btn-primary" type="submit">
                      Sign Up
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
                  Already have account?
                  <a href="{{route('login')}}" class="text-muted ms-1"
                    ><b>Log In</b></a
                  >
                </p>
              </div>
              <!-- end col-->
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
