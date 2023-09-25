@extends('librarian.layouts.main')

@section('title', 'Issue Books')
@section('main-section')

            <div class="row">
              <div class="col-sm-6 mx-auto">
                <div class="card">
                  <div class="card-body">
                    <h4 class="header-title text-center mb-4">Issue Book</h4>
                    <form action="{{ route('issue.search') }}" class="row" method="POST">
                      @csrf
                      <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label class="form-label" >Enter Roll</label>
                          <input type="text" class="form-control" name="roll" data-toggle="input-mask" data-mask-format="000000" maxlength="6" placeholder="Enter Roll">
                          <div class="invalid-feedback">
                            Please select roll.
                          </div>
                          @error('roll')
                          <span class="text-danger form-text"><small>{{$message}}</small></span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6 col-12">
                        <div class="mb-3">
                          <label class="form-label">Return Date</label>
                          <div class="input-group">
                            <input type="text" class="form-control" value="{{ date('d-M-Y h:i A') }}" readonly>
                            <button type="submit" class="btn btn-primary">Search</button>
                          </div>
                        </div>
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
