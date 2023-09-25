@extends('librarian.layouts.main')

@section('title',  'Issue Book' )
@section('main-section')

            <div class="row">
              <div class="col-sm-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title text-center mb-4">Issue Book</h4>
                    <div class="row">
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="student">Roll</label>
                          <input type="text" class="form-control" value="{{ $student->roll }}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-6 col-12">
                        <div class="mb-3">
                          <label class="form-label">Issue Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="{{ date('d-M-Y  h:i A') }}" readonly>
                            <button type="submit" class="btn btn-primary" disabled>Search</button>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="student">Name</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->fname.' '.$student->lname }}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="student">Department</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->department->name }}" readonly>
                        </div>
                      </div>
                      <div class="col-lg-4 col-12">
                        <div class="mb-3">
                          <label class="form-label" for="student">Semister</label>
                          <input type="text" name="book_code" class="form-control" value="{{ $student->semister->name }}" readonly>
                        </div>
                      </div>
                    </div>
                    <form action="{{ route('issue.store') }}" method="POST">
                      @csrf
                      <div class="mb-3">
                        <label class="form-label" for="book">Book </label>
                        <input type="hidden" name="student" value="{{ $student->id }}">
                        <div class="row">
                          <div class="col-lg-10 col-12 mb-3">
                            <select class="form-control select2" name="book" id="book" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name).'-'.$book->subject_code.' ('.$book->book_code.') '}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                          </div>
                          <div class="col-lg-2 col-12 text-end">
                            <button class="btn btn-outline-primary" type="submit">Issue Book</button>
                          </div>
                        </div>
                        @error('book')
                        <span class="text-danger form-text"><small>{{$message}}</small></span>
                        @enderror
                      </div>
                    </form>
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
