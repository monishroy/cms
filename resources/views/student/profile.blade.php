@extends('student.layouts.main')

@section('title', 'Profile')
@section('main-section')

          

            <div class="row">
              <div class="col-sm-12">
                <!-- Profile -->
                <div class="card bg-primary">
                  <div class="card-body profile-user-box">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <div class="avatar-lg">
                              <img
                                src="{{asset('storage/users/'.Auth::user()->image)}}"
                                alt=""
                                class="rounded-circle img-thumbnail"
                              />
                            </div>
                          </div>
                          <div class="col">
                            <div>
                              <h4 class="mt-1 mb-1 text-white">
                                {{ Auth::user()->name }}
                              </h4>
                              <p id="showup" class="font-13 text-white-50"></p>
                              <ul class="mb-0 list-inline text-light">
                                <li class="list-inline-item me-3">
                                  <h5 class="mb-1">{{ $student->semister->name }}</h5>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- end col-->

                      <div class="col-sm-4">
                        <div class="text-center mt-sm-0 mt-3 text-sm-end">
                          <button type="button" class="btn btn-light">
                            <i class="uil-image-edit me-1"></i> Change Picture
                          </button>
                        </div>
                      </div>
                      <!-- end col-->
                    </div>
                    <!-- end row -->
                  </div>
                  <!-- end card-body/ profile-user-box-->
                </div>
                <!--end profile/ card -->
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-xl-4">
                <!-- Personal-Information -->
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title text-center mt-0 mb-3">Student Information</h4>
                    <p>{{ Auth::user()->bio }}</p>
                    <hr />
                    <div class="text-start">
                      <p class="text-muted">
                        <strong>Full Name :</strong>
                        <span class="ms-2">{{ Auth::user()->name }}</span>
                      </p>
                      <p class="text-muted">
                        <strong>Roll :</strong>
                        <span class="ms-2">{{ $student->roll }}</span>
                      </p>
                      <p class="text-muted">
                        <strong>Registration :</strong>
                        <span class="ms-2">{{ $student->registration }}</span>
                      </p>
                      <p class="text-muted">
                        <strong>Mobile :</strong
                        ><span class="ms-2">{{ Auth::user()->phone }}</span>
                      </p>

                      <p class="text-muted">
                        <strong>Email :</strong>
                        <span class="ms-2">{{ Auth::user()->email }}</span>
                      </p>

                      <p class="text-muted">
                        <strong>Department :</strong>
                        <span class="ms-2">{{ $student->department->name }}</span>
                      </p>

                      <p class="text-muted">
                        <strong>Session :</strong>
                        <span class="ms-2"> {{ $student->session->name }} </span>
                      </p>
                      <p class="text-muted mb-0" id="tooltip-container">
                        <strong>Address :</strong>
                        <span class="ms-2"> {{ $student->address }} </span>
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Personal-Information -->
                
              </div>
              <!-- end col-->

              <div class="col-xl-8">
                <!-- Messages-->
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title mb-3">Update Profile</h4>
                    <form action="{{ route('student.profile.update') }}" method="POST">
                      @csrf
                      <div class="row">
                        <input type="hidden" name="student_id" id="" value="{{ $student->id }}">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Enter Full Name">
                            @error('name')
                              <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" value="{{ Auth::user()->email }}" placeholder="Enter Email" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="email" class="form-label">Guardian Phone</label>
                            <input type="email" class="form-control" value="{{ $student->gPhone }}" placeholder="Enter Email" readonly>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="{{ Auth::user()->phone }}" placeholder="Enter Phone">
                            @error('phone')
                              <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="2" placeholder="Write something...">{{ Auth::user()->bio }}</textarea>
                            @error('bio')
                              <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <!-- end col -->
                      </div>
                      <!-- end row -->
                      <button class="btn btn-primary" type="submit">
                        Update Profile
                      </button>
                    </form>
                    <!-- end inbox-widget -->
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
