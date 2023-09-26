@extends('admin.layouts.main')

@section('title', 'Users')
@section('main-section')


            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
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
                              <a href="{{route('user.status.deactive',['id'=>$users->id])}}"><span class="badge badge-outline-success">Active</span></a>
                            @else
                              <a href="{{route('user.status.active',['id'=>$users->id])}}"><span class="badge badge-outline-danger">Deactive</span></a>
                            @endif
                          </td>
                          <td>
                            @if ($users->role == "admin")
                              <span class="badge badge-outline-primary">Admin</span>
                            @elseif ($users->role == "teacher")
                              <span class="badge badge-outline-success">Teacher</span>
                            @elseif ($users->role == "librarian")
                              <span class="badge badge-outline-warning">Librarian</span>
                            @else
                              <span class="badge badge-outline-info">Student</span>
                            @endif
                          </td>
                          <td>{{ Carbon\Carbon::parse($users->created_at)->diffForHumans() }}</td>
                          <td class="table-action">
                            <a href="javascript: void(0);" data-bs-toggle="modal" data-bs-target="#edit-{{ $users->id }}" class="btn btn-sm btn-success">
                              <i class=" uil-edit"></i>
                            </a>
                          </td>
                        </tr>

                        {{-- Model Start --}}
                        <div class="modal fade" id="edit-{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title" id="mySmallModalLabel">Update Role</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation row" action="{{ route('users.update', $users->id) }}" method="POST" novalidate="">
                                  @csrf
                                  @method('PUT')
                                  <div class="mb-3 col-12">
                                    <label class="form-label" for="role">Role</label>
                                    <select class="form-control" name="role" >
                                      <optgroup label="Select Role">
                                        <option @if ($users->role == 'admin') selected @else @endif value="admin">Admin</option>
                                        <option @if ($users->role == 'student') selected @else @endif value="student">Student</option>
                                        <option @if ($users->role == 'teacher') selected @else @endif value="teacher">Teacher</option>
                                        <option @if ($users->role == 'librarian') selected @else @endif value="librarian">Librarian</option>
                                      </optgroup>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter Role.
                                    </div>
                                    @error('role')
                                    <span class="text-danger form-text"><small>{{$message}}</small></span>
                                    @enderror
                                  </div>
                                  <button type="submit" class="btn btn-sm btn-primary col-12">Submit</button>
                                </form>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
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
