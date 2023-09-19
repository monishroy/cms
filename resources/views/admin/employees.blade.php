@extends('admin.layouts.main')

@section('title', 'Employees')
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('employees.add') }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          <div class="row">
                            <div class="col-4">
                              <div class="mb-3">
                                <label class="form-label" for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="" value="{{old('name')}}">
                                <div class="invalid-feedback">
                                  Please enter name.
                                </div>
                                @error('name')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="mb-3">
                                <label class="form-label" for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{old('email')}}">
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
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image" required="">
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
                                <label class="form-label" for="phone">Phone Number</label>
                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{ old('phone') }}">
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
                                <label class="form-label" for="department">Department</label>
                                <select class="form-control select2" name="department" data-toggle="select2">
                                  <optgroup label="Select Department">
                                    @foreach ($department as $department)
                                    <option  value="{{ $department->id }}">{{$department->name}}</option>
                                    @endforeach
                                  </optgroup>
                                </select>
                                <div class="invalid-feedback">
                                  Please enter Department.
                                </div>
                                @error('department')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-4">
                              <div class="mb-3">
                                <label class="form-label" for="position">Position</label>
                                  <select class="form-control select2" name="position" data-toggle="select2">
                                    <optgroup label="Select position">
                                      @foreach ($position as $position)
                                      <option value="{{ $position->id }}">{{$position->name}}</option>
                                      @endforeach
                                    </optgroup>
                                  </select>
                                <div class="invalid-feedback">
                                  Please enter Position.
                                </div>
                                @error('position')
                                  <span class="text-danger form-text"><small>{{$message}}</small></span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12 mb-3">
                              <label class="form-label">About</label>
                              <textarea data-toggle="maxlength" class="form-control" name="about" maxlength="250" rows="3" placeholder="About from 100 word"> {{ old('about') }}</textarea>
                              @error('about')
                                <span class="text-danger form-text"><small>{{$message}}</small></span>
                              @enderror
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
              
              <div class="col-lg-12">
                <div class="row">
                  @foreach ($employees as $employee)
                  <div class="col-4">
                    <div class="card">
                      <div class="card-body">
                        <span class="float-start m-2 me-4">
                          <img src="{{ url("storage/employees/$employee->image") }}" style="height: 100px" alt="" class="rounded-circle img-thumbnail">
                        </span>
                        <div class="">
                          <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item">Edit</a>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                            </div>
                          </div>
                          <h4 class="mt-1 mb-1">{{ $employee->name }}</h4>
                          <p class="font-13">{{ $employee->position->name }}</p>
                          <p class="overflow-hidden">{{ Str::limit($employee->about, 140, '...')  }}</p>
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item me-3">
                              <h5 class="mt-1 mb-1">Phone</h5>
                              <p class="mb-0 font-13">{{ $employee->phone }}</p>
                            </li>
                            <li class="list-inline-item me-3">
                              <h5 class="mt-1 mb-1">Email</h5>
                              <p class="mb-0 font-13">{{ $employee->email }}</p>
                            </li>
                            <li class="list-inline-item">
                              <h5 class="mt-1 mb-1">Department</h5>
                              <p class="mb-0 font-13">{{ $employee->department->name }}</p>
                            </li>
                          </ul>
                        </div>
                        <!-- end div-->
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  @endforeach

                </div>
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
