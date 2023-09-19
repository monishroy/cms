@extends('admin.layouts.main')

@section('title', 'Technology')
@section('main-section')


            <div class="row">
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('technology.add') }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Technology Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Technology Name" required="" value="{{old('fname')}}">
                                <div class="invalid-feedback">
                                  Please enter technology name.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('name')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="image1">Image 1</label>
                                <input type="file" class="form-control" name="image1" id="image1" required="">
                                <div class="invalid-feedback">
                                  Please enter image1.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('image1')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="example-textarea" class="form-label">Text 1</label>
                                <textarea class="form-control" name="text1" id="example-textarea" rows="4" required></textarea>
                                <div class="invalid-feedback">
                                  Please enter text 1.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('text1')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="image2">Image 2</label>
                                <input type="file" class="form-control" name="image2" id="image2" required="">
                                <div class="invalid-feedback">
                                  Please enter image2.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('image2')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="mb-3">
                              <label for="example-textarea" class="form-label">Text 2</label>
                              <textarea class="form-control" name="text2" id="example-textarea" rows="4" required></textarea>
                              <div class="invalid-feedback">
                                Please enter text 2.
                              </div>
                              <span class="text-danger text-sm">
                                @error('text2')
                                {{$message}}
                                @enderror
                              </span>
                            </div>
                          </div>
                          <button class="btn btn-primary" type="submit">
                            Submit
                          </button>
                        </form>
                      </div>
                      <!-- end preview-->
                    </div>
                    <!-- end tab-content-->
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col-->
              <div class="col-lg-9">
                <div class="row">
                  @foreach ($technology as $technology)
                  <div class="col-lg-4">
                    <div class="card ribbon-box">
                      <div class="card-body">
                        <div class="ribbon ribbon-primary float-start">
                          <i class="mdi mdi-access-point me-1"></i>{{ $technology->name }}
                        </div>
                        <h5 class="float-end mt-1">
                          <a href="javascript: void(0);" class="action-icon me-1" data-bs-toggle="modal" data-bs-target="#view-{{ $technology->id }}">
                            <i class="mdi mdi-eye fs-4 lh-3 text-body"></i>
                          </a>
                          <a href="javascript: void(0);" class="action-icon me-1" data-bs-toggle="modal" data-bs-target="#edit-{{ $technology->id }}">
                            <i class="mdi mdi-pencil fs-4 lh-3 text-body"></i>
                          </a>
                          <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Move to Trash" href="{{route('technology.trash',['id'=>$technology->id])}}" class="action-icon">
                            <i class="mdi mdi-delete fs-4 lh-3 text-body"></i>
                          </a>
                        </h5>
                        <div class="ribbon-content">
                          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="{{ url("storage/technology/$technology->image1") }}" style="height: 280px" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{ url("storage/technology/$technology->image2") }}" style="height: 280px" alt="Second slide">
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

                  <!-- View modal -->
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

                  <!-- Edit modal -->
                  <div class="modal fade" id="edit-{{ $technology->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myLargeModalLabel">{{ $technology->name }}</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <form action="{{ route('technology.edit') }}" method="POST">
                          @csrf
                          <input type="hidden" name="id" value="{{ $technology->id }}">
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
                                  <textarea class="form-control" name="text1" id="example-textarea" rows="10">{{ $technology->text1 }}</textarea>
                                  <span class="text-danger text-sm">
                                    @error('text1')
                                    {{$message}}
                                    @enderror
                                  </span>
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
                                  <textarea class="form-control" name="text2" id="example-textarea" rows="10">{{ $technology->text2 }}</textarea>
                                  <span class="text-danger text-sm">
                                    @error('text2')
                                    {{$message}}
                                    @enderror
                                  </span>
                                </div>
                                <!-- end card-body-->
                              </div>
                              <!-- end col -->
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                          </div>
                        </form>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                  @endforeach
                </div>
                
                <!-- end card-->
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
