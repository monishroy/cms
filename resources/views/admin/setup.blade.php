@extends('admin.layouts.main')

@section('title', 'Setup')
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
                                <label class="form-label" for="department_name">Department Name</label>
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
                                            <td>{{$department->name}}</td>
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
                                        <label class="form-label" for="session_name">Session Name</label>
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
                                            <td>{{$session->name}}</td>
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
                                            <label class="form-label" for="position_name">Position Name</label>
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
                                            <td>{{$position->name}}</td>
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
                            <h4 class="header-title mb-4">Add Blood Group</h4>
                            <!-- end nav-->
                            <div class="alert alert-warning" role="alert">
                                <i class="dripicons-warning me-2"></i> Blood Group
                                <strong>Our </strong> Requirement
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="custom-styles-preview">
                                    <form class="needs-validation" action="{{route('blood_group.store')}}" method="POST" novalidate="">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="blood_group">Blood Group</label>
                                            <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Blood Group name" value="{{old('blood_group')}}" required="">
                                            <div class="invalid-feedback">Please enter blood group name.</div>
                                            <h6 class="text-danger text-sm">
                                                @error('blood_group')
                                                {{$message}}
                                                @enderror
                                            </h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary" type="submit">
                                            Submit
                                            </button>
                                            <button class="btn btn-primary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#bloodGroup"
                                                aria-expanded="false" aria-controls="bloodGroup">
                                                Blood Group List
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end tab-content-->
                            <div class="collapse" id="bloodGroup">
                                <div class="mt-4 border">
                                    <!-- end preview-->
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th>Blood Group Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($blood_group as $blood)
                                            <tr>
                                                <td>{{$blood->name}}</td>
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
                            <h4 class="header-title mb-4"> Add Board</h4>
                            <!-- end nav-->
                            <div class="alert alert-warning" role="alert">
                                <i class="dripicons-warning me-2"></i> Board Name
                                <strong>Our </strong> Requirement
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="custom-styles-preview">
                                    <form class="needs-validation" action="{{route('board.store')}}" method="POST" novalidate="">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="board_name">Board Name</label>
                                            <input type="text" class="form-control" id="board_name" name="board_name" placeholder="Board name" value="{{old('board_name')}}" required="">
                                            <div class="invalid-feedback">Please enter Board name.</div>
                                            <h6 class="text-danger text-sm">
                                                @error('board_name')
                                                {{$message}}
                                                @enderror
                                            </h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary" type="submit">
                                            Submit
                                            </button>
                                            <button class="btn btn-primary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#boardList"
                                                aria-expanded="false" aria-controls="boardList">
                                                Board List
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end tab-content-->
                            <div class="collapse" id="boardList">
                                <div class="mt-4 border">
                                    <!-- end preview-->
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th>Board Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($boards as $board)
                                            <tr>
                                                <td>{{$board->name}}</td>
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
                            <h4 class="header-title mb-4"> Add Academic Exam</h4>
                            <!-- end nav-->
                            <div class="alert alert-warning" role="alert">
                                <i class="dripicons-warning me-2"></i> Academic Exam Name
                                <strong>Our </strong> Requirement
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="custom-styles-preview">
                                    <form class="needs-validation" action="{{route('academic_exam.store')}}" method="POST" novalidate="">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="academic_exam">Academic Exam Name</label>
                                            <input type="text" class="form-control" id="academic_exam" name="academic_exam" placeholder="Academic Exam name" value="{{old('academic_exam')}}" required="">
                                            <div class="invalid-feedback">Please enter Academic Exam name.</div>
                                            <h6 class="text-danger text-sm">
                                                @error('academic_exam')
                                                {{$message}}
                                                @enderror
                                            </h6>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-primary" type="submit">
                                            Submit
                                            </button>
                                            <button class="btn btn-primary" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#academicExam"
                                                aria-expanded="false" aria-controls="academicExam">
                                                Academic Exam List
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end tab-content-->
                            <div class="collapse" id="academicExam">
                                <div class="mt-4 border">
                                    <!-- end preview-->
                                    <table class="table table-sm table-striped">
                                        <thead>
                                            <tr>
                                                <th>Academic Exam Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($academic_exams as $exam)
                                            <tr>
                                                <td>{{$exam->name}}</td>
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
