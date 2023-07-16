@extends('admin.layouts.main')

@section('title', 'Notice Board')
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
                      <li class="breadcrumb-item active">Notice Board</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Notice Board</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('notice.add') }}" method="POST" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="added_id" value="{{ Auth::user()->id }}">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="notice_title">Notice Title</label>
                                        <input type="text" class="form-control" name="notice_title" id="notice_title" placeholder="Notice Title" required="" value="{{old('fname')}}">
                                        <div class="invalid-feedback">
                                            Please enter notice title.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('notice_title')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="notice_file">Notice File</label>
                                        <input type="file" class="form-control" name="notice_file" id="notice_file" required="">
                                        <div class="invalid-feedback">
                                            Please enter last name.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('notice_file')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="roll">Added Name</label>
                                        <input type="text" class="form-control" id="notice_title" placeholder="Notice Title" readonly value="{{Auth::user()->name}}">
                                        <div class="invalid-feedback">
                                            Please enter roll.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('roll')
                                            {{$message}}
                                            @enderror
                                        </span>
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
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Notice File</th>
                                <th>Notice Title</th>
                                <th>Added on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                            @foreach ($notice as $notice)
                            <tr>
                                <td>
                                  {{ $notice->notice_file }}
                                  {{-- <img src="{{ url('storage/notice/'.$notice->notice_file) }}" alt=""> --}}
                                </td>
                                <td>{{ $notice->notice_title }}</td>
                                <td>{{ date('d-M-Y', strtotime($notice->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('admin.notice.download',['file'=>$notice->notice_file]) }}" class="action-icon">
                                        <i class="mdi mdi-download"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="action-icon">
                                        <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
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
