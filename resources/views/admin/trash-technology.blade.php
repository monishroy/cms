@extends('admin.layouts.main')

@section('title', 'Technology')
@section('main-section')

          <!-- Start Content-->
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box">
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">CMS</a>
                      </li>
                      <li class="breadcrumb-item active">Trash Technology</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Trash Technology</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              @foreach ($technology as $technology)
              <div class="col-lg-4">
                <div class="card ribbon-box">
                  <div class="card-body">
                    <div class="ribbon ribbon-primary float-start">
                      <i class="mdi mdi-access-point me-1"></i>{{ $technology->name }}
                    </div>
                    <h5 class="float-end mt-1">
                      <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Restore" href="{{route('technology.restore',['id'=>$technology->id])}}" class="action-icon me-1">
                        <i class="uil uil-redo fs-4 lh-3 text-body"></i>
                      </a>
                      <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Parmanent Delete" href="{{route('technology.delete',['id'=>$technology->id])}}" class="action-icon">
                        <i class="mdi mdi-delete fs-4 lh-3 text-body"></i>
                      </a>
                    </h5>
                    <div class="ribbon-content">
                      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block img-fluid" src="{{ url("storage/technology/$technology->image1") }}" style="height: 380px" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block img-fluid" src="{{ url("storage/technology/$technology->image2") }}" style="height: 380px" alt="Second slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- end card-body -->
                </div>
                <!-- end card-->
              </div>
              <!-- Large modal -->
              <div class="modal fade" id="view-{{ $technology->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="myLargeModalLabel">{{ $technology->name }}</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                    </div>
                    <div class="modal-body">
                      <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                          <img src="{{ url("storage/technology/$technology->image1") }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <small class="text-muted">Section 1</small>
                            </p>
                            <p class="card-text">
                              {{ $technology->text1 }}
                            </p>
                          </div>
                          <!-- end card-body-->
                        </div>
                        <!-- end col -->
                      </div>
                      <div class="row g-0 align-items-center">
                        <div class="col-md-4">
                          <img src="{{ url("storage/technology/$technology->image2") }}" class="card-img" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <p class="card-text">
                              <small class="text-muted">Section 2</small>
                            </p>
                            <p class="card-text">
                              {{ $technology->text2 }}
                            </p>
                          </div>
                          <!-- end card-body-->
                        </div>
                        <!-- end col -->
                      </div>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
              @endforeach
            </div>
            <!-- end card-->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
