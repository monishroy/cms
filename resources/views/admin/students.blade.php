@extends('admin.layouts.main')

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
                            <th>Status</th>
                            <th>Added</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($students as $index=>$student)
                        <tr>
                          <td>{{ ++$index }}</td>
                          <td>
                            <img src="{{ asset("storage/users/$student->image") }}" alt="image" class="img-fluid avatar-sm rounded me-3" style="height: 40px; width: 40px">
                            {{$student->fname.' '.$student->lname}}
                          </td>
                          <td class="pt-3">{{$student->roll}}</td>
                          <td class="pt-3">{{$student->registration}}</td>
                          <td class="pt-3">{{ $student->session->name }}</td>
                          <td class="pt-3">{{$student->phone}}</td>
                          <td class="pt-3">{{$student->guardian_phone}}</td>
                          <td class="pt-3">{{ $student->semister->name }}</td>
                          <td class="pt-3">{{ $student->department->name }}</td>
                          <td class="pt-3">
                            @if ($student->status == "0")
                              <span class="badge badge-outline-warning">Panding</span>
                            @elseif ($student->status == "1")
                              <span class="badge badge-outline-success">Done</span>
                            @else
                              <span class="badge badge-outline-danger">Declined</span>
                            @endif
                          </td>
                          <td class="pt-3">{{ date('d-M-Y', strtotime($student->created_at)) }}</td>
                          <td class="table-action">
                            <div class="d-flex">
                              <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary me-1">
                                <i class="uil-edit"></i>
                              </a>
                              <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"><i class="uil-trash-alt"></i></button>
                              </form>
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
