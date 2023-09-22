@extends('admin.layouts.main')

@section('title', 'Employees')
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @foreach ($employees as $employee)
                  <div class="col-4">
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
                          <p class="overflow-hidden">{{ Str::limit($employee->about, 140, '...')  }}</p>
                          <ul class="mb-0 list-inline">
                            <li class="list-inline-item me-3">
                              <h5 class="mt-1 mb-1">Phone</h5>
                              <p class="mb-0 font-13">{{ $employee->phone }}</p>
                            </li>
                            <li class="list-inline-item me-3">
                              <h5 class="mt-1 mb-1">Email</h5>
                              <p class="mb-0 font-13">{{ Str::limit($employee->email, 20, '...')  }}</p>
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
