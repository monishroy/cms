@extends('teacher.layouts.main')

@section('title', $title)
@section('main-section')



            <div class="row">
              <div class="col-lg-6 mx-auto">
                <div class="card">
                  <h4 class="text-center my-3">{{ $title }}</h4>
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('practicals.store') }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-md-4 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="department">Department<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="department" data-toggle="select2" required>
                                  <option value="">Select Department</option>
                                  @foreach ($departments as $department)
                                  <option {{old('department') == "$department->id" ? "selected" : ""}} value="{{ $department->id }}">{{$department->name}}</option>
                                  @endforeach
                                </select>
                                <div class="invalid-feedback">
                                  Please select department.
                                </div>
                                @error('department')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="semister">Semister<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="semister" data-toggle="select2" required>
                                  <option value="">Select Semister</option>
                                  @foreach ($semisters as $semister)
                                  <option {{old('semister') == "$semister->id" ? "selected" : ""}} value="{{ $semister->id }}">{{$semister->name}}</option>
                                  @endforeach
                                </select>
                                <div class="invalid-feedback">
                                  Please select semister.
                                </div>
                                @error('semister')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="session">Session<span class="text-danger"> *</span></label>
                                <select class="form-control select2" name="session" data-toggle="select2" required>
                                  <option value="">Select Session</option>
                                  @foreach ($sessions as $session)
                                  <option {{old('session') == "$session->id" ? "selected" : ""}} value="{{ $session->id }}">{{$session->name}}</option>
                                  @endforeach
                                </select>
                                <div class="invalid-feedback">
                                  Please select session.
                                </div>
                                @error('session')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="name">Practical Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Practical Name" required="" value="{{old('name')}}" > 
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('name')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="file">Practical File</label>
                                <input type="file" class="form-control" name="file" id="file"  required="">
                                <div class="invalid-feedback">
                                  Please enter file.
                                </div>
                                @error('file')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label class="form-label" for="description">Practical Description</label>
                                <textarea type="text" class="form-control" name="description" id="description" placeholder="Practical Description" required="">{{old('name')}}</textarea>
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('description')
                                  <span class="text-danger text-sm"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Added Name</label>
                                <input type="text" class="form-control" readonly value="{{Auth::user()->name}}">
                              </div>
                            </div>
                            <div class="col-md-6 col-12">
                              <div class="mb-3">
                                <label class="form-label" for="roll">Added Date</label>
                                <input type="text" class="form-control" value="{{ date('d-M-Y h:i A') }}" readonly>
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
