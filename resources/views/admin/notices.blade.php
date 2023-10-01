@extends('admin.layouts.main')

@section('title', $title)
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                      <thead>
                          <tr>
                            <th>SL</th>
                            <th>Notice Title</th>
                            <th>Status</th>
                            <th>Downloaded</th>
                            <th>Added on</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($notice as $index=>$notice)
                        <tr>
                          <td>{{ ++$index }}</td>
                          <td>{{ $notice->name }}</td>
                          <td>
                            @if ($notice->status == "0")
                              <span class="badge badge-outline-warning">Panding</span>
                            @elseif ($notice->status == "1")
                              <span class="badge badge-outline-success">Completed</span>
                            @else
                              <span class="badge badge-outline-danger">Declined</span>
                            @endif
                          </td>
                          <td>{{ $notice->download }}</td>
                          <td>{{ date('d-M-Y', strtotime($notice->created_at)) }}</td>
                          <td>
                            <a href="{{ route('admin.notice.download',['file'=>$notice->file]) }}" class="action-icon">
                              <i class="mdi mdi-download"></i>
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
