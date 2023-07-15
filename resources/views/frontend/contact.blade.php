@extends('frontend.layouts.main')

@section('title', 'Contact')
@section('main-section')

<!-- START CONTACT -->
<section
class="py-5 bg-light-lighten border-top border-bottom border-light"
>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="text-center">
        <h3>Get In <span class="text-primary">Touch</span></h3>
        <p class="text-muted mt-2">
          Please fill out the following form and we will get back to you
          shortly.
        </p>
      </div>
    </div>
  </div>

  <div class="row align-items-center mt-3">
    <div class="col-md-4">
      <p class="text-muted">
        <span class="fw-bold">Customer Support:</span><br />
        <span class="d-block mt-1">+8801817603163</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Email Address:</span><br />
        <span class="d-block mt-1">info@gmail.com</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Institute Address:</span><br />
        <span class="d-block mt-1">Central Road, Payra Chattor, Rangpur, Bangladesh</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Online Time:</span><br />
        <span class="d-block mt-1">8:00AM To 5:00PM</span>
      </p>
    </div>

    <div class="col-md-8">
      <form>
        <div class="row mt-4">
          <div class="col-lg-6">
            <div class="mb-2">
              <label for="fullname" class="form-label">Your Name</label>
              <input
                class="form-control form-control-light"
                type="text"
                id="fullname"
                placeholder="Name..."
              />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-2">
              <label for="emailaddress" class="form-label"
                >Your Email</label
              >
              <input
                class="form-control form-control-light"
                type="email"
                required=""
                id="emailaddress"
                placeholder="Enter you email..."
              />
            </div>
          </div>
        </div>

        <div class="row mt-1">
          <div class="col-lg-12">
            <div class="mb-2">
              <label for="subject" class="form-label">Your Subject</label>
              <input
                class="form-control form-control-light"
                type="text"
                id="subject"
                placeholder="Enter subject..."
              />
            </div>
          </div>
        </div>

        <div class="row mt-1">
          <div class="col-lg-12">
            <div class="mb-2">
              <label for="comments" class="form-label">Message</label>
              <textarea
                id="comments"
                rows="4"
                class="form-control form-control-light"
                placeholder="Type your message here..."
              ></textarea>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12 text-end">
            <button class="btn btn-primary">
              Send a Message <i class="mdi mdi-telegram ms-1"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</section>
<!-- END CONTACT -->

@endsection
