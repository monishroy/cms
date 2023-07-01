@extends('admin.layouts.main')

@section('title', 'All User')
@section('main-section')

          <!-- Start Content-->
          <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div class="page-title-box">
                  <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item">
                        <a href="javascript: void(0);">SMS</a>
                      </li>
                      <li class="breadcrumb-item active">All User</li>
                    </ol>
                  </div>
                  <h4 class="page-title">All Student</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                          <a href="{{route('admin.add-student')}}" class="btn btn-primary mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add
                            Student</a>
                        </div>
                        <div class="col-sm-8">
                          <div class="text-sm-end">
                            <button type="button" class="btn btn-light mb-2">
                              Export
                            </button>
                          </div>
                        </div>
                        <!-- end col-->
                      </div>
                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Registration</th>
                                <th>Session</th>
                                <th>Phone</th>
                                <th>Guardian Phone</th>
                                <th>Semister</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Added</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->fname.' '.$student->lname}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->registration}}</td>
                                <td>{{$student->session}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->gPhone}}</td>
                                <td>{{$student->semister}}</td>
                                <td>
                                    @if ($student->gender == "M")
                                        Male
                                    @elseif ($student->gender == "F")
                                        Female
                                    @else
                                        Other
                                    @endif
                                </td>
                                <td>{{$student->address}}</td>
                                <td>{{$student->created_at}}</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon">
                                        <i class="mdi mdi-eye"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="action-icon" data-bs-toggle="modal" data-bs-target="#edit-{{$student->id}}">
                                      <i class="mdi mdi-pencil"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="action-icon">
                                      <i class="mdi mdi-delete"></i>
                                    </a>
                                </td>
                            </tr>
                            <!-- Edit modal -->
                            <div class="modal fade" id="edit-{{$student->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Edit Student</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                        </div>
                                        <div class="modal-body">

                                            @if (Session::has('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <i class="dripicons-checkmark me-2"></i>
                                                {{Session::get('success')}}
                                            </div>
                                            @endif
                                            @if (Session::has('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                <i class="dripicons-wrong me-2"></i>
                                                {{Session::get('error')}}
                                            </div>
                                            @endif
                                            <!-- end nav-->
                                            <div class="tab-content">
                                                <div class="tab-pane show active" id="custom-styles-preview">
                                                <form class="needs-validation" action="{{route('addStudent')}}" method="POST" novalidate="">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="fname">First name</label>
                                                                <input type="text" class="form-control" name="fname" id="fname" placeholder="First name" required="" value="{{$student->fname}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter first name.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('fname')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="lname">Last name</label>
                                                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last name" required="" value="{{$student->lname}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter last name.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('lname')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="roll">Roll</label>
                                                                <input type="text" class="form-control" name="roll" id="roll" data-toggle="input-mask" data-mask-format="000000" maxlength="6" placeholder="Roll" required="" value="{{$student->roll}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter roll.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('roll')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="registration">Registration</label>
                                                                <input type="text" class="form-control" name="registration" id="registration" data-toggle="input-mask" data-mask-format="0000000000" placeholder="Registration" required="" value="{{$student->registration}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter Registration.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('registration')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="session">Session</label>
                                                                <input type="text" class="form-control" name="session" id="session" data-toggle="input-mask" data-mask-format="0000-00" maxlength="6"  placeholder="Session" required="" value="{{$student->session}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter Session.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('session')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="phone">Phone Number</label>
                                                                <input type="text" class="form-control" name="phone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{$student->phone}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter Phone Number.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('phone')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="gPhone">Guardian Phone Number</label>
                                                                <input type="text" class="form-control" name="gPhone" data-toggle="input-mask" data-mask-format="01000-000000" maxlength="11" placeholder="01XX-NNNNNNN" required="" value="{{$student->gPhone}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter Guardian Phone Number.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('gPhone')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="semister">Semister</label>
                                                                <!-- Single Select -->
                                                                    <select class="form-select" name="semister">
                                                                        <optgroup label="Select Semister">
                                                                            @if ($student->semister == "1")
                                                                            <option selected value="1">1st Semister</option>
                                                                            @elseif ($student->semister == "2")
                                                                            <option selected value="2">2nd Semister</option>
                                                                            @elseif ($student->semister == "3")
                                                                            <option selected value="3">3nd Semister</option>
                                                                            @elseif ($student->semister == "4")
                                                                            <option selected value="4">4nd Semister</option>
                                                                            @elseif ($student->semister == "5")
                                                                            <option selected value="5">5nd Semister</option>
                                                                            @elseif ($student->semister == "6")
                                                                            <option selected value="6">6nd Semister</option>
                                                                            @elseif ($student->semister == "7")
                                                                            <option selected value="7">7nd Semister</option>
                                                                            @else
                                                                            <option selected value="8">8nd Semister</option>
                                                                            @endif
                                                                            <option value="1">1th Semister</option>
                                                                            <option value="2">2th Semister</option>
                                                                            <option value="3">3th Semister</option>
                                                                            <option value="4">4th Semister</option>
                                                                            <option value="5">5th Semister</option>
                                                                            <option value="6">6th Semister</option>
                                                                            <option value="7">7th Semister</option>
                                                                            <option value="8">8th Semister</option>
                                                                        </optgroup>
                                                                    </select>
                                                                <div class="invalid-feedback">
                                                                    Please enter Semister.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('semister')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="Gender">Gender</label>
                                                                <!-- Single Select -->
                                                                    <select class="form-select" name="gender">
                                                                        <optgroup label="Select Gender">
                                                                            <option value="M">Male</option>
                                                                            <option value="F">Female</option>
                                                                            <option value="O">Other</option>
                                                                        </optgroup>
                                                                    </select>
                                                                <div class="invalid-feedback">
                                                                    Please enter Gender.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('gender')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="Address">Address</label>
                                                                <input type="text" class="form-control" name="address" id="Address" placeholder="Address" required="" value="{{$student->address}}">
                                                                <div class="invalid-feedback">
                                                                    Please enter Address.
                                                                </div>
                                                                <span class="text-danger text-sm">
                                                                    @error('address')
                                                                    {{$message}}
                                                                    @enderror
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <button class="btn btn-primary" type="submit">
                                                    Submit
                                                </button>
                                                </form>
                                            </div>
                                            <!-- end preview-->
                                            </div>
                                            <!-- end tab-content-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- / Edit modal -->
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col-->

            </div>
            <!-- end row -->
          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
