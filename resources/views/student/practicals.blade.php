@extends('student.layouts.main')

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
                            <th>Practical Description</th>
                            <th>Added by</th>
                            <th>Added on</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($practicals as $index=>$practical)
                        <tr>
                          <td class="pt-3">{{ ++$index }}</td>
                          <td class="pt-3">{{ $practical->name }}</td>
                          <td class="pt-3">{{ $practical->description }}</td>
                          <td class="pt-3">{{ $practical->user->name }}</td>
                          <td class="pt-3">{{$practical->created_at->diffForHumans() }}</td>
                          <td>
                            <div class="d-flex">
                              <a href="{{ route('practical.download',['file'=>$practical->file]) }}" class="btn btn-sm btn-secondary me-1">
                                <i class="mdi mdi-download"></i>
                              </a>
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
