@extends('frontend.layouts.main')

@section('title', 'Computer')
@section('main-section')
<!-- START FEATURES 2 -->
<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <h3>Computer</h3>
          </div>
        </div>
      </div>
      <div class="row mt-2 py-5 align-items-center">
        <div class="col-lg-5">
          <img src="{{url('admin/assets/images/features-1.svg')}}" class="img-fluid" alt="" />
        </div>
        <div class="col-lg-6 offset-lg-1">
          <h3 class="fw-normal">Introduction Computer Department</h3>
          <p class="text-muted mt-3">
            Hyper comes with a variety of ready-to-use applications and pages
            that help to speed up the development
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id 
            praesentium excepturi laudantium error. Nostrum, asperiores accusamus, 
            quasi voluptatibus recusandae blanditiis consectetur voluptate
            ratione dolore veniam eaque, cum omnis iusto inventore quisquam 
            nihil sint! Corrupti dolores, et reprehenderit illum alias modi 
            ad nisi, repellendusrepellat eos consequuntur reiciendis 
            temporibus totam ducimus.
          </p>
        </div>
      </div>

      <div class="row pb-3 pt-5 align-items-center">
        <div class="col-lg-6">
          <h3 class="fw-normal">Simply beautiful design</h3>
          <p class="text-muted mt-3">
            The simplest and fastest way to build dashboard or admin panel.
            Hyper is built using the latest tech and tools and provide an easy
            way to customize anything, including an overall color schemes,
            layout, etc.
          </p>

          <div class="mt-4">
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-success"></i> Built with
              latest Bootstrap
            </p>
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-success"></i> Extensive use
              of SCSS variables
            </p>
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-success"></i> Well
              documented and structured code
            </p>
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-success"></i> Detailed
              Documentation
            </p>
          </div>

          <a href="" class="btn btn-success btn-rounded mt-3"
            >Read More <i class="mdi mdi-arrow-right ms-1"></i
          ></a>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <img src="{{url('admin/assets/images/features-2.svg')}}" class="img-fluid" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- END FEATURES 2 -->
@endsection
