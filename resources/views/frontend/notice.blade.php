@extends('frontend.layouts.main')

@section('title', 'Notice')
@section('main-section')

  <!-- END SERVICES -->
      <!-- START FAQ -->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <h1 class="mt-0">
                  <i class="mdi mdi-bell-outline"></i>
                </h1>
                <h3>
                  Notice <span class="text-primary">Board</span>
                </h3>
                <p class="text-muted mt-2">
                  Last Update: 14/07/2023
                </p>
              </div>
            </div>
          </div>

          <div class="row mt-5">

            @foreach ($notice as $notice)
            <div class="col-lg-5 offset-lg-1">
              <a href="{{ route('notice.download',['file'=>$notice->file]) }}">
                <div class="faq-question-q-box"><i class="uil uil-file text-body"></i></div>
                <h4 class="faq-question text-body">
                  {{ $notice->name }}
                </h4>
              </a>
              <p class="faq-answer mb-4 pb-1 text-muted">
                Date: {{ date('d-M-Y', strtotime($notice->created_at)) }}
              </p>
            </div>
            @endforeach

          </div>
          <!-- end row -->
        </div>
        <!-- end container-->
      </section>
      <!-- END FAQ -->
@endsection


