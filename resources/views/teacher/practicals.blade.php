@extends('teacher.layouts.main')

@section('title', 'Practicals')
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
                            <th>Practical Name</th>
                            <th>Status</th>
                            <th>Downloaded</th>
                            <th>Added on</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($practicals as $index=>$practical)
                        <tr>
                          <td class="pt-3">{{ ++$index }}</td>
                          <td class="pt-3">{{ $practical->name }}</td>
                          <td class="pt-3">
                            @if ($practical->status == "0")
                              <span class="badge badge-outline-warning">Panding</span>
                            @elseif ($practical->status == "1")
                              <span class="badge badge-outline-success">Active</span>
                            @else
                              <span class="badge badge-outline-danger">Declined</span>
                            @endif
                          </td>
                          <td class="pt-3">{{ $practical->download }}</td>
                          <td class="pt-3">{{ Carbon\Carbon::parse($practical->created_at)->diffForHumans() }}</td>
                          <td>
                            <div class="d-flex">
                              <a href="{{ route('practical.download',['file'=>$practical->file]) }}" class="btn btn-sm btn-secondary me-1">
                                <i class="mdi mdi-download"></i>
                              </a>
                              @if ($practical->status == '1')
                                <a href="{{ route('deactive.practical', $practical->id) }}" class="btn btn-sm btn-warning me-1">
                                  <i class="mdi mdi-close"></i>
                                </a>
                              @else
                                <a href="{{ route('active.practical', $practical->id) }}" class="btn btn-sm btn-success me-1">
                                  <i class="uil-check"></i>
                                </a>
                              @endif
                              <form action="{{ route('practicals.destroy', $practical->id) }}" method="POST">
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
