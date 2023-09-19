@extends('admin.layouts.main')

@section('title', 'Dashboard')
@section('main-section')



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
              <div class="col-xl-4 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a
                        href="#"
                        class="dropdown-toggle arrow-none card-drop p-0"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Refresh Report</a
                        >
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Export Report</a
                        >
                      </div>
                    </div>
                    <h4 class="header-title">Views Per Minute</h4>

                    <div
                      id="views-min"
                      class="apex-charts mt-2"
                      data-colors="#0acf97"
                    ></div>

                    <div class="table-responsive mt-3">
                      <table class="table table-sm mb-0 font-13">
                        <thead>
                          <tr>
                            <th>Page</th>
                            <th>Views</th>
                            <th>Bounce Rate</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <a href="javascript:void(0);" class="text-muted"
                                >/hyper/dashboard-analytics</a
                              >
                            </td>
                            <td>25</td>
                            <td>87.5%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="javascript:void(0);" class="text-muted"
                                >/hyper/dashboard-crm</a
                              >
                            </td>
                            <td>15</td>
                            <td>21.48%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="javascript:void(0);" class="text-muted"
                                >/ubold/dashboard</a
                              >
                            </td>
                            <td>10</td>
                            <td>63.59%</td>
                          </tr>
                          <tr>
                            <td>
                              <a href="javascript:void(0);" class="text-muted"
                                >/minton/home</a
                              >
                            </td>
                            <td>7</td>
                            <td>56.12%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col-->

              <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a
                        href="#"
                        class="dropdown-toggle arrow-none card-drop p-0"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Refresh Report</a
                        >
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Export Report</a
                        >
                      </div>
                    </div>
                    <h4 class="header-title">Sessions by Browser</h4>

                    <div
                      id="sessions-browser"
                      class="apex-charts mt-3"
                      data-colors="#727cf5"
                    ></div>
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col-->

              <div class="col-xl-4 col-lg-6">
                <div class="card">
                  <div class="card-body">
                    <div class="dropdown float-end">
                      <a
                        href="#"
                        class="dropdown-toggle arrow-none card-drop p-0"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="mdi mdi-dots-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-end">
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Refresh Report</a
                        >
                        <a href="javascript:void(0);" class="dropdown-item"
                          >Export Report</a
                        >
                      </div>
                    </div>
                    <h4 class="header-title">Sessions by Operating System</h4>

                    <div
                      id="sessions-os"
                      class="apex-charts mt-3"
                      data-colors="#727cf5,#0acf97,#fa5c7c,#ffbc00"
                    ></div>

                    <div class="row text-center mt-2">
                      <div class="col-6">
                        <h4 class="fw-normal">
                          <span>6,510</span>
                        </h4>
                        <p class="text-muted mb-0">Online System</p>
                      </div>
                      <div class="col-6">
                        <h4 class="fw-normal">
                          <span>2,031</span>
                        </h4>
                        <p class="text-muted mb-0">Offline System</p>
                      </div>
                    </div>
                  </div>
                  <!-- end card-body-->
                </div>
                <!-- end card-->
              </div>
              <!-- end col-->
            </div>
            <!-- end row -->

            <div class="row">
              <div class="col-xl-6">
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
                    <h4 class="header-title mb-3">Your Calendar</h4>

                    <div class="row">
                      <div class="col-md-7">
                        <div
                          data-provide="datepicker-inline"
                          data-date-today-highlight="true"
                          class="calendar-widget"
                        ></div>
                      </div>
                      <!-- end col-->
                      <div class="col-md-5">
                        <ul class="list-unstyled">
                          <li class="mb-4">
                            <p class="text-muted mb-1 font-13">
                              <i class="mdi mdi-calendar"></i> 7:30 AM - 10:00
                              AM
                            </p>
                            <h5>Meeting with BD Team</h5>
                          </li>
                          <li class="mb-4">
                            <p class="text-muted mb-1 font-13">
                              <i class="mdi mdi-calendar"></i> 10:30 AM - 11:45
                              AM
                            </p>
                            <h5>Design Review - Hyper Admin</h5>
                          </li>
                          <li class="mb-4">
                            <p class="text-muted mb-1 font-13">
                              <i class="mdi mdi-calendar"></i> 12:15 PM - 02:00
                              PM
                            </p>
                            <h5>Setup Github Repository</h5>
                          </li>
                          <li>
                            <p class="text-muted mb-1 font-13">
                              <i class="mdi mdi-calendar"></i> 5:30 PM - 07:00
                              PM
                            </p>
                            <h5>Meeting with Design Studio</h5>
                          </li>
                        </ul>
                      </div>
                      <!-- end col -->
                    </div>
                    <!-- end row -->
                  </div>
                  <!-- end card body-->
                </div>
                <!-- end card -->
              </div>
              <!-- end col-->
              <div class="col-xl-6">
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
                    <h4 class="header-title mb-3">Recent Activities</h4>

                    <div class="table-responsive">
                      <table
                        class="table table-centered table-nowrap table-hover mb-0"
                      >
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                  class="me-2 rounded-circle"
                                  src="assets/images/users/avatar-2.jpg"
                                  width="40"
                                  alt="Generic placeholder image"
                                />
                                <div>
                                  <h5 class="mt-0 mb-1">
                                    Soren Drouin<small class="fw-normal ms-3"
                                      >18 Jan 2019 11:28 pm</small
                                    >
                                  </h5>
                                  <span class="font-13"
                                    >Completed "Design new idea"...</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="text-muted font-13">Project</span>
                              <br />
                              <p class="mb-0">Hyper Mockup</p>
                            </td>
                            <td class="table-action" style="width: 50px">
                              <div class="dropdown">
                                <a
                                  href="#"
                                  class="dropdown-toggle arrow-none card-drop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                  <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Settings</a
                                  >
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Action</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                  class="me-2 rounded-circle"
                                  src="assets/images/users/avatar-6.jpg"
                                  width="40"
                                  alt="Generic placeholder image"
                                />
                                <div>
                                  <h5 class="mt-0 mb-1">
                                    Anne Simard<small class="fw-normal ms-3"
                                      >18 Jan 2019 11:09 pm</small
                                    >
                                  </h5>
                                  <span class="font-13"
                                    >Assigned task "Poster illustation
                                    design"...</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="text-muted font-13">Project</span>
                              <br />
                              <p class="mb-0">Hyper Mockup</p>
                            </td>
                            <td class="table-action" style="width: 50px">
                              <div class="dropdown">
                                <a
                                  href="#"
                                  class="dropdown-toggle arrow-none card-drop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                  <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Settings</a
                                  >
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Action</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                  class="me-2 rounded-circle"
                                  src="assets/images/users/avatar-3.jpg"
                                  width="40"
                                  alt="Generic placeholder image"
                                />
                                <div>
                                  <h5 class="mt-0 mb-1">
                                    Nicolas Chartier<small
                                      class="fw-normal ms-3"
                                      >15 Jan 2019 09:29 pm</small
                                    >
                                  </h5>
                                  <span class="font-13"
                                    >Completed "Drinking bottle
                                    graphics"...</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="text-muted font-13">Project</span>
                              <br />
                              <p class="mb-0">Web UI Design</p>
                            </td>
                            <td class="table-action" style="width: 50px">
                              <div class="dropdown">
                                <a
                                  href="#"
                                  class="dropdown-toggle arrow-none card-drop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                  <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Settings</a
                                  >
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Action</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                  class="me-2 rounded-circle"
                                  src="assets/images/users/avatar-4.jpg"
                                  width="40"
                                  alt="Generic placeholder image"
                                />
                                <div>
                                  <h5 class="mt-0 mb-1">
                                    Gano Cloutier<small class="fw-normal ms-3"
                                      >10 Jan 2019 08:36 pm</small
                                    >
                                  </h5>
                                  <span class="font-13"
                                    >Completed "Design new idea"...</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="text-muted font-13">Project</span>
                              <br />
                              <p class="mb-0">UBold Admin</p>
                            </td>
                            <td class="table-action" style="width: 50px">
                              <div class="dropdown">
                                <a
                                  href="#"
                                  class="dropdown-toggle arrow-none card-drop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                  <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Settings</a
                                  >
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Action</a
                                  >
                                </div>
                              </div>
                            </td>
                          </tr>

                          <tr>
                            <td>
                              <div class="d-flex align-items-start">
                                <img
                                  class="me-2 rounded-circle"
                                  src="assets/images/users/avatar-5.jpg"
                                  width="40"
                                  alt="Generic placeholder image"
                                />
                                <div>
                                  <h5 class="mt-0 mb-1">
                                    Francis Achin<small class="fw-normal ms-3"
                                      >08 Jan 2019 12:28 pm</small
                                    >
                                  </h5>
                                  <span class="font-13"
                                    >Assigned task "Hyper app design"...</span
                                  >
                                </div>
                              </div>
                            </td>
                            <td>
                              <span class="text-muted font-13">Project</span>
                              <br />
                              <p class="mb-0">Website Mockup</p>
                            </td>
                            <td class="table-action" style="width: 50px">
                              <div class="dropdown">
                                <a
                                  href="#"
                                  class="dropdown-toggle arrow-none card-drop"
                                  data-bs-toggle="dropdown"
                                  aria-expanded="false"
                                >
                                  <i class="mdi mdi-dots-horizontal"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Settings</a
                                  >
                                  <!-- item-->
                                  <a
                                    href="javascript:void(0);"
                                    class="dropdown-item"
                                    >Action</a
                                  >
                                </div>
                              </div>
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
