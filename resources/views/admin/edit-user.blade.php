@extends('admin.layouts.main')

@section('title', "Update User")
@section('main-section')

            <div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('users.update', $user->id) }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <h5 class="mb-4 text-center">
                            Update User
                          </h5>
                          <div class="row">
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Full Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required="" value="{{ $user->name }}">
                                <div class="invalid-feedback">
                                  Please enter first name.
                                </div>
                                @error('fname')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg">
                                <div class="invalid-feedback">
                                  Please enter image.
                                </div>
                                @error('image')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="email">Email<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{ $user->email }}">
                                <div class="invalid-feedback">
                                  Please enter email.
                                </div>
                                @error('email')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="phone">Phone Number<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="" value="{{ $user->phone }}">
                                <div class="invalid-feedback">
                                  Please enter Phone Number.
                                </div>
                                @error('phone')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="role">Role<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="role" data-toggle="select2">
                                  <option value="">Select Role</option>
                                  <option {{ $user->role == "super-admin" ? "selected" : ""}} value="super-admin">Super Admin</option>
                                  <option {{ $user->role == "admin" ? "selected" : ""}} value="admin">Admin</option>
                                  <option {{ $user->role == "teacher" ? "selected" : ""}} value="teacher">Teacher</option>
                                  <option {{ $user->role == "librarian" ? "selected" : ""}} value="librarian">Librarian</option>
                                  <option {{ $user->role == "student" ? "selected" : ""}} value="student">Student</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter role.
                                </div>
                                @error('role')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <div class="invalid-feedback">
                                  Please enter password.
                                </div>
                                @error('password')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
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
              <!-- end col-->
              
              <!-- end col-->
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
