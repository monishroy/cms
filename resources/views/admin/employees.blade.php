@extends('admin.layouts.main')

@section('title', 'Employees')
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @forelse ($employees as $employee)
                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <span class="float-start m-2 me-4">
                          <img src="{{ url("storage/users/$employee->image") }}" style="height: 100px" alt="" class="rounded-circle img-thumbnail">
                        </span>
                        <div class="">
                          <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                              <!-- item-->
                              <a href="{{ route('employees.edit', $employee->id) }}" class="dropdown-item">Edit</a>
                              <!-- item-->
                              <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="dropdown-item">Delete</button>
                              </form>
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
                  @empty
                  <div class="text-center" style="margin-top: 180px">
                    <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
                    <h4 class="text-uppercase text-muted">
                      Employees Not Found
                    </h4>
                  </div>
                  @endforelse

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
