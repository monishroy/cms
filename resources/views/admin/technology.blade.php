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
                      <li class="breadcrumb-item active">Technology</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Technology</h4>
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
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <table class="table dt-responsive nowrap w-100">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Image 1</th>
                            <th>Text 1</th>
                            <th>Image 2</th>
                            <th>Text 2</th>
                            <th>Adden on</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($technology as $technology)
                        <tr>
                          <td>{{ $technology->id }}</td>
                          <td>{{ $technology->name }}</td>
                          <td>
                            <img src="{{ url("storage/technology/$technology->image1") }}" width="200px" alt="">
                          </td>
                          <td>
                            <p width="500px">{{ $technology->text1 }}</p>
                          </td>
                          <td>
                            <img src="{{ url("storage/technology/$technology->image2") }}" width="200px" alt="">
                          </td>
                          <td>
                            <p width="100px">{{ $technology->text2 }}</p>
                          </td>
                          <td>{{ date('d-M-Y', strtotime($technology->created_at)) }}</td>
                          <td>
                            <a href="" class="action-icon">
                              <i class="mdi mdi-pencil"></i>
                            </a>
                            <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Move to Trash" href=""  class="action-icon">
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
