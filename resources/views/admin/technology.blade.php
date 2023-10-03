@extends('admin.layouts.main')

@section('title', 'Technology')
@section('main-section')


            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @forelse ($technology as $technology)
                  <div class="col-lg-4">
                    <div class="card ribbon-box">
                      <div class="card-body">
                        <div class="ribbon ribbon-primary float-start">
                          <i class="mdi mdi-access-point me-1"></i>{{ $technology->name }}
                        </div>
                        <div class="dropdown float-end">
                          <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-end" style="">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view-{{ $technology->id }}" class="dropdown-item">View</a>
                            <a href="{{ route('technology.edit', $technology->id) }}" class="dropdown-item">Edit</a>
                            <form action="{{ route('technology.destroy', $technology->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                          </div>
                        </div>
                        <div class="w-100">
                          <img class="img-fluid" src="{{ url("storage/technology/$technology->image1") }}" style="width:100%; height: 300px;" alt="First slide">
                        </div>
                      </div>
                      <!-- end card-body -->
                    </div>
                    <!-- end card-->
                  </div>
                  <!-- Edit modal -->
                  <div class="modal fade" id="view-{{ $technology->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myLargeModalLabel">{{ $technology->name }}</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                        </div>
                        <div class="modal-body">
                          <div class="row align-items-center">
                            <div class="col-md-4">
                              <img src="{{ url("storage/technology/$technology->image1") }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-4">
                              <img src="{{ url("storage/technology/$technology->image2") }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-4">
                              <img src="{{ url("storage/technology/$technology->image3") }}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-12">
                              <div class="card-body">
                                <p class="text-muted">
                                  {!! $technology->content !!}
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
                  @empty
                  <div class="text-center" style="margin-top: 180px">
                    <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
                    <h4 class="text-uppercase text-muted">
                      Technology Not Found
                    </h4>
                  </div>
                  @endforelse
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
