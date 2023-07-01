@extends('admin.layouts.main')

@section('title', 'All User')
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
                        <a href="javascript: void(0);">SMS</a>
                      </li>
                      <li class="breadcrumb-item active">All User</li>
                    </ol>
                  </div>
                  <h4 class="page-title">All Teacher</h4>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>
                                    @if ($teacher->status == "1")
                                        Active
                                    @else
                                        Deactive
                                    @endif
                                </td>
                                <td>{{$teacher->created_at}}</td>
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
