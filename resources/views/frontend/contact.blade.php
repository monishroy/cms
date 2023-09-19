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
        <span class="d-block mt-1">+8801705941415</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Email Address:</span><br />
        <span class="d-block mt-1">riitpolybd@gmail.com</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Institute Address:</span><br />
        <span class="d-block mt-1">রংপুর আইডিয়াল ইনস্টিটিউট অব টেকনোলজি সেন্ট্রাল রোড ( পায়রা চত্তর থেকে পূর্ব দিকে ও ভূমি অফিসের সামনে),</span>
      </p>
      <p class="text-muted mt-4">
        <span class="fw-bold">Online Time:</span><br />
        <span class="d-block mt-1">8:00AM To 5:00PM</span>
      </p>
    </div>

    <div class="col-md-8">
      @if (Session::has('success'))
      <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="dripicons-checkmark me-2"></i></strong> {{Session::get('success')}}
      </div>
      @endif
      <!--success end toast-->
      @if (Session::has('error'))
      <div class="alert alert-danger alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong><i class="dripicons-wrong me-2"></i></i></strong> {{Session::get('error')}}
      </div>
      <!--error end toast-->
      @endif
      <form action="{{ route('contact.add') }}" method="POST">
        @csrf
        <div class="row mt-4">
          <div class="col-lg-6">
            <div class="mb-2">
              <label for="fullname" class="form-label">Your Name</label>
              <input
                class="form-control form-control-light"
                type="text"
                name="fullname"
                id="fullname"
                placeholder="Full Name..."
                value="{{ old('fullname') }}"
              />
              <span class="text-danger text-sm">
                @error('fullname')
                {{$message}}
                @enderror
            </span>
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
                name="email"
                id="emailaddress"
                placeholder="Enter you email..."
                value="{{ old('email') }}"
              />
              <span class="text-danger text-sm">
                @error('email')
                {{$message}}
                @enderror
            </span>
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
                name="subject"
                id="subject"
                placeholder="Enter subject..."
                value="{{ old('subject') }}"
              />
              <span class="text-danger text-sm">
                @error('subject')
                {{$message}}
                @enderror
            </span>
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
                name="message"
                class="form-control form-control-light"
                placeholder="Type your message here..."
                value="{{ old('message') }}"
              ></textarea>
              <span class="text-danger text-sm">
                @error('message')
                {{$message}}
                @enderror
            </span>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12 text-end">
            <button class="btn btn-primary" type="submit">
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
