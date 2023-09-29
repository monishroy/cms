@extends('admin.layouts.main')

@section('title', $title_header)
@section('main-section')


            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{$url}}" method="POST" novalidate="" enctype="multipart/form-data">
                            @csrf
                            @if($title_header == 'Update Student') 
                            @method('PUT')
                            @else
                            @endif
                            <div class="row">
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="fname">First name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required="" @if($title_header == 'Update Student') value="{{$student->fname}}" @else value="{{old('fname')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter first name.
                                        </div>
                                        @error('fname')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="lname">Last name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required="" @if($title_header == 'Update Student') value="{{$student->lname}}" @else value="{{old('lname')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter last name.
                                        </div>
                                        @error('lname')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="image" accept="image/png, image/jpeg, image/jpg">
                                        <div class="invalid-feedback">
                                            Please enter image.
                                        </div>
                                        @error('image')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" @if($title_header == 'Update Student') value="{{$student->email}}" @else value="{{old('email')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter email.
                                        </div>
                                        @error('email')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="roll">Roll<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="roll" id="roll" data-toggle="input-mask" data-mask-format="000000" maxlength="6" placeholder="Roll" required="" @if($title_header == 'Update Student') value="{{$student->roll}}" @else value="{{old('roll')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter roll.
                                        </div>
                                        @error('roll')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="registration">Registration<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="registration" id="registration" placeholder="Registration" required="" @if($title_header == 'Update Student') value="{{$student->registration}}" @else value="{{old('registration')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter Registration.
                                        </div>
                                        @error('registration')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="session">Session<span class="text-danger">*</span></label>
                                        <!-- Single Select -->
                                        <select class="form-control select2" name="session" data-toggle="select2">
                                            <optgroup label="Select Session">
                                                @foreach ($session as $session)
                                                <option @if($title_header == 'Update Student') {{$student->session_id == "$session->id" ? "selected" : ""}} @else @endif value="{{ $session->id }}">{{$session->name}}</option>
                                                @endforeach
                                            </optgroup>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter Session.
                                        </div>
                                        @error('session')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone Number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" @if($title_header == 'Update Student') value="{{$student->phone}}" @else value="{{old('phone')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter Phone Number.
                                        </div>
                                        @error('phone')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="gPhone">Guardian Phone Number<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="gPhone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" @if($title_header == 'Update Student') value="{{$student->gPhone}}" @else value="{{old('gPhone')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter Guardian Phone Number.
                                        </div>
                                        @error('gPhone')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="semister">Semister<span class="text-danger">*</span></label>
                                            <!-- Single Select -->
                                            <select class="form-control select2" name="semister" data-toggle="select2">
                                                <optgroup label="Select Semister">
                                                    @foreach ($semister as $semister)
                                                    <option @if($title_header == 'Update Student') {{$student->semister_id == "$semister->id" ? "selected" : ""}} @else @endif value="{{ $semister->id }}">{{$semister->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        <div class="invalid-feedback">
                                            Please enter Semister.
                                        </div>
                                        @error('semister')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="department">Department<span class="text-danger">*</span></label>
                                        <!-- Single Select -->
                                            <select class="form-control select2" name="department" data-toggle="select2">
                                                <optgroup label="Select Department">
                                                    @foreach ($department as $department)
                                                    <option @if($title_header == 'Update Student') {{$student->department_id == "$department->id" ? "selected" : ""}} @else @endif value="{{ $department->id }}">{{$department->name}}</option>
                                                    @endforeach
                                                </optgroup>
                                            </select>
                                        <div class="invalid-feedback">
                                            Please enter Gender.
                                        </div>
                                        @error('department')
                                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="Address">Address<span class="text-danger"> *</span></label>
                                        <input type="text" class="form-control" name="address" id="Address" placeholder="Address" required="" @if($title_header == 'Update Student') value="{{$student->address}}" @else value="{{old('address')}}" @endif>
                                        <div class="invalid-feedback">
                                            Please enter Address.
                                        </div>
                                        @error('address')
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
                @if($title_header == 'Update Student')
                <img src="{{ asset('storage/users/'.$student->image) }}" alt="" style="height: 200px">
                @else  
                @endif
              </div>
              <!-- end col-->

            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
