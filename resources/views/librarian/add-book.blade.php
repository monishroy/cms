@extends('librarian.layouts.main')

@section('title',  $title )
@section('main-section')

            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title mb-3">{{ $title }}</h4>
                    <form class="needs-validation" action="{{$url}}" method="POST" novalidate  enctype="multipart/form-data">
                      @csrf
                      @if($title == 'Update Book') 
                        @method('PUT')
                      @else 
                        
                      @endif
                      <div class="row">
                        <div class="col-md-8 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="name">Book Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Book name" required="" @if($title == 'Update Book') value="{{$book->name}}" @else value="{{old('name')}}" @endif>
                            <div class="invalid-feedback">
                              Please enter book name.
                            </div>
                            @error('name')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="mb-3">
                            <label class="form-label" for="image">Book Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder="Book image" >
                            <div class="invalid-feedback">
                              Please enter book image.
                            </div>
                            @error('image')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="subject_code">Subject Code</label>
                            <input type="text" class="form-control" name="subject_code" data-toggle="input-mask" data-mask-format="0000000" maxlength="11" placeholder="Book Subject Code" required="" @if($title == 'Update Book') value="{{$book->subject_code}}" @else value="{{old('subject_code')}}" @endif>
                            <div class="invalid-feedback">
                              Please enter book subject code.
                            </div>
                            @error('subject_code')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="book_code">Book Code</label>
                            <input type="text" class="form-control" name="book_code" placeholder="Book Code" required="" @if($title == 'Update Book') value="{{$book->book_code}}" @else value="{{old('book_code')}}" @endif>
                            <div class="invalid-feedback">
                              Please enter book code.
                            </div>
                            @error('book_code')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="probidhan">Probidhan</label>
                            <select class="form-control select2" name="probidhan" data-toggle="select2">
                              <optgroup label="Select Publication">
                                <option @if($title == 'Update Book') {{$book->probidhan == "2016" ? "selected" : ""}} @else @endif value="2016">2016</option>
                                <option @if($title == 'Update Book') {{$book->probidhan == "2022" ? "selected" : ""}} @else @endif value="2022">2022</option>
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please enter book name.
                            </div>
                            @error('probidhan')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="publication">Publication</label>
                            <select class="form-control select2" name="publication" data-toggle="select2">
                              <optgroup label="Select Publication">
                                <option @if($title == 'Update Book') {{$book->publication == "Hock" ? "selected" : ""}} @else @endif value="Hock">Hock</option>
                                <option @if($title == 'Update Book') {{$book->publication == "Technical" ? "selected" : ""}} @else @endif value="Technical">Technical</option>
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please enter Publication.
                            </div>
                            @error('publication')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="semister">Semister</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="semister" data-toggle="select2">
                              <optgroup label="Select Semister">
                                @foreach ($semister as $semister)
                                <option @if($title == 'Update Book') {{$book->semister_id == "$semister->id" ? "selected" : ""}} @else @endif value="{{ $semister->id }}">{{$semister->name}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please enter Semister.
                            </div>
                            @error('semister')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4 col-12">
                          <div class="mb-3">
                            <label class="form-label" for="department">Department</label>
                            <!-- Single Select -->
                            <select class="form-control select2" name="department" data-toggle="select2">
                              <optgroup label="Select Department">
                                @foreach ($department as $department)
                                <option @if($title == 'Update Book') {{$book->department_id == "$department->id" ? "selected" : ""}} @else @endif value="{{ $department->id }}">{{$department->name}}</option>
                                @endforeach
                              </optgroup>
                            </select>
                            <div class="invalid-feedback">
                              Please enter Department.
                            </div>
                            @error('department')
                            <span class="text-danger form-text"><small>{{$message}}</small></span>
                            @enderror
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">{{$title}}</button>
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
