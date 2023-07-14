@extends('frontend.layouts.main')

@section('title', 'Notice')
@section('main-section')

  <!-- START SERVICES -->
  <section class="py-3">
    <div class="container">
      <div class="row py-4">
        <div class="col-lg-12">
          <div class="text-center">
            <h1 class="mt-0"><i class="mdi mdi-bell-outline"></i></h1>
            <h3>
              Notice
              <span class="text-primary">Selection</span>
            </h3>
            <p class="text-muted mt-2">
              Click notice type and download this pdf and read this notice
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3">
          <a href="">
            <div class="text-center p-3">
              <div class="avatar-sm m-auto">
                <span class="avatar-title bg-primary-lighten rounded-circle">
                  <i class="uil uil-desktop text-primary font-24"></i>
                </span>
              </div>
              <h4 class="mt-3 text-dark">Holiday Notice</h4>
              <p class="text-muted mt-2 mb-0">
                Last Update: 14/07/2023
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="">
            <div class="text-center p-3">
              <div class="avatar-sm m-auto">
                <span class="avatar-title bg-primary-lighten rounded-circle">
                  <i class="uil uil-vector-square text-primary font-24"></i>
                </span>
              </div>
              <h4 class="mt-3 text-dark">Class Rutine</h4>
              <p class="text-muted mt-2 mb-0">
                Last Update: 14/07/2023
              </p>
            </div>
          </a>
        </div>

        <div class="col-lg-3">
          <a href="">
            <div class="text-center p-3">
              <div class="avatar-sm m-auto">
                <span class="avatar-title bg-primary-lighten rounded-circle">
                  <i class="uil uil-presentation text-primary font-24"></i>
                </span>
              </div>
              <h4 class="mt-3 text-dark">Exam Rutine</h4>
              <p class="text-muted mt-2 mb-0">
                Last Update: 14/07/2023
              </p>
            </div>
          </a>
        </div>
        <div class="col-lg-3">
          <a href="{{ route('notice-details') }}">
            <div class="text-center p-3">
              <div class="avatar-sm m-auto">
                <span class="avatar-title bg-primary-lighten rounded-circle">
                  <i class="uil uil-apps text-primary font-24"></i>
                </span>
              </div>
              <h4 class="mt-3 text-dark">Result Notice</h4>
              <p class="text-muted mt-2 mb-0">
                Last Update: 14/07/2023
              </p>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- END SERVICES -->
@endsection

