@extends('librarian.layouts.main')

@section('title',  'Issue Book' )
@section('main-section')

            <div class="row">
              <div class="col-sm-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title mb-3">Issue Book</h4>
                    <form class="needs-validation" action="{{ route('issue.store') }}" method="POST" novalidate>
                      @csrf
                      <div class="row">
                        <div class="col-6">
                          <div class="mb-3">
                            <label class="form-label" for="user_id">Name and Roll</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="user_id" data-toggle="select2">
                              <optgroup label="Select Student">
                                @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{$student->fname.' '.$student->lname.' ('.$student->roll.')'}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select student.
                            </div>
                            @error('user_id')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="text" name="issue_date" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                            @error('issue_date')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mb-3">
                            <label class="form-label" for="book_id">Book </label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_id" id="book_id" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name).' ('.$book->subject_code.') '.' ('.$book->book_code.') '}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book .
                            </div>
                            @error('book_id')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Issue Book</button>
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
