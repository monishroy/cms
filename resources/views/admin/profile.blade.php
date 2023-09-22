@extends('admin.layouts.main')

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
                                src="{{url('admin/assets/images/users/'.Auth::user()->image)}}"
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
                              <p class="font-13 text-white-50">
                                Admin
                              </p>

                              <ul class="mb-0 list-inline text-light">
                                <li class="list-inline-item me-3">
                                  <h5 class="mb-1">{{ $user }}</h5>
                                  <p class="mb-0 font-13 text-white-50">
                                    Total User
                                  </p>
                                </li>
                                <li class="list-inline-item">
                                  <h5 class="mb-1">{{ $students }}</h5>
                                  <p class="mb-0 font-13 text-white-50">
                                    Total Student
                                  </p>
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
                            <i class="mdi mdi-image me-1"></i> Change Picture
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
                    <h4 class="header-title mt-0 mb-3">Admin Information</h4>
                    <p class="text-muted font-13">
                      {{ Auth::user()->bio }}
                    </p>

                    <hr />

                    <div class="text-start">
                      <p class="text-muted">
                        <strong>Full Name :</strong>
                        <span class="ms-2">{{ Auth::user()->name }}</span>
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
                        <strong>Status :</strong>
                        @if (Auth::user()->status == 1)
                          <span class="badge badge-outline-success">Active</span>
                        @else
                          <span class="badge badge-outline-danger">Deactive</span>
                        @endif
                      </p>
                      <p class="text-muted">
                        <strong>Location :</strong>
                        <span class="ms-2">Bangladesh</span>
                      </p>

                      <p class="text-muted">
                        <strong>Languages :</strong>
                        <span class="ms-2"> English, Bangla </span>
                      </p>
                      <p class="text-muted mb-0" id="tooltip-container">
                        <strong>Elsewhere :</strong>
                        <a
                          class="d-inline-block ms-2 text-muted"
                          data-bs-container="#tooltip-container"
                          data-bs-placement="top"
                          data-bs-toggle="tooltip"
                          href=""
                          title="Facebook"
                          ><i class="mdi mdi-facebook"></i
                        ></a>
                        <a
                          class="d-inline-block ms-2 text-muted"
                          data-bs-container="#tooltip-container"
                          data-bs-placement="top"
                          data-bs-toggle="tooltip"
                          href=""
                          title="Twitter"
                          ><i class="mdi mdi-twitter"></i
                        ></a>
                        <a
                          class="d-inline-block ms-2 text-muted"
                          data-bs-container="#tooltip-container"
                          data-bs-placement="top"
                          data-bs-toggle="tooltip"
                          href=""
                          title="Skype"
                          ><i class="mdi mdi-skype"></i
                        ></a>
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
                    <form action="{{ route('profile.update') }}" method="POST">
                      @csrf
                      <div class="row">
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{ Auth::user()->name }}" placeholder="Enter Full Name">
                            @error('name')
                              <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{ Auth::user()->email }}" placeholder="Enter Email">
                            @error('email')
                              <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
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
                            <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Write something...">{{ Auth::user()->bio }}</textarea>
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
                    <div class="inbox-widget">
                      @foreach ($contact as $contact)
                      <div class="inbox-item">
                        <div class="inbox-item-img">
                          <img
                            src="assets/images/users/2.png"
                            class="rounded-circle"
                            alt=""
                          />
                        </div>
                        <p class="inbox-item-author">{{ $contact->name }}</p>
                        <p class="inbox-item-text">
                          {{ $contact->message }}
                        </p>
                        <p class="inbox-item-date">
                          <a
                            href="#"
                            class="btn btn-sm btn-link text-info font-13"
                          >
                            Reply
                          </a>
                        </p>
                      </div>
                      @endforeach
                      
                    </div>
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
