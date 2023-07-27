@extends('frontend.layouts.main')

@section('title', 'About')
@section('main-section')
<!-- START FEATURES 2 -->
    <section class="py-5">
      @foreach ($departments as $department)
        <div class="container">
        <div class="row py-4">
          <div class="col-lg-12">
            <div class="text-center">
              <h1 class="mt-0"><i class="mdi mdi-infinity"></i></h1>
              <h3>
                {{ $department->name }}
                <span class="text-primary">Employees</span>
              </h3>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="text-center p-3">
              <div class="avatar-lg m-auto">
                <span class="rounded-circle">
                  <img src="{{ url("storage/employees/$department->employee->image") }}" class="img-fluid rounded" alt=""/>
                </span>
              </div>
              <h4 class="mt-3">Monish Roy</h4>
              <h6 class="mt-3">Position</h6>
              <p class="text-muted mt-2 mb-0">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt officiis delectus quibusdam eius a mollitia ratione? Qui corrupti et adipisci ad consequuntur porro ab eaque?
              </p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      
    </section>
  <!-- END FEATURES 2 -->
@endsection
