@extends('admin.layouts.main')

@section('title', "Update Student")
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('students.update', $student->id) }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @method('PUT')
                          <h5 class="mb-4 text-uppercase">
                            <i class="mdi mdi-account-circle me-1"></i> Personal Info
                          </h5>
                          <div class="row">
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="fname">First Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name" required="" value="{{ $student->fname }}">
                                <div class="invalid-feedback">
                                  Please enter first name.
                                </div>
                                @error('fname')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="lname">Last Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name" required="" value="{{ $student->lname }}">
                                <div class="invalid-feedback">
                                  Please enter last name.
                                </div>
                                @error('lname')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="father_name">Father's Name<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="father_name" id="father_name" placeholder="Father's Name" required="" value="{{ $student->father_name }}">
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
                                <input type="text" class="form-control" name="mother_name" id="mother_name" placeholder="Mother's Name" required="" value="{{ $student->mother_name }}">
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
                                <label class="form-label" for="image">Image<span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg" required="">
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
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{ $student->email }}">
                                <div class="invalid-feedback">
                                  Please enter email.
                                </div>
                                @error('email')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Roll<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="roll" id="roll" placeholder="Roll" required="" value="{{ $student->roll }}">
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('roll')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="registration">Registration<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="registration" id="registration" placeholder="Registration" required="" value="{{ $student->registration }}">
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('registration')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3 position-relative" id="datepicker2">
                                <label class="form-label">Date of Birth<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="dob" placeholder="Date of Birth" autocomplete="off" data-provide="datepicker" data-date-format="d-M-yyyy" data-date-container="#datepicker2" required value="{{ $student->dob }}">
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
                                  <option {{ $student->gender == "M" ? "selected" : ""}} value="M">Male</option>
                                  <option {{ $student->gender == "F" ? "selected" : ""}} value="F">Female</option>
                                  <option {{ $student->gender == "O" ? "selected" : ""}} value="O">Other</option>
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
                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XXX-NNNNNN" required="" value="{{ $student->phone }}">
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
                                <label class="form-label" for="guardian_phone">Guardian Phone Number<span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="guardian_phone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XXX-NNNNNN" required="" value="{{ $student->guardian_phone }}">
                                <div class="invalid-feedback">
                                  Please enter Guardian Phone Number.
                                </div>
                                @error('guardian_phone')
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
                                  <option {{ $student->department_id == "$department->id" ? "selected" : ""}} value="{{ $department->id }}">{{$department->name}}</option>
                                  @endforeach
                                </select>
                                @error('department')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="semister">Semister<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="semister" data-toggle="select2">
                                  <option value="">Select Semister</option>
                                  @foreach ($semisters as $semister)
                                  <option {{ $student->semister_id == "$semister->id" ? "selected" : ""}} value="{{ $semister->id }}">{{$semister->name}}</option>
                                  @endforeach
                                </select>
                                @error('semister')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-3 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="session">Session<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="session" data-toggle="select2">
                                  <option value="">Select Session</option>
                                  @foreach ($sessions as $session)
                                  <option {{ $student->session_id == "$session->id" ? "selected" : ""}} value="{{ $session->id }}">{{$session->name}}</option>
                                  @endforeach
                                </select>
                                @error('session')
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
                                  <option {{ $student->blood_group_id == "$blood->id" ? "selected" : ""}} value="{{ $blood->id }}">{{$blood->name}}</option>
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
                                  <option {{ $student->nationality == "Bangladeshi" ? "selected" : ""}} value="Bangladeshi">Bangladeshi</option>
                                  <option {{ $student->nationality == "Other" ? "selected" : ""}} value="Other">Other</option>
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
                                  <option {{ $student->division_id == "$division->id" ? "selected" : ""}} value="{{ $division->id }}">{{$division->name}}</option>
                                  @endforeach
                                </select>
                                <div class="invalid-feedback">
                                  Please enter division.
                                </div>
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
                              <textarea data-toggle="maxlength" class="form-control" name="present_address" maxlength="50" rows="2" placeholder="Present Address" required>{{  $student->present_address }}</textarea>
                              <div class="invalid-feedback">
                                Please enter Present Address.
                              </div>
                              @error('present_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                              <label class="form-label">Permanent Address<span class="text-danger"> *</span></label>
                              <textarea data-toggle="maxlength" class="form-control" name="permanent_address" maxlength="50" rows="2" placeholder="Permanent Address" required>{{  $student->permanent_address }}</textarea>
                              <div class="invalid-feedback">
                                Please enter Permanent Address.
                              </div>
                              @error('permanent_address')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
                            </div>
                            @foreach ($academicinfos as $key=>$academicinfo)
                            <h5 class="mb-3 bg-light p-2">
                              <div class="float-start" style="margin-top: 8px">
                                 {{ ++$key }}.&nbsp;&nbsp;
                                <span class="mt-4 text-uppercase">Academic Information</span>
                              </div>
                              <a href="" class="btn btn-sm btn-danger float-end">Delete</a>
                            </h5>
                            {{-- Academic information start --}}
                            <div id="more-data">
                              <div class="row">
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label">Exam Name<span class="text-danger"> *</span></label>
                                    <select class="form-control select2" name="inputs[{{ $key++ }}][exam_name]" data-toggle="select2" required>
                                      <option value="">Select Exam Name</option>
                                      @foreach ($academic_exams as $exam)
                                      <option {{$academicinfo->academic_exam_id == "$exam->id" ? "selected" : ""}} value="{{ $exam->id }}">{{ $exam->name }}</option>
                                      @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                      Please enter Exam Name.
                                    </div>
                                    @error('inputs.*.exam_name')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="passing_year">Passing Year<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" name="inputs[{{ $key++ }}][passing_year]" id="passing_year" data-toggle="input-mask" data-mask-format="0000" maxlength="4" placeholder="Passing Year" required="" value="{{ $academicinfo->passing_year }}">
                                    <div class="invalid-feedback">
                                      Please enter Passing Year.
                                    </div>
                                    @error('inputs.*.passing_year')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label">Board Name<span class="text-danger"> *</span></label>
                                    <select class="form-control select2" name="inputs[{{ $key++ }}][board]" data-toggle="select2" required>
                                    <option value="">Select Board Name</option>
                                      @foreach ($boards as $board)
                                      <option {{$academicinfo->board_id == "$board->id" ? "selected" : ""}} value="{{ $board->id }}">{{ $board->name }}</option>
                                      @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                      Please enter Board Name.
                                    </div>
                                    @error('inputs.*.board')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="roll{{ $academicinfo->id }}">Board Roll<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" name="inputs[{{ $key++ }}][board_roll]" id="roll{{ $academicinfo->id }}" placeholder="Board Roll" required="" value="{{ $academicinfo->board_roll }}">
                                    <div class="invalid-feedback">
                                      Please enter Board Roll.
                                    </div>
                                    @error('inputs.*.board_roll')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="reg_no{{ $academicinfo->id }}">Registration No<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" name="inputs[{{ $key++ }}][reg_no]" id="reg_no{{ $academicinfo->id }}" placeholder="Registration No" required="" value="{{ $academicinfo->reg_no }}">
                                    <div class="invalid-feedback">
                                      Please enter Registration No.
                                    </div>
                                    @error('inputs.*.reg_no')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="gpa{{ $academicinfo->id }}">G.P.A.<span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" name="inputs[0][gpa]" id="gpa{{ $academicinfo->id }}" data-toggle="input-mask" data-mask-format="0.00" maxlength="4" placeholder="G.P.A." required="" value="{{ $academicinfo->gpa }}">
                                    <div class="invalid-feedback">
                                      Please enter G.P.A.
                                    </div>
                                    @error('inputs.*.gpa')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="marksheet{{ $academicinfo->id }}">Marksheet<span class="text-danger"> *</span></label>
                                    <input type="file" class="form-control" name="inputs[{{ $key++ }}][marksheet]" id="marksheet{{ $academicinfo->id }}" required>
                                    <div class="invalid-feedback">
                                      Please select file in marksheet.
                                    </div>
                                    @error('inputs.*.marksheet')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-3 col-12">
                                  <div class="mb-3">
                                    <label class="form-label" for="certificate{{ $academicinfo->id }}">Certificate</label>
                                    <input type="file" class="form-control" name="inputs[{{ $key++ }}][certificate]" id="certificate{{ $academicinfo->id }}">
                                    <div class="invalid-feedback">
                                      Please select file in certificate.
                                    </div>
                                    @error('inputs.*.certificate')
                                      <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                            
                          </div>
                          <button class="btn btn-primary" type="submit">
                            Update Student
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
