<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Email Verification</title>
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
                <div class="text-center m-auto">
                  <img src="{{ url('/admin/assets/images/mail_sent.svg') }}" alt="mail sent image" height="64">
                  <h4 class="text-dark-50 text-center mt-4 fw-bold">
                    Please check your email
                  </h4>
                  <p class="text-muted mb-4">
                    A email has been send to <b>{{ $email }}</b>. Please
                    check for an email and copy this OTP and past hear.
                  </p>
                </div>
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
                @error('email')
                  <div class="alert alert-danger" role="alert">
                    <i class="dripicons-wrong me-2"></i>
                    {{$message}}
                  </div>
                @enderror
                <form action="{{ route('forgotPasswordVerify') }}" method="POST">
                  @csrf
                  <input type="hidden" name="email" value="{{ $email }}">
                  <div class="mb-3">
                    <label for="otp" class="form-label">Enter OTP</label>
                    <div class="input-group input-group-merge">
                      <input
                        class="form-control "
                        type="text"
                        id="otp"
                        name="otp"
                        required=""
                        placeholder="Enter your OTP"
                        autocomplete="off"
                        autofocus=""
                         data-toggle="input-mask" data-mask-format="000000"
                      />
                      <div class="input-group-text" >
                        <span><b class="text-body" id="timer"></b></span>

                      </div>
                    </div>
                    <span class="text-danger text-sm">
                      @error('otp')
                      {{$message}}
                      @enderror
                    </span>
                  </div>
                  <div class="mb-0 text-center">
                    <button class="btn btn-primary" type="submit">
                      Verify
                    </button>
                  </div>
                </form>
              </div>
              <!-- end card-body -->
            </div>
            <!-- end card -->
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
    <script>
      // Function to start the countdown
      function startCountdown(durationInSeconds) {
        let timerDisplay = document.getElementById("timer");

        // Update the timer display every second
        let intervalId = setInterval(function () {
          if (durationInSeconds <= 0) {
            clearInterval(intervalId);
            timerDisplay.innerHTML = "<a class='text-body' href='{{ route('forgotPasswordSendMail',['id'=>$id]) }}'>Resend</a>";
          } else {
            // Calculate minutes and seconds
            let minutes = Math.floor(durationInSeconds / 60);
            let seconds = durationInSeconds % 60;

            // Display the time
            timerDisplay.textContent = `${minutes
              .toString()
              .padStart(2, "0")}:${seconds
              .toString()
              .padStart(2, "0")}`;

            // Decrease the remaining time
            durationInSeconds--;
          }
        }, 1000);
      }

      // Start the countdown with a 5-minute duration (5 minutes * 60 seconds)
      startCountdown(90);
    </script>
    
    <!-- bundle -->
    <script src="{{url('admin/assets/js/vendor.min.js')}}"></script>
    <script src="{{url('admin/assets/js/app.min.js')}}"></script>
  </body>
</html>
