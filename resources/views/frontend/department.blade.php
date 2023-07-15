@extends('frontend.layouts.main')

@section('title', 'Department')
@section('main-section')
<!-- START FEATURES 1 -->
<section
class="py-5 bg-light-lighten border-top border-bottom border-light"
>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center">
        <h3>All <span class="text-primary">Technology</span></h3>
        <p class="text-muted mt-2">
          Click this department name and details department info.
        </p>
      </div>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-4">
      <a href="{{ route('department.details') }}">
        <div class="demo-box text-center">
          <img
            src="{{url('admin/assets/images/layouts/layout-1.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Civil</h5>
        </div>
      </a>
    </div>

    <div class="col-lg-4">
      <a href="">
        <div class="demo-box text-center mt-3 mt-lg-0">
          <img
            src="{{url('admin/assets/images/layouts/layout-2.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Electrical</h5>
        </div>
      </a>
    </div>
    <div class="col-lg-4">
      <a href="">
        <div class="demo-box text-center mt-3 mt-lg-0">
          <img
            src="{{url('admin/assets/images/layouts/layout-3.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Mecanical</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-4">
      <a href="">
        <div class="demo-box text-center">
          <img
            src="{{url('admin/assets/images/layouts/layout-5.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Computer</h5>
        </div>
      </a>
    </div>
    <div class="col-lg-4">
      <a href="">
        <div class="demo-box text-center mt-3 mt-lg-0">
          <img
            src="{{url('admin/assets/images/layouts/layout-6.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Electronics</h5>
        </div>
      </a>
    </div>

    <div class="col-lg-4">
      <a href="">
        <div class="demo-box text-center mt-3 mt-lg-0">
          <img
            src="{{url('admin/assets/images/layouts/layout-4.png')}}"
            alt="demo-img"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">Textile</h5>
        </div>
      </a>
    </div>
  </div>
</div>
</section>
<!-- END FEATURES 1 -->

@endsection
