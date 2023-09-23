@extends('librarian.layouts.main')

@section('title',  'Return Book' )
@section('main-section')

            <div class="row">
              <div class="col-sm-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title text-center mb-4">Return Book</h4>
                    <div class="row">
                      <div class="col-12">

                        @error('book_code')
                          <div class="alert alert-danger" role="alert">
                            <i class="dripicons-wrong me-2"></i><strong>{{$message}}</strong>
                          </div>
                        @enderror
                      </div>
                      <div class="col-6">
                        <div class="mb-3">
                          <label class="form-label" for="student">Roll</label>
                          <input type="text" class="form-control" value="{{ $student->roll }}" readonly>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mb-3">
                          <label class="form-label">Return Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="{{ date('d-M-Y  h:i A') }}" readonly>
                            <button type="submit" class="btn btn-primary" disabled>Search</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="mb-3">
                          <label class="form-label" for="student">Name</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->fname.' '.$student->lname }}" readonly>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="mb-3">
                          <label class="form-label" for="student">Department</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->department->name }}" readonly>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="mb-3">
                          <label class="form-label" for="student">Semister</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->semister->name }}" readonly>
                        </div>
                      </div>
                    </div>
                    @foreach ($issue_books as $issue_book)
                    <form class="needs-validation row" action="{{ route('issue.update', $issue_book->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div class="col-6">
                        <div class="mb-3">
                          <label class="form-label" >Book Name</label>
                          <input type="hidden" name="book_id" value="{{ $issue_book->book->id }}">
                          <input type="hidden" name="old_book_code" value="{{ $issue_book->book->book_code }}">
                          <input type="text" class="form-control" value="{{ $issue_book->book->name.' ('.$issue_book->book->subject_code.')'.'('.$issue_book->book->book_code.')' }}" readonly>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="mb-3">
                          <label class="form-label">Book Code</label>
                          <div class="input-group">
                            <input type="text" name="book_code" class="form-control" placeholder="Enter Book Code">
                            <button type="submit" class="btn btn-primary">Return Book</button>
                          </div>
                        </div>
                      </div>
                    </form>
                    @endforeach
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
