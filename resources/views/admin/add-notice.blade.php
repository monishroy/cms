@extends('admin.layouts.main')

@section('title', 'Add Notice')
@section('main-section')



            <div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="card">
                  <h4 class="text-center my-3">Add Notice</h4>
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('admin.notice.store') }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Notice Name</label>
                                <textarea type="text" class="form-control" name="name" id="name" placeholder="Notice Name" required="">{{old('name')}}</textarea>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('name')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="file">Notice File</label>
                                <input type="file" class="form-control" name="file" id="file" required="">
                                <div class="invalid-feedback">
                                  Please enter file.
                                </div>
                                @error('file')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Added Name</label>
                                <input type="text" class="form-control" readonly value="{{Auth::user()->name}}">
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Added Date</label>
                                <input type="text" class="form-control" value="{{ date('d-M-Y h:i A') }}" readonly>
                              </div>
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
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
