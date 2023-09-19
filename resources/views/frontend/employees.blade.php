@extends('frontend.layouts.main')

@section('title', 'Employees')
@section('main-section')
<!-- START FEATURES 2 -->
    <section class="py-5">
      <div class="container">
        <div class="text-center mb-4">
          <h3> Employees <span class="text-primary">Catagories</span></h3>
        </div>

        <div class="row">
          @foreach ($departments as $department)
          <div class="col-lg-4">
            <a href="{{route('employees.department',['id'=>$department->id])}}">
              <div class="text-center p-3">
                <div class="avatar-sm m-auto">
                  <span class="avatar-title bg-primary-lighten rounded-circle">
                    <i class=" dripicons-user text-primary font-24"></i>
                  </span>
                </div>
                <h4 class="mt-3 text-body">{{ $department->name }}</h4>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </section>
  <!-- END FEATURES 2 -->
@endsection
