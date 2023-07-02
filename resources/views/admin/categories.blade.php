@extends('admin.layouts.main')

@section('title', 'Categories')
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
                        <a href="javascript: void(0);">SMS</a>
                      </li>
                      <li class="breadcrumb-item active">Categories</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Categories</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Semister</h4>
                        <!-- end nav-->
                        <div class="tab-content">
                          <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate="">
                                <div class="mb-3">
                                  <label class="form-label" for="semister_name">Semister Name</label>
                                  <input type="text" class="form-control" id="semister_name" name="semister_name" placeholder="Semister name" value="{{old('semister_name')}}" required="">
                                  <div class="invalid-feedback">Please enter semister name.</div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="added_at">Added Date</label>
                                  <input type="text" class="form-control" id="added_at" value="{{date('d-M-Y')}}" required="" readonly>
                                </div>
                                <button class="btn btn-primary" type="submit">
                                  Submit form
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
                <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Session</h4>
                        <!-- end nav-->
                        <div class="tab-content">
                          <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate="">
                                <div class="mb-3">
                                  <label class="form-label" for="session">Add Session</label>
                                  <input type="text" class="form-control" id="session" name="session" placeholder="Session name" value="{{old('session')}}" required="">
                                  <div class="invalid-feedback">Please enter Session name.</div>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="added_at">Added Date</label>
                                  <input type="text" class="form-control" id="added_at" value="{{date('d-M-Y')}}" required="" readonly>
                                </div>
                                <button class="btn btn-primary" type="submit">
                                  Submit form
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
                <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Semister</h4>
                        <!-- end nav-->
                        <div class="tab-content">
                          <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" novalidate="">
                              <div class="mb-3">
                                <label class="form-label" for="semister_name">semister_name</label>
                                <input type="text" class="form-control" id="semister_name" name="semister_name" placeholder="Semister name" value="{{old('semister_name')}}" required="">
                                <div class="invalid-feedback">Please enter semister name.</div>
                              </div>
                              <div class="mb-3">
                                <label class="form-label" for="added_at">Added Date</label>
                                <input type="text" class="form-control" id="added_at" value="{{date('d-M-Y')}}" required="" readonly>
                              </div>
                              <button class="btn btn-primary" type="submit">
                                Submit form
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
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
