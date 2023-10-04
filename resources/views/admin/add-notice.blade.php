@extends('admin.layouts.main')

@section('title', $title)
@section('main-section')



            <div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="card">
                  <h4 class="text-center my-3">{{ $title }}</h4>
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ $url }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @if ($title == 'Update Notice')
                            @method('PUT')
                          @else
                            
                          @endif
                          <div class="row">
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Notice Name</label>
                                <textarea type="text" class="form-control" name="name" id="name" placeholder="Notice Name" required=""> @if ($title == 'Update Notice'){{ $notice->name }} @else {{old('name')}} @endif</textarea>
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
                                <input type="file" class="form-control" name="file" id="file"  @if ($title == 'Update Notice')  @else  required="" @endif>
                                <div class="invalid-feedback">
                                  Please enter file.
                                </div>
                                @error('file')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            
                              @if ($title == 'Update Notice')
                              <div class="col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="status">Role<span class="text-danger"> *</span></label>
                                  <select class="form-control select2" name="status" data-toggle="select2" required @if (Auth::user()->role == 'super-admin') @else disabled @endif>
                                    <option value="">Select Status</option>
                                    <option {{ $notice->status == "1" ? "selected" : ""}} value="1">Active</option>
                                    <option {{ $notice->status == "0" ? "selected" : ""}} value="0">Panding</option>
                                    <option {{ $notice->status == "2" ? "selected" : ""}} value="2">Declined</option>
                                  </select>
                                  <div class="invalid-feedback">
                                    Please enter status.
                                  </div>
                                  @error('status')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              @endif
                            
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Updated Name</label>
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
                @if ($title == 'Update Notice')
                  <div class="card">
                    <h4 class="text-center my-3">Image / PDF</h4>
                    <div class="card-body border rounded">
                      @if (File::extension($notice->file) == 'pdf')
                        <iframe src="{{ asset('storage/notice/'.$notice->file) }}" style="width: 100%; height: 975px;" frameborder="0"></iframe>
                      @else
                        <img class="border" src="{{ asset('storage/notice/'.$notice->file) }}" style="width: 100%" alt="">
                      @endif
                    </div>
                  <!-- end card-body-->
                  </div>
                <!-- end card-->
                @endif
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
