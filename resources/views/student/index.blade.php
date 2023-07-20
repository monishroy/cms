﻿@extends('student.layouts.main')

@section('title', 'Dashboard')
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
                        <a href="javascript: void(0);">CMS</a>
                      </li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                  <h4 class="page-title">Dashboard</h4>
                </div>
              </div>
            </div>
            <!-- end page title -->

            <div class="row">
              <div class="col-sm-6 col-xl-3">
                <div class="card widget-flat bg-success text-white">
                  <div class="card-body">
                    <div class="float-end">
                      <i class="mdi mdi-account-multiple widget-icon bg-white text-success"></i>
                    </div>
                    <h6 class="text-uppercase mt-0" title="Customers">
                      Total Students
                    </h6>
                    <h3 class="mt-3 mb-3">{{ $students }}</h3>
                    <p class="mb-0">
                      <span class="badge badge-light-lighten me-1">
                        <i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3">
                <div class="card widget-flat bg-primary text-white">
                  <div class="card-body">
                    <div class="float-end">
                      <i class="dripicons-user-group widget-icon bg-light-lighten rounded text-white"></i>
                    </div>
                    <h5 class="fw-normal mt-0" title="Revenue">Total User</h5>
                    <h3 class="mt-3 mb-3 text-white">{{ $users }}</h3>
                    <p class="mb-0">
                      <span class="badge bg-info me-1">
                        <i class="mdi mdi-user"></i> 17.26%</span>
                      <span class="text-nowrap">Since last month</span>
                    </p>
                  </div>
                </div>
              </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card widget-flat">
                    <div class="card-body">
                      <div class="float-end">
                        <i class="mdi mdi-currency-usd widget-icon"></i>
                      </div>
                      <h5 class="text-muted fw-normal mt-0" title="Average Revenue">
                        Revenue
                      </h5>
                      <h3 class="mt-3 mb-3">$6,254</h3>
                      <p class="mb-0 text-muted">
                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                        <span class="text-nowrap">Since last month</span>
                      </p>
                    </div>
                    <!-- end card-body-->
                  </div>
                  <!-- end card-->
                </div>
                <!-- end col-->

                <div class="col-sm-6 col-xl-3">
                  <div class="card widget-flat">
                    <div class="card-body">
                      <div class="float-end">
                        <i class="mdi mdi-pulse widget-icon"></i>
                      </div>
                      <h5 class="text-muted fw-normal mt-0" title="Growth">
                        Growth
                      </h5>
                      <h3 class="mt-3 mb-3">+ 30.56%</h3>
                      <p class="mb-0 text-muted">
                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                        <span class="text-nowrap">Since last month</span>
                      </p>
                    </div>
                    <!-- end card-body-->
                  </div>
                  <!-- end card-->
                </div>
                <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a
                        href="#"
                        class="dropdown-toggle arrow-none card-drop"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Weekly Report</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Monthly Report</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Action</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Settings</a
                        >
                      </div>
                    </div>
                    <h4 class="header-title mb-4">Project Status</h4>

                    <div class="my-4 chartjs-chart" style="height: 202px">
                      <canvas
                        id="project-status-chart"
                        data-colors="#0acf97,#727cf5,#fa5c7c"
                      ></canvas>
                    </div>

                    <div class="row text-center mt-2 py-2">
                      <div class="col-4">
                        <i class="mdi mdi-trending-up text-success mt-3 h3"></i>
                        <h3 class="fw-normal">
                          <span>64%</span>
                        </h3>
                        <p class="text-muted mb-0">Completed</p>
                      </div>
                      <div class="col-4">
                        <i
                          class="mdi mdi-trending-down text-primary mt-3 h3"
                        ></i>
                        <h3 class="fw-normal">
                          <span>26%</span>
                        </h3>
                        <p class="text-muted mb-0">In-progress</p>
                      </div>
                      <div class="col-4">
                        <i
                          class="mdi mdi-trending-down text-danger mt-3 h3"
                        ></i>
                        <h3 class="fw-normal">
                          <span>10%</span>
                        </h3>
                        <p class="text-muted mb-0">Behind</p>
                      </div>
                    </div>
                    <!-- end row-->
                  </div>
                  <!-- end card body-->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-->

              <div class="col-lg-8">
                <div class="card">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a
                        href="#"
                        class="dropdown-toggle arrow-none card-drop"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Weekly Report</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Monthly Report</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Action</a
                        >
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Settings</a
                        >
                      </div>
                    </div>
                    <h4 class="header-title mb-3">Tasks</h4>

                    <p><b>107</b> Tasks completed out of 195</p>

                    <div class="table-responsive">
                      <table
                        class="table table-centered table-nowrap table-hover mb-0"
                      >
                        <tbody>
                          <tr>
                            <td>
                              <h5 class="font-14 my-1">
                                <a href="javascript:void(0);" class="text-body"
                                  >Coffee detail page - Main Page</a
                                >
                              </h5>
                              <span class="text-muted font-13"
                                >Due in 3 days</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13">Status</span>
                              <br />
                              <span class="badge badge-warning-lighten"
                                >In-progress</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Assigned to</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">
                                Logan R. Cohn
                              </h5>
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Total time spend</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">3h 20min</h5>
                            </td>
                            <td class="table-action" style="width: 90px">
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-pencil"></i
                              ></a>
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-delete"></i
                              ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h5 class="font-14 my-1">
                                <a href="javascript:void(0);" class="text-body"
                                  >Drinking bottle graphics</a
                                >
                              </h5>
                              <span class="text-muted font-13"
                                >Due in 27 days</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13">Status</span>
                              <br />
                              <span class="badge badge-danger-lighten"
                                >Outdated</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Assigned to</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">
                                Jerry F. Powell
                              </h5>
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Total time spend</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">12h 21min</h5>
                            </td>
                            <td class="table-action" style="width: 90px">
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-pencil"></i
                              ></a>
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-delete"></i
                              ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h5 class="font-14 my-1">
                                <a href="javascript:void(0);" class="text-body"
                                  >App design and development</a
                                >
                              </h5>
                              <span class="text-muted font-13"
                                >Due in 7 days</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13">Status</span>
                              <br />
                              <span class="badge badge-success-lighten"
                                >Completed</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Assigned to</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">
                                Scot M. Smith
                              </h5>
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Total time spend</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">78h 05min</h5>
                            </td>
                            <td class="table-action" style="width: 90px">
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-pencil"></i
                              ></a>
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-delete"></i
                              ></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <h5 class="font-14 my-1">
                                <a href="javascript:void(0);" class="text-body"
                                  >Poster illustation design</a
                                >
                              </h5>
                              <span class="text-muted font-13"
                                >Due in 5 days</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13">Status</span>
                              <br />
                              <span class="badge badge-warning-lighten"
                                >In-progress</span
                              >
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Assigned to</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">
                                John P. Ritter
                              </h5>
                            </td>
                            <td>
                              <span class="text-muted font-13"
                                >Total time spend</span
                              >
                              <h5 class="font-14 mt-1 fw-normal">26h 58min</h5>
                            </td>
                            <td class="table-action" style="width: 90px">
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-pencil"></i
                              ></a>
                              <a
                                href="javascript: void(0);"
                                class="action-icon"
                              >
                                <i class="mdi mdi-delete"></i
                              ></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table-responsive-->
                  </div>
                  <!-- end card body-->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-->
            </div>
            <!-- end row-->

          </div>
          <!-- container -->
        </div>
        <!-- content -->

@endsection
