@extends('admin.layouts.main')

@section('title', $title)
@section('main-section')



            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2">
                      <div class="col-sm-4">
                        <a href="{{ route('employees.create') }}" class="btn btn-primary mb-2"> Add Employee</a>
                      </div>
                      <div class="col-sm-8">
                        <div class="text-sm-end">
                          <button
                            type="button"
                            class="btn btn-success mb-2 me-1"
                          >
                            <i class="mdi mdi-cog"></i>
                          </button>
                          <button type="button" class="btn btn-light mb-2 me-1">
                            Import
                          </button>
                          <button type="button" class="btn btn-light mb-2">
                            Export
                          </button>
                        </div>
                      </div>
                      <!-- end col-->
                    </div>

                    <div class="table-responsive">
                      <table
                        class="table table-centered table-striped dt-responsive nowrap w-100"
                         id="selection-datatable"
                      >
                        <thead>
                          <tr>
                            <th>SL</th>
                            <th>Customer</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Department</th>
                            <th>DOB</th>
                            <th>Position</th>
                            <th>Status</th>
                            <th>Present Address</th>
                            <th>Create Date</th>
                            <th style="width: 75px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($employees as $index=>$employee)
                          <tr>
                            <td>{{ ++$index }}</td>
                            <td class="table-user">
                              <img src="{{ asset("storage/users/$employee->image") }}" alt="image" class="img-fluid avatar-sm rounded me-3" style="height: 40px; width: 40px">
                              {{ $employee->name }}
                            </td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->department->name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>
                              <h4><span class="badge badge-info-lighten">{{ $employee->position->name }}</span></h4>
                            </td>
                            <td>
                              @if ($employee->status == "0")
                                <span class="badge badge-outline-warning">Panding</span>
                              @elseif ($employee->status == "1")
                                <span class="badge badge-outline-success">Done</span>
                              @else
                                <span class="badge badge-outline-danger">Declined</span>
                              @endif
                            </td>
                            <td>{{ $employee->present_address }}</td>
                            <td>{{ date('d-M-Y', strtotime($employee->created_at)) }}</td>
                            <td>
                              <div class="d-flex">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary me-1">
                                  <i class="uil-edit"></i>
                                </a>
                                @if (Auth::user()->role === 'super-admin')
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="uil-trash-alt"></i></button>
                                </form>
                                @endif
                              </div>
                            </td>
                          </tr>
                          @endforeach 
                        </tbody>
                      </table>
                    </div>
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
