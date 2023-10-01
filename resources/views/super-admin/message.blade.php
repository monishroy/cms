@extends('super-admin.layouts.main')

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
                            @if ($message->reply == null)
                              <button class="btn btn-sm btn-primary float-end" data-bs-toggle="modal" data-bs-target="#replay-{{ $message->id }}">Reply Message</button>
                            @else
                              
                            @endif
                          </div>
                          <h4 class="mt-1 mb-1" >{{ Str::limit($message->subject, 18, '...')  }} 
                            @if ($message->status == 1)
                              <span class="badge bg-danger rounded-pill">Panding</span>
                              @else
                              <span class="badge bg-success rounded-pill">Done</span>
                            @endif
                          </h4>
                          <p class="font-13">{{ $message->email }}</p>
                          <div class="avatar-xs">
                            <span class="avatar-title bg-success rounded">
                              {{ Str::limit($message->name, 1, '')  }}
                            </span>
                          </div>
                          <p class="overflow-hidden ms-3 border p-2">{{ Str::limit($message->message, 140, '...')  }}</p>
                        </div>
                        <!-- end div-->
                      </div>
                      <!-- end card-body-->
                    </div>
                  </div>
                  <!-- Compose Modal -->
                  <div
                    id="replay-{{ $message->id }}"
                    class="modal fade"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="compose-header-modalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header modal-colored-header bg-primary">
                          <h4 class="modal-title" id="compose-header-modalLabel">
                            Reply Message
                          </h4>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          ></button>
                        </div>
                        <div class="p-1">
                          <div class="modal-body px-3 pt-3 pb-0">
                            <form>
                              <div class="mb-2">
                                <label for="msgto" class="form-label">To</label>
                                <input type="text" id="msgto" name="to" class="form-control" value="{{ $message->email }}" readonly/>
                              </div>
                              <div class="mb-2">
                                <label for="mailsubject" class="form-label">Subject</label>
                                <textarea class="form-control" readonly>{{ $message->subject }}</textarea>
                              </div>
                              <div class="mb-2">
                                <label for="mailsubject" class="form-label">Message</label>
                                <textarea class="form-control" readonly>{{ $message->message }}</textarea>
                              </div>
                              <div class="write-mdg-box mb-3">
                                <label class="form-label">Reply</label>
                                <textarea name="replay" class="form-control"></textarea>
                              </div>
                            </form>
                          </div>
                          <div class="px-3 pb-3">
                            <button
                              type="submit"
                              class="btn btn-primary"
                              data-bs-dismiss="modal"
                            >
                              <i class="mdi mdi-send me-1"></i> Send Message
                            </button>
                            <button
                              type="button"
                              class="btn btn-light"
                              data-bs-dismiss="modal"
                            >
                              Cancel
                            </button>
                          </div>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
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
