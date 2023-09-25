@extends('admin.layouts.main')

@section('title', 'Message')
@section('main-section')



            <div class="row">
              <div class="col-lg-12">
                <div class="row">
                  @forelse ($messages as $message)
                  <div class="col-12 col-md-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="">
                          <div class="float-end">
                            @if ($message->status == 1)
                              <span class="badge bg-danger rounded-pill">Panding</span>
                              @else
                              <span class="badge bg-success rounded-pill">Done</span>
                            @endif
                          </div>
                          <h4 class="mt-1 mb-1" >{{ Str::limit($message->subject, 140, '...')  }}</h4>
                          <p class="font-13">{{ $message->email }}</p>
                          <div class="avatar-xs">
                            <span class="avatar-title bg-success rounded">
                              {{ Str::limit($message->name, 1, '')  }}
                            </span>
                          </div>
                          <p class="overflow-hidden ms-3 border p-2">{{ Str::limit($message->message, 140, '...')  }}</p>
                          <p class="overflow-hidden me-3 border p-2">{{ Str::limit($message->message, 140, '...')  }}</p>
                          <div class="avatar-xs float-end mb-2">
                            <span class="avatar-title bg-primay rounded">
                              {{ Str::limit(Auth::user()->name, 1, '')  }}
                            </span>
                          </div>
                          
                        </div>
                        @if ($message->replay == null)
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="Write Answare">
                            <button type="submit" class="btn btn-primary">Send</button>
                          </div>
                        @else
                          
                        @endif
                        
                        <!-- end div-->
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  @empty
                  <div class="text-center" style="margin-top: 180px">
                    <img src="{{ url('admin/assets/images/not-found.png') }}" height="300" alt="File not found Image">
                    <h4 class="text-uppercase text-muted">
                      Messages Not Found
                    </h4>
                  </div>
                  @endforelse

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
