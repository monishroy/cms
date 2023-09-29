@extends('admin.layouts.main')

@section('title', 'Employees')
@section('main-section')



            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2">
                      <div class="col-sm-4">
                        <a
                          href="{{ route('employees.create') }}"
                          class="btn btn-danger mb-2"
                          ><i class="mdi mdi-plus-circle me-2"></i> Add
                          Employee</a
                        >
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
                            <th>Present Address</th>
                            <th>Create Date</th>
                            <th style="width: 75px">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($employees as $index=>$employee)
                          <tr>
                            <td>{{ ++$index }}</td>
                            <td class="table-user">
                              <img src="{{ url("storage/users/$employee->image") }}" alt="image" class="img-fluid avatar-sm rounded me-3" style="height: 40px; width: 40px">
                              {{ $employee->name }}
                            </td>
                            <td>{{ $employee->phone }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->department->name }}</td>
                            <td>{{ $employee->dob }}</td>
                            <td>{{ date('d-M-Y', strtotime($employee->created_at)) }}</td>
                            <td>
                              <h4><span class="badge badge-info-lighten">{{ $employee->position->name }}</span></h4>
                            </td>
                            <td>{{ $employee->present_address }}</td>
                            <td>
                              <div class="d-flex">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-sm btn-primary me-1">
                                  <i class="uil-edit"></i>
                                </a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-sm btn-danger"><i class="uil-trash-alt"></i></button>
                                </form>
                              </div>
                            </td>
                          </tr>
                          @empty
                          <div class="text-center" style="margin-top: 180px">
                            <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
                            <h4 class="text-uppercase text-muted">
                              Employees Not Found
                            </h4>
                          </div>
                          @endforelse
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
