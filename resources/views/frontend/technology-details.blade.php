@extends('frontend.layouts.main')

@section('title', $technology->name)
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
      <div class="row my-4 d-flex justify-content-center">
        <div class="col-md-12 row">
          <img
            src="{{ asset("storage/technology/".$technology->image1) }}"
            alt="Image placeholder"
            style="width:100%; height: 400px;"
            class="img-fluid rounded mb-3" 
          />
          <div class="col-md-6 mb-3">
            <img
              src="{{ asset("storage/technology/".$technology->image2) }}"
              alt="Image placeholder"
              style="height: 350px; width: 700px;"
              class="img-fluid rounded" />
          </div>
          <div class="col-md-6">
            <img
              src="{{ asset("storage/technology/".$technology->image3) }}"
              alt="Image placeholder"
              style="height: 350px; width: 700px;"
              class="img-fluid rounded" />
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-12">
          <p class="text-muted">
            {!! $technology->content !!}
          </p>
        </div>
      </div>

      <div class="row pb-3 pt-5 align-items-center">
        
      </div>
    </div>
  </section>
  <!-- END FEATURES 2 -->
@endsection
