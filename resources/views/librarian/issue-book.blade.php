@extends('librarian.layouts.main')

@section('title',  'Issue Book' )
@section('main-section')

            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title mb-3">Issue Book</h4>
                    <form class="needs-validation" action="{{ route('issue.store') }}" method="POST" novalidate>
                      @csrf
                      <div class="row">
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="student">Name and Roll</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="student" data-toggle="select2">
                              <optgroup label="Select Student">
                                @foreach ($students as $student)
                                <option value="{{ $student->id }}">{{$student->fname.' '.$student->lname.' ('.$student->roll.')'}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select student.
                            </div>
                            @error('student')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_1">Book 1</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_1" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 1.
                            </div>
                            @error('book_1')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_2">Book 2</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_2" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_2')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_3">Book 3</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_3" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_3')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_4">Book 4</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_4" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_4')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_5">Book 5</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_5" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_5')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_6">Book 6</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_6" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_6')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_7">Book 7</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_7" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_7')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-4">
                          <div class="mb-3">
                            <label class="form-label" for="book_8">Book 8</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="book_8" data-toggle="select2">
                              <optgroup label="Select book">
                                @foreach ($books as $book)
                                <option value="{{ $book->id }}">{{ucwords($book->name)}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please select book 2.
                            </div>
                            @error('book_8')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        
                      </div>
                      <button class="btn btn-primary" type="submit">Issue</button>
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
