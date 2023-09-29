@extends('admin.layouts.main')

@section('title', $title)
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ $url }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @if($title == 'Update Student') 
                          @method('PUT')
                          <input type="hidden" name="user_id" value="{{ $user->id }}">
                          @else
                          @endif
                          <h5 class="mb-4 text-uppercase">
                            <i class="mdi mdi-account-circle me-1"></i> Personal
                            Info
                          </h5>
                          <div class="row">
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="fname">First Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="" @if($title == 'Update Student') value="{{$student->name}}" @else value="{{old('fname')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('fname')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="lname">Last Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="" @if($title == 'Update Student') value="{{$student->name}}" @else value="{{old('lname')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('lname')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Father's Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Father's Name" required="" @if($title == 'Update Student') value="{{$student->name}}" @else value="{{old('name')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('name')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Mother's Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Mother's Name" required="" @if($title == 'Update Student') value="{{$student->name}}" @else value="{{old('name')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('name')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="image">Image<span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg" @if($title == 'Update Student') @else required="" @endif>
                                <div class="invalid-feedback">
                                  Please enter image.
                                </div>
                                @error('image')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="email">Email<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('email')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter email.
                                </div>
                                @error('email')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3 position-relative" id="datepicker2">
                                <label class="form-label">Date of Birth<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="dob" placeholder="Date of Birth" autocomplete="off" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2" required>
                                <div class="invalid-feedback">
                                  Please enter date of birth.
                                </div>
                                @error('dob')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="gender">Gender<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="gender" data-toggle="select2">
                                  <option value="">Select Gender</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "male" ? "selected" : ""}} @else @endif value="male">Male</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "female" ? "selected" : ""}} @else @endif value="female">Female</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "other" ? "selected" : ""}} @else @endif value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter gender.
                                </div>
                                @error('gender')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="phone">Phone Number<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" @if($title == 'Update Student') value="{{$student->phone}}" @else value="{{old('phone')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter Phone Number.
                                </div>
                                @error('phone')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="phone">Guardian Phone <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" @if($title == 'Update Student') value="{{$student->phone}}" @else value="{{old('phone')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter Phone Number.
                                </div>
                                @error('phone')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="department">Department<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="department" data-toggle="select2">
                                  <option value="">Select Department</option>
                                  @foreach ($department as $department)
                                  <option @if($title == 'Update Student') {{$student->department_id == "$department->id" ? "selected" : ""}} @else @endif value="{{ $department->id }}">{{$department->name}}</option>
                                  @endforeach
                                </select>
                                @error('department')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="blood_group">Blood Group<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="blood_group" data-toggle="select2">
                                  <option value="">Select Blood Group</option>
                                  @foreach ($blood_group as $blood)
                                  <option @if($title == 'Update Student') {{$student->blood_group_id == "$blood->id" ? "selected" : ""}} @else @endif value="{{ $blood->id }}">{{$blood->name}}</option>
                                  @endforeach
                                </select>
                                @error('blood_group')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Nationality<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality" required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('nationality')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter nationality.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="division">Division<span class="text-danger"> *</span></label>
                                <select class="form-control select2" id="division-dropdown" name="division" data-toggle="select2">
                                  <option value="">Select Division</option>
                                  @foreach ($divisions as $division)
                                  <option @if($title == 'Update Student') {{$student->division_id == "$division->id" ? "selected" : ""}} @else @endif value="{{ $division->id }}">{{$division->name}}</option>
                                  @endforeach
                                </select>
                                @error('division')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="district">District<span class="text-danger"> *</span></label>
                                <select class="form-control select2" id="district-dropdown" name="district" data-toggle="select2"></select>
                                @error('district')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="upazila">Upazila<span class="text-danger"> *</span></label>
                                <select class="form-control select2" id="upazila-dropdown" name="upazila" data-toggle="select2"></select>
                                @error('upazila')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                              <label class="form-label">Present Address<span class="text-danger"> *</span></label>
                              <textarea data-toggle="maxlength" class="form-control" name="present_address" maxlength="50" rows="2" placeholder="Present Address" required></textarea>
                              @error('present_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                              <label class="form-label">Permanent Address<span class="text-danger"> *</span></label>
                              <textarea data-toggle="maxlength" class="form-control" name="permanent_address" maxlength="50" rows="2" placeholder="Permanent Address" required></textarea>
                              @error('permanent_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>

                            <h5 class="mb-3 text-uppercase bg-light p-2">
                              <i class="mdi mdi-office-building me-1"></i> 
                              Academic Information
                            </h5>

                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Exam Name<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="gender" data-toggle="select2">
                                  <option value="">Select Exam Name</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "male" ? "selected" : ""}} @else @endif value="male">Male</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "female" ? "selected" : ""}} @else @endif value="female">Female</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "other" ? "selected" : ""}} @else @endif value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter Exam Name.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Passing Year<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Passing Year" required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('nationality')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter Passing Year.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Board Name<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="gender" data-toggle="select2">
                                  <option value="">Select Board Name</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "male" ? "selected" : ""}} @else @endif value="male">Male</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "female" ? "selected" : ""}} @else @endif value="female">Female</option>
                                  <option @if($title == 'Update Student') {{$student->gender == "other" ? "selected" : ""}} @else @endif value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter Board Name.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Board Roll<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Board Roll" required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('nationality')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter Board Roll.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Registration No<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Registration No" required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('nationality')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter Registration No.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">G.P.A.<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="G.P.A." required="" @if($title == 'Update Student') value="{{$student->email}}" @else value="{{old('nationality')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter G.P.A.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Marksheet<span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="nationality" id="nationality">
                                <div class="invalid-feedback">
                                  Please enter Board Name.
                                </div>
                                @error('nationality')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="nationality">Certificate<span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="nationality" id="nationality">
                                <div class="invalid-feedback">
                                  Please enter Board Name.
                                </div>
                                @error('nationality')
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
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
