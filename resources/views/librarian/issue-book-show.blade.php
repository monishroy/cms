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
                    @if ($errors->any())
                      <div class="text-danger">
                        <ul>
                          @foreach ($errors->all() as $index=>$error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <form class="needs-validation" action="{{ route('issue.store') }}" method="POST" novalidate>
                      @csrf
                      <div class="mb-1" id="book-section">
                        <div>
                          <label class="form-label" for="book">Book Code</label>
                          <input type="hidden" name="inputs[1][student]" value="{{ $student->id }}">
                          <div class="row">
                            
                            <div class="col-lg-11 col-12 mb-3">
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">01</label>
                                <input type="text" name="inputs[1][book_code]" class="form-control" placeholder="Enter Book Code" value="{{ old('inputs[0][book_code]') }}" required>
                              </div>
                              <div class="invalid-feedback">
                                Please enter book code.
                              </div>
                            </div>
                            <div class="col-lg-1 col-12 text-end">
                              <button class="btn btn-outline-primary" id="addMore" type="button"><i class="uil-plus"></i></button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary" type="submit">Issue Book</button>
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

<!-- Add More Script -->
<script>
  var i = 1;
  $('#addMore').click(function(){
    ++i;
    $('#book-section').append(
    `<div id="more">
      <input type="hidden" name="inputs[`+i+`][student]" value="{{ $student->id }}">
      <div class="row">
        <div class="col-lg-11 col-12 mb-3">
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">0`+i+`</label>
            <input type="text" name="inputs[`+i+`][book_code]" class="form-control" placeholder="Enter Book Code" value="{{ old('inputs[`+i+`][book_code]') }}" required>
          </div>
          <div class="invalid-feedback">
            Please enter book code.
          </div>
        </div>
        <div class="col-lg-1 col-12 text-end">
          <button type="button" class="btn btn-outline-danger remove-table-row" ><i class="uil-minus"></i></button>
        </div>
      </div>
    </div>`);
  });

  $(document).on('click','.remove-table-row', function(){
      $(this).parents('#more').remove();
  })
</script>
@endsection
