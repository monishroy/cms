@extends('librarian.layouts.main')

@section('title', 'Books')
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @foreach ($books as $book)
                  <div class="col-3">
                    <div class="card">
                      <div class="card-body">
                        <span class="float-start m-2 me-4">
                          <img src="{{ url("storage/books/$book->image") }}" style="height: 150px" alt="" class=" img-thumbnail">
                        </span>
                        <div class="">
                          <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="mdi mdi-dots-vertical"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" style="">
                              <!-- item-->
                              <a href="{{route('books.edit', $book->id)}}" class="dropdown-item">Edit</a>
                              <!-- item-->
                              <a href="javascript:void(0);" class="dropdown-item">Delete</a>
                            </div>
                          </div>
                          <h4 class="mt-1 mb-1">{{ Str::limit($book->name, 16, '...').' ('.$book->quantity.')'  }}</h4>
                          <p class="font-13">{{ $book->subject_code }}
                              <i class="mdi mdi-circle-medium text-info"></i>
                              {{ $book->semister->name }}
                            </p>
                            <p class="text-muted">
                              <i class="mdi mdi-circle-medium text-primary"></i> <strong>Probidhan :</strong>
                              {{ $book->probidhan }}
                            </p>
                            <p class="text-muted">
                              <i class="mdi mdi-circle-medium text-primary"></i> <strong>Publication :</strong>
                              {{ $book->publication }}
                            </p>
                            <p class="text-muted">
                              <i class="mdi mdi-circle-medium text-primary"></i> <strong>Department :</strong>
                              {{ $book->department->name }}
                            </p>
                            
                          
                        </div>
                        <!-- end div-->
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  @endforeach

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
