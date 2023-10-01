@extends('admin.layouts.main')

@section('title', 'Users')
@section('main-section')


            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive table-hover nowrap w-100">
                      <thead>
                        <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th>Role</th>
                          <th>Added</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $index=>$users)
                        <tr>
                          <td>{{++$index}}</td>
                          <td>
                            <img src="{{ asset('storage/users/'.$users->image) }}" alt="image" class="img-fluid avatar-sm rounded me-3">
                            {{$users->name}}
                          </td>
                          <td>{{$users->email}}</td>
                          <td>{{$users->phone}}</td>
                          <td>
                            @if ($users->status == "1")
                              <span class="badge badge-outline-success">Active</span>
                            @else
                              <span class="badge badge-outline-danger">Deactive</span>
                            @endif
                          </td>
                          <td>
                            @if ($users->role == "super-admin")
                              <span class="badge badge-outline-primary">{{ $users->role }}</span>
                            @elseif ($users->role == "admin")
                              <span class="badge badge-outline-danger">{{ $users->role }}</span>
                            @elseif ($users->role == "teacher")
                              <span class="badge badge-outline-success">{{ $users->role }}</span>
                            @elseif ($users->role == "librarian")
                              <span class="badge badge-outline-warning">{{ $users->role }}</span>
                            @else
                              <span class="badge badge-outline-info">Student</span>
                            @endif
                          </td>
                          <td>{{ Carbon\Carbon::parse($users->created_at)->diffForHumans() }}</td>
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
