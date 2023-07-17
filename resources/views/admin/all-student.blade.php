@extends('admin.layouts.main')

@section('title', 'All Student')
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
                      <li class="breadcrumb-item active">All User</li>
                    </ol>
                  </div>
                  <h4 class="page-title">All Student</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                          <a href="{{route('admin.add-student')}}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add
                            Student</a>
                        </div>
                        <div class="col-sm-8">
                          <div class="text-sm-end">
                            <button type="button" class="btn btn-light mb-2">
                              Export
                            </button>
                          </div>
                        </div>
                        <!-- end col-->
                      </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Registration</th>
                                <th>Session</th>
                                <th>Phone</th>
                                <th>Guardian Phone</th>
                                <th>Semister</th>
                                <th>Department</th>
                                <th>Address</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->fname.' '.$student->lname}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->registration}}</td>
                                <td>
                                  @foreach ($session as $session_name)
                                    @if ($student->session_id == "$session_name->session_id")
                                     {{ $session_name->name }}
                                    @else
                                    @endif
                                  @endforeach
                                </td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->gPhone}}</td>
                                <td>
                                  @foreach ($semister as $semister_name)
                                  @if ($student->semister_id == $semister_name->semister_id)
                                   {{ $semister_name->name }}
                                  @else
                                  @endif
                                  @endforeach
                                </td>
                                <td>
                                  @foreach ($department as $department_name)
                                  @if ($student->department_id == $department_name->department_id)
                                   {{ $department_name->name }}
                                  @else
                                  @endif
                                  @endforeach
                                </td>
                                <td>{{$student->address}}</td>
                                <td>{{ date('d-M-Y', strtotime($student->created_at)) }}</td>
                                <td class="table-action">
                                    <a href="{{route('student.edit',['id'=>$student->id])}}" class="action-icon">
                                      <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Move to Trash" href="{{route('student.trash',['id'=>$student->id])}}" class="action-icon">
                                      <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
