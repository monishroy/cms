@extends('frontend.layouts.main')

@section('title', 'Collage Management System')
@section('main-section')
<!-- START HERO -->
<section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-5">
          <div class="mt-md-4">
            <div>
              <span class="text-white-50 ms-1"
                >Welcome to collage</span
              >
            </div>
            <h2 class="text-white fw-normal mb-4 mt-3 hero-title">
              Rangpur Ideal Institute of Technology
            </h2>

            <p class="mb-4 font-16 text-white-50">
              This website is collage management system
            </p>

            <a href="{{ route('about') }}" class="btn btn-success"
              >Preview <i class="mdi mdi-arrow-right ms-1"></i
            ></a>
          </div>
        </div>
        <div class="col-md-5 offset-md-2">
          <div class="text-md-end mt-3 mt-md-0">
            <img src="{{url('admin/assets/images/startup.svg')}}" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END HERO -->
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
        @foreach ($notices as $notice)
        <div class="col-lg-5 offset-lg-1">
          <a href="{{ route('notice.download',['file'=>$notice->notice_file]) }}">
            <div class="faq-question-q-box"><i class="uil uil-file text-body"></i></div>
            <h4 class="faq-question text-body">
              {{ $notice->notice_title }}
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
      <!-- START FAQ -->
      <section class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-center">
                <h1 class="mt-0">
                  <i class="mdi mdi-frequently-asked-questions"></i>
                </h1>
                <h3>
                  Frequently Asked <span class="text-primary">Questions</span>
                </h3>
                <p class="text-muted mt-2">
                  Here are some of the basic types of questions for our customers.
                  For more <br />information please contact us.
                </p>

                <button type="button" class="btn btn-success btn-sm mt-2">
                  <i class="mdi mdi-email-outline me-1"></i> Email us your
                  question
                </button>
                <button type="button" class="btn btn-info btn-sm mt-2 ms-1">
                  <i class="mdi mdi-twitter me-1"></i> Send us a tweet
                </button>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-lg-5 offset-lg-1">
              <!-- Question/Answer -->
              <div>
                <div class="faq-question-q-box">Q.</div>
                <h4 class="faq-question text-body">
                  Can I use this template for my client?
                </h4>
                <p class="faq-answer mb-4 pb-1 text-muted">
                  Yup, the marketplace license allows you to use this theme in any
                  end products. For more information on licenses, please refere
                  <a href="../../licenses/index.htm" target="_blank">here</a>.
                </p>
              </div>

              <!-- Question/Answer -->
              <div>
                <div class="faq-question-q-box">Q.</div>
                <h4 class="faq-question text-body">
                  How do I get help with the theme?
                </h4>
                <p class="faq-answer mb-4 pb-1 text-muted">
                  Use our dedicated support email (support@coderthemes.com) to
                  send your issues or feedback. We are here to help anytime.
                </p>
              </div>
            </div>
            <!--/col-lg-5 -->

            <div class="col-lg-5">
              <!-- Question/Answer -->
              <div>
                <div class="faq-question-q-box">Q.</div>
                <h4 class="faq-question text-body">
                  Can this theme work with Wordpress?
                </h4>
                <p class="faq-answer mb-4 pb-1 text-muted">
                  No. This is a HTML template. It won't directly with wordpress,
                  though you can convert this into wordpress compatible theme.
                </p>
              </div>

              <!-- Question/Answer -->
              <div>
                <div class="faq-question-q-box">Q.</div>
                <h4 class="faq-question text-body">
                  Will you regularly give updates of Hyper?
                </h4>
                <p class="faq-answer mb-4 pb-1 text-muted">
                  Yes, We will update the Hyper regularly. All the future updates
                  would be available without any cost.
                </p>
              </div>
            </div>
            <!--/col-lg-5-->
          </div>
          <!-- end row -->
        </div>
        <!-- end container-->
      </section>
      <!-- END FAQ -->
@endsection

