@extends('frontend.layouts.main')

@section('title', 'Notice Details')
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
                  Result <span class="text-primary">Notice</span>
                </h3>
                <p class="text-muted mt-2">
                  Last Update: 14/07/2023
                </p>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-lg-5 offset-lg-1">
              <!-- Question/Answer -->
              <div>
                <div class="faq-question-q-box">1</div>
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
                <div class="faq-question-q-box">2</div>
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
                <div class="faq-question-q-box">3</div>
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
                <div class="faq-question-q-box">4</div>
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

