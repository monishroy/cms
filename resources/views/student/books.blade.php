@extends('student.layouts.main')

@section('title', 'Books')
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @forelse ($issue_books as $issue_book)
                    <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body row">
                        <span class="float-start m-2 col-4">
                          <img src="{{ url("storage/books/".$issue_book->book->image) }}" style="height: 150px" alt="" class=" img-thumbnail">
                        </span>
                        <div class="col-7">
                          <h4 class="my-1">{{ Str::limit(ucwords($issue_book->book->name), 16, '...')  }}</h4>
                          <p class="font-13 text-primary">
                            <span class="text-primay">{{ $issue_book->book->subject_code }}</span>
                            <span class="text-muted"><i class="mdi mdi-circle-medium text-info"></i>{{ $issue_book->book->semister->name }}</span>
                            <span class="text-warning"><i class="mdi mdi-circle-medium text-info"></i>{{ $issue_book->book->book_code }}</span>
                          </p>
                          <p class="text-muted">
                            <i class="mdi mdi-circle-medium text-primary"></i> <strong>Probidhan :</strong>
                            {{ $issue_book->book->probidhan }}
                          </p>
                          <p class="text-muted">
                            <i class="mdi mdi-circle-medium text-primary"></i> <strong>Publication :</strong>
                            {{ ucwords($issue_book->book->publication) }}
                          </p>
                          <p class="text-muted">
                            <i class="mdi mdi-circle-medium text-primary"></i> <strong>Department :</strong>
                            {{ $issue_book->book->department->name }}
                          </p>
                        </div>
                        <!-- end div-->
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  @empty
                  <div class="text-center" style="margin-top: 180px">
                    <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
                    <h4 class="text-uppercase text-muted">
                      Books Not Found
                    </h4>
                  </div>
                  @endforelse
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
