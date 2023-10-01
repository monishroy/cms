@extends('librarian.layouts.main')

@section('title',  'Return Book' )
@section('main-section')

            <div class="row">
              <div class="col-sm-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title text-center mb-4">Return Book</h4>
                    <div class="row">
                      <div class="col-lg-12 col-12">
                      @error('book_code')
                        <div class="alert alert-danger" role="alert">
                          <i class="dripicons-wrong me-2"></i><strong>{{$message}}</strong>
                        </div>
                      @enderror
                      </div>
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="student">Roll</label>
                          <input type="text" class="form-control" value="{{ $student->roll }}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label">Return Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="{{ date('d-M-Y  h:i A') }}" readonly>
                            <button type="submit" class="btn btn-primary" disabled>Search</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <p class="text-muted">
                            <i class="uil-check-circle text-success fs-4 lh-2"></i>
                            <strong> Name :</strong>
                            <span class="ms-2">{{ $student->fname.' '.$student->lname }}</span>
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <p class="text-muted">
                            <i class="uil-check-circle text-success fs-4 lh-2"></i>
                            <strong> Department :</strong>
                            <span class="ms-2">{{ $student->department->name }}</span>
                          </p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <p class="text-muted">
                            <i class="uil-check-circle text-success fs-4 lh-2"></i>
                            <strong> Semister :</strong>
                            <span class="ms-2">{{ $student->semister->name }}</span>
                          </p>
                        </div>
                      </div>
                    </div>
                    @forelse ($issue_books as $issue_book)
                    <form class="row" action="{{ route('return.book', $issue_book->id) }}" method="POST">
                      @csrf
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label" >Book Name</label>
                          <input type="hidden" name="book_id" value="{{ $issue_book->book->id }}">
                          <input type="hidden" name="old_book_code" value="{{ $issue_book->book->book_code }}">
                          <input type="text" class="form-control" value="{{ $issue_book->book->name.' ('.$issue_book->book->subject_code.')'.'('.$issue_book->book->book_code.')' }}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label">Book Code</label>
                          <div class="input-group">
                            <input type="text" name="book_code" class="form-control" placeholder="Enter Book Code">
                            <button type="submit" class="btn btn-primary">Return Book</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    @empty
                    <div class="text-center mt-4">
                      <img src="{{ url('admin/assets/images/not-found.png') }}" height="100" alt="File not found Image">
                      <h4 class="text-uppercase text-muted">
                        Books Not Found
                      </h4>
                    </div>
                    @endforelse 
                  </div>
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
