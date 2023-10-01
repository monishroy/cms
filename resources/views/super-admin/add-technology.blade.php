@extends('super-admin.layouts.main')

@section('title', $title)
@section('main-section')

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <!-- end nav-->
                    <div class="tab-content">
                      <div class="tab-pane show active" id="custom-styles-preview">
                        <form class="needs-validation" action="{{ $url }}" method="POST" novalidate="" enctype="multipart/form-data">
                          @csrf
                          @if($title == 'Update Technology') 
                          @method('PUT')
                          @else
                          @endif
                          <div class="row">
                            <div class="col-3">
                              <div class="mb-3">
                                <label class="form-label" for="name">Technology Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Technology Name" required="" @if($title == 'Update Technology') value="{{$technology->name}}" @else value="{{old('name')}}" @endif>
                                <div class="invalid-feedback">
                                  Please enter technology name.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('name')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="mb-3">
                                <label class="form-label" for="image1">Image 1</label>
                                <input type="file" class="form-control" name="image1" id="image1" @if($title == 'Update Technology') @else required="" @endif>
                                <div class="invalid-feedback">
                                  Please enter image1.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('image1')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="mb-3">
                                <label class="form-label" for="image2">Image 2</label>
                                <input type="file" class="form-control" name="image2" id="image2" @if($title == 'Update Technology') @else required="" @endif>
                                <div class="invalid-feedback">
                                  Please enter image2.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('image2')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-3">
                              <div class="mb-3">
                                <label class="form-label" for="image3">Image 3</label>
                                <input type="file" class="form-control" name="image3" id="image3" @if($title == 'Update Technology') @else required="" @endif>
                                <div class="invalid-feedback">
                                  Please enter image3.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('image3')
                                  {{$message}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="mb-3">
                                <label for="example-textarea" class="form-label">Content</label>
                                <textarea id="content" name="content" id="example-textarea" required>@if($title == 'Update Technology') {{$technology->content}} @else {{old('content')}} @endif</textarea>
                                <div class="invalid-feedback">
                                  Please enter content.
                                </div>
                                <span class="text-danger text-sm">
                                  @error('text1')
                                  {{$content}}
                                  @enderror
                                </span>
                              </div>
                            </div>
                          </div>
                          <button class="btn btn-primary" type="submit">
                            Submit
                          </button>
                        </form>
                      </div>
                      <!-- end preview-->
                    </div>
                    <!-- end tab-content-->
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
