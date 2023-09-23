@extends('frontend.layouts.main')

@section('title', 'Technology')
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
    @forelse ($technology as $technology)
    <div class="col-lg-4">
      <a href="{{route('technology.details',['id'=>$technology->id])}}">
        <div class="demo-box text-center">
          <img
            src="{{ url("storage/technology/$technology->image1") }}"
            alt="demo-img"
            style="height: 290px"
            class="img-fluid shadow-sm rounded border border-light"
          />
          <h5 class="mt-3 f-17 text-dark">{{ $technology->name }}</h5>
        </div>
      </a>
    </div>
    @empty
    <div class="text-center">
      <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
      <h4 class="text-uppercase text-muted">
        Technology Not Found
      </h4>
    </div>
    @endforelse
  </div>
</div>
</section>
<!-- END FEATURES 1 -->

@endsection
