@extends('super-admin.layouts.main')

@section('title', 'Students')
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2">
                      <div class="col-sm-4">
                        <a href="{{route('students.create')}}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add
                          Student</a>
                      </div>
                      <div class="col-sm-8">
                        <div class="text-sm-end">
                          <button type="button" class="btn btn-light mb-2">
                            Export
                          </button>
                        </div>
                      </div>
                    </div>
                    <table id="basic-datatable" class="table dt-responsive table-hover nowrap w-100">
                      <thead>
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Registration</th>
                            <th>Session</th>
                            <th>Phone</th>
                            <th>Guardian Phone</th>
                            <th>Semister</th>
                            <th>Department</th>
                            <th>Permanent Address</th>
                            <th>Added</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $index=>$student)
                        <tr>
                          <td>{{ ++$index }}</td>
                          <td>
                            
                            {{$student->fname.' '.$student->lname}}
                          </td>
                          <td>{{$student->roll}}</td>
                          <td>{{$student->registration}}</td>
                          <td>
                            {{ $student->session->name }}
                          </td>
                          <td>{{$student->phone}}</td>
                          <td>{{$student->guardian_phone}}</td>
                          <td>
                            {{ $student->semister->name }}
                          </td>
                          <td>
                            {{ $student->department->name }}
                          </td>
                          <td>{{$student->permanent_address}}</td>
                          <td>{{ date('d-M-Y', strtotime($student->created_at)) }}</td>
                          <td class="table-action">
                            <div class="dropdown">
                              <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end" style="">
                                <!-- item-->
                                <a href="{{route('students.edit', $student->id)}}" class="dropdown-item">Edit</a>
                                <!-- item-->
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                              </div>
                            </div>
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
