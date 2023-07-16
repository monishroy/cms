@extends('frontend.layouts.main')

@section('title', 'Computer')
@section('main-section')
<!-- START FEATURES 2 -->
<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <h3>{{ $technology->name }}</h3>
          </div>
        </div>
      </div>
      <div class="row mt-2 py-5 align-items-center">
        <div class="col-lg-5">
          <img src="{{ url("storage/technology/$technology->image1") }}" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 offset-lg-1">
          <h3 class="fw-normal">Introduction {{ $technology->name }} Technology</h3>
          <p class="text-muted mt-3">
            {{ $technology->text1 }}
          </p>
        </div>
      </div>

      <div class="row pb-3 pt-5 align-items-center">
        <div class="col-lg-6">
          <h3 class="fw-normal">More Information of {{ $technology->name }} Technology</h3>
          <p class="text-muted mt-3">
            {{ $technology->text2 }}
          </p>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <img src="{{ url("storage/technology/$technology->image2") }}" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- END FEATURES 2 -->
@endsection
