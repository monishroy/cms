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
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $index=>$user)
                        <tr>
                          <td class="pt-3">{{++$index}}</td>
                          <td>
                            <img src="{{ asset('storage/users/'.$user->image) }}" alt="image" style="height: 40px; width: 40px" class="img-fluid border avatar-sm rounded me-3">
                            {{$user->name}}
                          </td class="pt-3">
                          <td class="pt-3">{{$user->email}}</td>
                          <td class="pt-3">{{$user->phone}}</td>
                          <td class="pt-3">
                            @if ($user->status == "1")
                              <a href="{{ route('user.status.deactive', $user->id) }}"><span class="badge badge-outline-success">Active</span></a>
                            @else
                              <a href="{{ route('user.status.active', $user->id) }}"><span class="badge badge-outline-danger">Deactive</span></a>
                            @endif
                          </td>
                          <td class="pt-3">
                            @if ($user->role == "super-admin")
                              <span class="badge badge-outline-primary">{{ $user->role }}</span>
                            @elseif ($user->role == "admin")
                              <span class="badge badge-outline-danger">{{ $user->role }}</span>
                            @elseif ($user->role == "teacher")
                              <span class="badge badge-outline-success">{{ $user->role }}</span>
                            @elseif ($user->role == "librarian")
                              <span class="badge badge-outline-warning">{{ $user->role }}</span>
                            @else
                              <span class="badge badge-outline-info">Student</span>
                            @endif
                          </td>
                          <td class="pt-3">{{ Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                          <td>
                            <div class="d-flex">
                              <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary me-1">
                                <i class="uil-edit"></i>
                              </a>
                              <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
