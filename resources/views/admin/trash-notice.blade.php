﻿@extends('admin.layouts.main')

@section('title', 'Trash Notice')
@section('main-section')


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
                            <th>SL</th>
                            <th>Notice Title</th>
                            <th>Downloaded</th>
                            <th>Added on</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($notice as $index=>$notice)
                        <tr>
                          <td>{{ ++$index }}</td>
                          <td>{{ $notice->notice_title }}</td>
                          <td>50</td>
                          <td>{{ date('d-M-Y', strtotime($notice->created_at)) }}</td>
                          <td>
                            <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Restore" href="{{route('notice.restore',['id'=>$notice->id])}}" class="action-icon">
                              <i class="uil uil-redo"></i>
                            </a>
                            <a data-bs-container="#tooltip-container2" data-bs-toggle="tooltip" title="Parmanent Delete" href="{{route('notice.delete',['id'=>$notice->id])}}" class="action-icon">
                              <i class="mdi mdi-delete"></i>
                            </a>
                          </td>
                        </tr>
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
