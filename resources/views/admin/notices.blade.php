@extends('admin.layouts.main')

@section('title', $title)
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <table id="basic-datatable" class="table dt-responsive table-hover nowrap w-100">
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
                          <td class="pt-3">{{ ++$index }}</td>
                          <td class="pt-3">{{ $notice->name }}</td>
                          <td class="pt-3">
                            @if ($notice->status == "0")
                              <span class="badge badge-outline-warning">Panding</span>
                            @elseif ($notice->status == "1")
                              <span class="badge badge-outline-success">Completed</span>
                            @else
                              <span class="badge badge-outline-danger">Declined</span>
                            @endif
                          </td>
                          <td class="pt-3">{{ $notice->download }}</td>
                          <td class="pt-3">{{ date('d-M-Y', strtotime($notice->created_at)) }}</td>
                          <td>
                            
                            <div class="d-flex">
                              <a href="{{ route('admin.notice.download',['file'=>$notice->file]) }}" class="btn btn-sm btn-secondary me-1">
                                <i class="mdi mdi-download"></i>
                              </a>
                              <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-sm btn-primary me-1">
                                <i class="uil-edit"></i>
                              </a>
                              @if (Auth::user()->role == 'super-admin')
                              <form action="{{ route('notice.destroy', $notice->id) }}" method="POST">
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
