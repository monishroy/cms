@extends('admin.layouts.main')

@section('title', 'Categories')
@section('main-section')


            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Semister</h4>
                        <!-- end nav-->
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-warning me-2"></i> Semister use fullname example:
                            <strong>?st Semister</strong>
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" action="{{route('semister.store')}}" method="POST" novalidate="">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label" for="semister_name">Semister Name</label>
                                  <input type="text" class="form-control" id="semister_name" name="semister_name" placeholder="Semister name" value="{{old('semister_name')}}" required="">
                                  <div class="invalid-feedback">Please enter semister name.</div>
                                  <h6 class="text-danger text-sm">
                                    @error('semister_name')
                                    {{$message}}
                                    @enderror
                                  </h6>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary" type="submit">
                                      Submit
                                    </button>
                                    <button class="btn btn-primary" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#semisterList"
                                        aria-expanded="false" aria-controls="semisterList">
                                        Semister List
                                    </button>
                                </div>
                            </form>
                          </div>
                        </div>
                        <!-- end tab-content-->
                        <div class="collapse" id="semisterList">
                            <div class="mt-4 border">
                                <!-- end preview-->
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Semister Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($semister as $semister)
                                        <tr>
                                            <td>
                                                {{ $semister->name }}
                                            </td>
                                            <td>
                                                <a href="" class="action-icon text-xs">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <a href="javascript: void(0);" class="action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          </div>
                      </div>
                      <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Department</h4>
                        <!-- end nav-->
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-warning me-2"></i> Enter
                            <strong>Full name</strong> in Department
                        </div>
                        <div class="tab-content">
                          <div class="tab-pane show active" id="custom-styles-preview">
                            <form class="needs-validation" action="{{route('department.store')}}" method="POST" novalidate="">
                              @csrf
                              <div class="mb-3">
                                <label class="form-label" for="department_name">Add Department</label>
                                <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Department name" value="{{old('department_name')}}" required="">
                                <div class="invalid-feedback">Please enter department name.</div>
                                <h6 class="text-danger text-sm">
                                    @error('department_name')
                                    {{$message}}
                                    @enderror
                                </h6>
                              </div>
                              <div class="d-flex justify-content-between">
                                <button class="btn btn-primary" type="submit">
                                  Submit
                                </button>
                                <button class="btn btn-primary" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#departmentList"
                                    aria-expanded="false" aria-controls="departmentList">
                                    Department List
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                        <!-- end tab-content-->
                        <div class="collapse" id="departmentList">
                            <div class="mt-4 border">
                                <!-- end preview-->
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($department as $department)
                                        <tr>
                                            <td>{{$department['name']}}</td>
                                            <td>
                                                <a href="" class="action-icon text-xs">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <a href="javascript: void(0);" class="action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                      <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
                <div class="col-lg-3">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="header-title mb-4">Add Session</h4>
                        <!-- end nav-->
                        <div class="alert alert-warning" role="alert">
                            <i class="dripicons-warning me-2"></i> Session name only
                            <strong>6</strong> word of number
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="custom-styles-preview">
                                <form class="needs-validation" action="{{route('session.store')}}" method="POST" novalidate="">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="session_name">Add Session</label>
                                        <input type="text" class="form-control" name="session_name" id="session_name" data-toggle="input-mask" data-mask-format="0000-00" maxlength="7" placeholder="Session" required="" value="{{old('session')}}">
                                        <div class="invalid-feedback">Please enter Session name.</div>
                                        <h6 class="text-danger text-sm">
                                            @error('session_name')
                                            {{$message}}
                                            @enderror
                                        </h6>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary" type="submit">
                                        Submit
                                        </button>
                                        <button class="btn btn-primary" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#sessionList"
                                            aria-expanded="false" aria-controls="sessionList">
                                            Session List
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- end tab-content-->
                        <div class="collapse" id="sessionList">
                            <div class="mt-4 border">
                                <!-- end preview-->
                                <table class="table table-sm table-striped">
                                    <thead>
                                        <tr>
                                            <th>Session Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($session as $session)
                                        <tr>
                                            <td>{{$session['name']}}</td>
                                            <td>
                                                <a href="" class="action-icon text-xs">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <a href="javascript: void(0);" class="action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      </div>
                      <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>

                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Add Teacher Position</h4>
                            <!-- end nav-->
                            <div class="alert alert-warning" role="alert">
                                <i class="dripicons-warning me-2"></i> Employees Position
                                <strong>Our </strong> Requirement
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="custom-styles-preview">
                                    <form class="needs-validation" action="{{route('possion.store')}}" method="POST" novalidate="">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="position_name">Add Position</label>
                                            <input type="text" class="form-control" id="position_name" name="position_name" placeholder="Position name" value="{{old('position_name')}}" required="">
                                            <div class="invalid-feedback">Please enter position name.</div>
                                            <h6 class="text-danger text-sm">
                                                @error('position_name')
                                                {{$message}}
                                                @enderror
                                            </h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary" type="submit">
                                            Submit
                                            </button>
                                            <button class="btn btn-primary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#possionList"
                                                aria-expanded="false" aria-controls="possionList">
                                                Position List
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end tab-content-->
                            <div class="collapse" id="possionList">
                                <div class="mt-4 border">
                                    <!-- end preview-->
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th>Position Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($position as $position)
                                        <tr>
                                            <td>{{$position['name']}}</td>
                                            <td>
                                                <a href="" class="action-icon text-xs">
                                                    <i class="mdi mdi-pencil"></i>
                                                </a>
                                                <a href="javascript: void(0);" class="action-icon">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end card-body-->
                    </div>
                    <!-- end card-->
                </div>
            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
