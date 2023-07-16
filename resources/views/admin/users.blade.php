@extends('admin.layouts.main')

@section('title', 'All Teacher')
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
                        <a href="javascript: void(0);">CMS</a>
                      </li>
                      <li class="breadcrumb-item active">All User</li>
                    </ol>
                  </div>
                  <h4 class="page-title">All User</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>
                                    <img src="{{url('admin/assets/images/users/'.$users->image)}}" alt="image" class="img-fluid avatar-sm rounded me-3">
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
                                <td>{{ date('d-M-Y', strtotime($users->created_at)) }}</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon">
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
