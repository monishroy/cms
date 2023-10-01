@extends('admin.layouts.main')

@section('title', 'Update Employee')
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('a-employees.update', $employee->id) }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <h5 class="mb-4 text-uppercase">
                            <i class="mdi mdi-account-circle me-1"></i> Personal Info
                          </h5>
                          <div class="row">
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Full Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required="" value="{{ $employee->name }}">
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
                                <label class="form-label" for="father_name">Father's Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Father's Name" required="" value="{{ $employee->father_name }}">
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('father_name')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="mother_name">Mother's Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Mother's Name" required="" value="{{ $employee->mother_name }}">
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('mother_name')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg" >
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
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{ $employee->email }}">
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
                                <input type="text" class="form-control" name="dob" placeholder="Date of Birth" autocomplete="off" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2" required value="{{ $employee->dob }}">
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
                                  <option {{ $employee->gender == "M" ? "selected" : ""}} value="M">Male</option>
                                  <option {{ $employee->gender == "F" ? "selected" : ""}} value="F">Female</option>
                                  <option {{ $employee->gender == "O" ? "selected" : ""}} value="O">Other</option>
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
                                <label class="form-label" for="merital_status">Merital Status<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="merital_status" data-toggle="select2">
                                  <option value="">Select Merital Status</option>
                                  <option {{ $employee->merital_status == "single" ? "selected" : ""}} value="single">Single</option>
                                  <option {{ $employee->merital_status == "merried" ? "selected" : ""}} value="merried">Merried</option>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter merital status.
                                </div>
                                @error('merital_status')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="phone">Phone Number<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{ $employee->phone }}">
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
                                  @foreach ($departments as $department)
                                  <option {{ $employee->department_id == "$department->id" ? "selected" : ""}} value="{{ $department->id }}">{{$department->name}}</option>
                                  @endforeach
                                </select>
                                @error('department')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="position">Position<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="position" data-toggle="select2">
                                  <option value="">Select Position</option>
                                  @foreach ($positions as $position)
                                  <option {{ $employee->position_id == "$position->id" ? "selected" : ""}} value="{{ $position->id }}">{{$position->name}}</option>
                                  @endforeach
                                </select>
                                @error('position')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label">Blood Group<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="blood_group" data-toggle="select2">
                                  <option value="">Select Blood Group</option>
                                  @foreach ($blood_groups as $blood)
                                  <option {{ $employee->blood_group_id == "$blood->id" ? "selected" : ""}} value="{{ $blood->id }}">{{$blood->name}}</option>
                                  @endforeach
                                </select>
                                @error('blood_group')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label">Nationality<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="nationality" data-toggle="select2">
                                  <option {{ $employee->nationality == "Bangladeshi" ? "selected" : ""}} value="Bangladeshi">Bangladeshi</option>
                                  <option {{ $employee->nationality == "Other" ? "selected" : ""}} value="Other">Other</option>
                                </select>
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
                                <label class="form-label">Division<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="division" id="division-dropdown" data-toggle="select2">
                                  <option value="">Select Division</option>
                                  @foreach ($divisions as $division)
                                  <option {{ $employee->division_id == "$division->id" ? "selected" : ""}} value="{{ $division->id }}">{{$division->name}}</option>
                                  @endforeach
                                </select>
                                @error('division')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label">District<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="district" id="district-dropdown" data-toggle="select2" required></select>
                                <div class="invalid-feedback">
                                  Please enter district.
                                </div>
                                @error('district')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="upazila">Upazila<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="upazila" id="upazila-dropdown" data-toggle="select2" required></select>
                                <div class="invalid-feedback">
                                  Please enter upazila.
                                </div>
                                @error('upazila')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                              <label class="form-label">Present Address<span class="text-danger"> *</span></label>
                              <textarea data-toggle="maxlength" class="form-control" name="present_address" maxlength="50" rows="2" placeholder="Present Address" required>{{ $employee->present_address }}</textarea>
                              <div class="invalid-feedback">
                                  Please enter present address.
                                </div>
                              @error('present_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                              <label class="form-label">Permanent Address<span class="text-danger"> *</span></label>
                              <textarea data-toggle="maxlength" class="form-control" name="permanent_address" maxlength="50" rows="2" placeholder="Permanent Address" required>{{ $employee->permanent_address }}</textarea>
                              <div class="invalid-feedback">
                                Please enter permanent address.
                              </div>
                              @error('permanent_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>
                            {{-- Academic information start
                            <div class="row" id="addmore">
                              <h5 class="mb-3 text-uppercase bg-light p-2">
                                <div class="float-start" style="margin-top: 8px">
                                  <i class="mdi mdi-office-building me-1"></i> 
                                  <span class="mt-4">Academic Information</span>
                                </div>
                                <button type="button" class="btn btn-sm btn-primary float-end position-absulute">Add More</button>
                              </h5>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label">Exam Name<span class="text-danger"> *</span></label>
                                  <select class="form-control select2" name="exam_name" data-toggle="select2">
                                    <option value="">Select Exam Name</option>
                                    @foreach ($academic_exams as $exam)
                                    <option {{old('exam_name') == "$exam->id" ? "selected" : ""}} value="{{ $exam->id }}">{{ $exam->name }}</option>
                                    @endforeach
                                  </select>
                                  <div class="invalid-feedback">
                                    Please enter Exam Name.
                                  </div>
                                  @error('exam_name')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="passing_year">Passing Year<span class="text-danger"> *</span></label>
                                  <input type="text" class="form-control" name="passing_year" id="passing_year" data-toggle="input-mask" data-mask-format="0000" maxlength="4" placeholder="Passing Year" required="" value="{{old('passing_year')}}">
                                  <div class="invalid-feedback">
                                    Please enter Passing Year.
                                  </div>
                                  @error('passing_year')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label">Board Name<span class="text-danger"> *</span></label>
                                  <select class="form-control select2" name="board" data-toggle="select2">
                                  <option value="">Select Board Name</option>
                                    @foreach ($boards as $board)
                                    <option {{old('board') == "$board->id" ? "selected" : ""}} value="{{ $board->id }}">{{ $board->name }}</option>
                                    @endforeach
                                  </select>
                                  <div class="invalid-feedback">
                                    Please enter Board Name.
                                  </div>
                                  @error('board')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="roll">Board Roll<span class="text-danger"> *</span></label>
                                  <input type="text" class="form-control" name="roll" id="roll" placeholder="Board Roll" required="" value="{{old('roll')}}">
                                  <div class="invalid-feedback">
                                    Please enter Board Roll.
                                  </div>
                                  @error('roll')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="reg_no">Registration No<span class="text-danger"> *</span></label>
                                  <input type="text" class="form-control" name="reg_no" id="reg_no" placeholder="Registration No" required="" value="{{old('reg_no')}}">
                                  <div class="invalid-feedback">
                                    Please enter Registration No.
                                  </div>
                                  @error('reg_no')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="gpa">G.P.A.<span class="text-danger"> *</span></label>
                                  <input type="text" class="form-control" name="gpa" id="gpa" data-toggle="input-mask" data-mask-format="0.00" maxlength="4" placeholder="G.P.A." required="" value="{{old('gpa')}}">
                                  <div class="invalid-feedback">
                                    Please enter G.P.A.
                                  </div>
                                  @error('gpa')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="marksheet">Marksheet<span class="text-danger"> *</span></label>
                                  <input type="file" class="form-control" name="marksheet" id="marksheet" required>
                                  <div class="invalid-feedback">
                                    Please select file in marksheet.
                                  </div>
                                  @error('marksheet')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                              <div class="col-md-3 col-12">
                                <div class="mb-3">
                                  <label class="form-label" for="certificate">Certificate<span class="text-danger"> *</span></label>
                                  <input type="file" class="form-control" name="certificate" id="certificate" required>
                                  <div class="invalid-feedback">
                                    Please select file in certificate.
                                  </div>
                                  @error('certificate')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                  @enderror
                                </div>
                              </div>
                            </div> --}}
                            

                            
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
