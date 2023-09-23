@extends('librarian.layouts.main')

@section('title', 'Books')
@section('main-section')

    <div class="row">
      @forelse ($books as $book)
      <div class="col-12 col-md-3">
        <div class="card">
          <div class="card-body row">
            <span class="float-start m-2 col-4">
              <img src="{{ url("storage/books/$book->image") }}" style="height: 150px" alt="" class=" img-thumbnail">
            </span>
            <div class="col-7">
              <div class="dropdown float-end mt-1">
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end" style="">
                  <!-- item-->
                  <a href="{{route('books.edit', $book->id)}}" class="dropdown-item">Edit</a>
                  <!-- item-->
                  <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item">Delete</button>
                  </form>
                </div>
              </div>
              <h4 class="my-1 text-white">{{ Str::limit(ucwords($book->name), 16, '...')  }}</h4>
              <p class="font-13 text-primary">
                <span class="text-primay">{{ $book->subject_code }}</span>
                <i class="mdi mdi-circle-medium text-info"></i>
                <span class="text-muted">{{ $book->semister->name }}</span>
                <i class="mdi mdi-circle-medium text-info"></i>
                <span class="text-warning">{{ $book->book_code }}</span>
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Probidhan :</strong>
                {{ $book->probidhan }}
              </p>
              <p class="text-muted">
                <i class="mdi mdi-circle-medium text-primary"></i> <strong>Publication :</strong>
                {{ ucwords($book->publication) }}
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
      @empty
      <div class="text-center" style="margin-top: 180px">
        <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
        <h4 class="text-uppercase text-muted">
          Books Not Found
        </h4>
      </div>
      @endforelse
    </div>
                <!-- end card-box -->
           

@endsection
