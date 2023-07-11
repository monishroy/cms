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
                        <a href="javascript: void(0);">SMS</a>
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
                                <th>Gender</th>
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
                                <td>{{$student->session}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->gPhone}}</td>
                                <td>
                                    @if ($student->semister == "1")
                                    1st Semister
                                    @elseif ($student->semister == "2")
                                    2nd Semister
                                    @elseif ($student->semister == "3")
                                    3th Semister
                                    @elseif ($student->semister == "4")
                                    4th Semister
                                    @elseif ($student->semister == "5")
                                    5th Semister
                                    @elseif ($student->semister == "6")
                                    6th Semister
                                    @elseif ($student->semister == "7")
                                    7th Semister
                                    @else
                                    8th Semister
                                    @endif
                                </td>
                                <td>
                                    @if ($student->gender == "M")
                                    <span class="badge badge-outline-info">Male</span>
                                    @elseif ($student->gender == "F")
                                    <span class="badge badge-outline-info">Female</span>
                                    @else
                                    <span class="badge badge-outline-danger">Other</span>
                                    @endif
                                </td>
                                <td>{{$student->address}}</td>
                                <td>{{ date('d-M-Y', strtotime($student->created_at)) }}</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="{{route('student.edit',['id'=>$student->id])}}" class="action-icon">
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
