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
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <i class="dripicons-checkmark me-2"></i>
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        <i class="dripicons-wrong me-2"></i>
                        {{Session::get('error')}}
                    </div>
                    @endif
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{route('addStudent')}}" method="POST" novalidate="">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="fname">First name</label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required="" value="{{old('fname')}}">
                                        <div class="invalid-feedback">
                                            Please enter first name.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('fname')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="lname">Last name</label>
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required="" value="{{old('lname')}}">
                                        <div class="invalid-feedback">
                                            Please enter last name.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('lname')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="roll">Roll</label>
                                        <input type="text" class="form-control" name="roll" id="roll" data-toggle="input-mask" data-mask-format="000000" maxlength="6" placeholder="Roll" required="" value="{{old('roll')}}">
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
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="registration">Registration</label>
                                        <input type="text" class="form-control" name="registration" id="registration" placeholder="Registration" required="" value="{{old('registration')}}">
                                        <div class="invalid-feedback">
                                            Please enter Registration.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('registration')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="session">Session</label>
                                        <input type="text" class="form-control" name="session" id="session" data-toggle="input-mask" data-mask-format="0000-00" maxlength="6"  placeholder="Session" required="" value="{{old('session')}}">
                                        <div class="invalid-feedback">
                                            Please enter Session.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('session')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{old('phone')}}">
                                        <div class="invalid-feedback">
                                            Please enter Phone Number.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('phone')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="gPhone">Guardian Phone Number</label>
                                        <input type="text" class="form-control" name="gPhone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{old('gPhone')}}">
                                        <div class="invalid-feedback">
                                            Please enter Guardian Phone Number.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('gPhone')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="semister">Semister</label>
                                        <!-- Single Select -->
                                            <select class="form-control select2" name="semister" data-toggle="select2">
                                                <optgroup label="Select Semister">
                                                    <option value="1">1st Semister</option>
                                                    <option value="2">2nd Semister</option>
                                                    <option value="3">3th Semister</option>
                                                    <option value="4">4th Semister</option>
                                                    <option value="5">5th Semister</option>
                                                    <option value="6">6th Semister</option>
                                                    <option value="7">7th Semister</option>
                                                    <option value="8">8th Semister</option>
                                                </optgroup>
                                            </select>
                                        <div class="invalid-feedback">
                                            Please enter Semister.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('semister')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="Gender">Gender</label>
                                        <!-- Single Select -->
                                            <select class="form-control select2" name="gender" data-toggle="select2">
                                                <optgroup label="Select Gender">
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Other</option>
                                                </optgroup>
                                            </select>
                                        <div class="invalid-feedback">
                                            Please enter Gender.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('gender')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="Address">Address</label>
                                        <input type="text" class="form-control" name="address" id="Address" placeholder="Address" required="" value="{{old('address')}}">
                                        <div class="invalid-feedback">
                                            Please enter Address.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('address')
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

            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
