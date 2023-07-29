@extends('frontend.layouts.main')

@section('title', 'Computer')
@section('main-section')
<!-- START FEATURES 2 -->
<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-center">
            <h3>{{ $department_name }} <span class="text-primary">Employees</span></h3>
          </div>
        </div>
      </div>
      @foreach ($employees as $employee)
      <div class="row mt-2 py-5 align-items-center">
        <div class="col-lg-5">
          <img src="{{ url("storage/employees/$employee->image") }}" class="img-fluid rounded border border-4" alt="" style="max-height:300px" />
        </div>
        <div class="col-lg-6 offset-lg-1">
          <h3 class="fw-normal">{{ $employee->name }}</h3>
          <h6>{{ $employee->position->name }}</h6>
          <p class="text-muted mt-3">
            {{ Str::limit($employee->about, 200, '...')  }}
          </p>
          <div class="mt-4">
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-primary"></i> <strong>Email :</strong>
              {{ $employee->email }}
            </p>
            <p class="text-muted">
              <i class="mdi mdi-circle-medium text-primary"></i> <strong>Phone :</strong>
              {{  $employee->phone  }}
            </p>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </section>
  <!-- END FEATURES 2 -->
@endsection
