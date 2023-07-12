@extends('frontend.layouts.main')

@section('title', 'Courses | SMS')
@section('main-section')
<!-- START FEATURES 1 -->
<section
class="py-5 bg-light-lighten border-top border-bottom border-light"
>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center">
        <h3>Flexible <span class="text-primary">Layouts</span></h3>
        <p class="text-muted mt-2">
          There are three different layout options available to cater need
          for any <br />
          modern web application.
        </p>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-4">
      <div class="demo-box text-center">
        <img
          src="{{url('admin/assets/images/layouts/layout-1.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Vertical Layout</h5>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="demo-box text-center mt-3 mt-lg-0">
        <img
          src="{{url('admin/assets/images/layouts/layout-2.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Horizontal Layout</h5>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="demo-box text-center mt-3 mt-lg-0">
        <img
          src="{{url('admin/assets/images/layouts/layout-3.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Detached Layout</h5>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-4">
      <div class="demo-box text-center">
        <img
          src="{{url('admin/assets/images/layouts/layout-5.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Light Sidenav Layout</h5>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="demo-box text-center mt-3 mt-lg-0">
        <img
          src="{{url('admin/assets/images/layouts/layout-6.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Boxed Layout</h5>
      </div>
    </div>

    <div class="col-lg-4">
      <div class="demo-box text-center mt-3 mt-lg-0">
        <img
          src="{{url('admin/assets/images/layouts/layout-4.png')}}"
          alt="demo-img"
          class="img-fluid shadow-sm rounded"
        />
        <h5 class="mt-3 f-17">Semi Dark Layout</h5>
      </div>
    </div>
  </div>
</div>
</section>
<!-- END FEATURES 1 -->

@endsection
