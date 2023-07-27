@extends('admin.layouts.main')

@section('title', 'Employees')
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
                        <a href="javascript: void(0);">CMS</a>
                      </li>
                      <li class="breadcrumb-item active">Employees</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Employees</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-5">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ route('employees.add') }}" method="POST" novalidate="" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="" value="{{old('name')}}">
                                        <div class="invalid-feedback">
                                            Please enter notice title.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="image" required="">
                                        <div class="invalid-feedback">
                                            Please enter last name.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('image')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" value="{{old('email')}}">
                                        <div class="invalid-feedback">
                                            Please enter notice title.
                                        </div>
                                        <span class="text-danger text-sm">
                                            @error('email')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="phone">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="">
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
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="department">Department</label>
                                        <!-- Single Select -->
                                            <select class="form-control select2" name="department" data-toggle="select2">
                                                <optgroup label="Select Department">
                                                    @foreach ($department as $department)
                                                    <option  value="{{ $department->id }}">{{$department->name}}</option>
                                                    @endforeach
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
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="position">Position</label>
                                        <!-- Single Select -->
                                            <select class="form-control select2" name="position" data-toggle="select2">
                                                <optgroup label="Select position">
                                                    @foreach ($position as $position)
                                                    <option value="{{ $position->id }}">{{$position->name}}</option>
                                                    @endforeach
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
                                <div class="col-12 mb-3">
                                  <label class="form-label">About</label>
                                  <textarea data-toggle="maxlength" class="form-control" name="about" maxlength="100" rows="3" placeholder="About from 100 word"></textarea>
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
              
              <div class="col-lg-7">
                <div class="row">
                  @foreach ($employees as $employee)
                  <div class="col-6">
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
                          <p class="overflow-hidden">{{ $employee->about }}</p>
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
