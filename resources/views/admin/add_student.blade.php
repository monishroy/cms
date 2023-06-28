@extends('admin.layouts.main')

@section('title', 'Add Student')
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
                      <li class="breadcrumb-item active">Add Student</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Add Student</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" required="">
                                        <div class="invalid-feedback">
                                            Please enter first name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" required="">
                                        <div class="invalid-feedback">
                                            Please enter last name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom01">Roll</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="Roll" required="">
                                        <div class="invalid-feedback">
                                            Please enter roll.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Registration</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Registration" required="">
                                        <div class="invalid-feedback">
                                            Please enter Registration.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Session</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Session" required="">
                                        <div class="invalid-feedback">
                                            Please enter Session.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">Phone</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="">
                                        <div class="invalid-feedback">
                                            Please enter Phone.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control" data-toggle="input-mask" data-mask-format="00/00/0000" maxlength="10" placeholder="DD/MM/YYYY" required="">
                                        <div class="invalid-feedback">
                                            Please enter Date of Birth.
                                        </div>
                                    </div>
                                </div>
                            </div>

                          <div class="mb-3">
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" id="invalidCheck" required="">
                              <label class="form-check-label form-label" for="invalidCheck">Agree to terms and conditions</label>
                              <div class="invalid-feedback">
                                You must agree before submitting.
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
