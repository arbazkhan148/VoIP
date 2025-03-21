<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('seller.logout') }}" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Future Next</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                        data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i>
                        <span
                            class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::guard('seller')->user()->first_name }} {{ Auth::guard('seller')->user()->last_name }}</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::guard('seller')->user()->name }}</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('seller.profile') }}">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{ route('seller.logout') }}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link {{ request()->is('seller/dashboard') ? 'active' : '' }}"
                    href="{{ url('seller/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link {{ request()->is('seller/distributor/*') ? 'active' : 'collapsed' }}" href="#"
                    data-bs-target="#distributor-nav" data-bs-toggle="collapse">
                    <i class="bi bi-person"></i>
                    <span>Distributor</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="distributor-nav"
                    class="nav-content collapse {{ request()->is('seller/distributor/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ route('seller.distributoradd') }}"
                            class="{{ request()->is('seller/distributor/add') ? 'active' : '' }} ">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.distributorlist') }}"
                            class=" {{ request()->is('seller/distributor/list') ? 'active' : '' }} ">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('seller/consumer/*') ? 'active' : '' }} collapsed" href="#"
                    data-bs-target="#consumer-nav" data-bs-toggle="collapse">
                    <i class="bi bi-person"></i>
                    <span>Consumer</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="consumer-nav"
                    class="nav-content collapse {{ request()->is('seller/consumer/*') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ route('seller.consumeradd') }}"
                            class="{{ request()->is('seller/consumer/add') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.consumerlist') }}"
                            class="{{ request()->is('seller/consumer/list') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('seller/*plans/list') ? 'active' : '' }} collapsed" href="#"
                    data-bs-target="#plan-nav" data-bs-toggle="collapse">
                    <i class="bi bi-pencil-square"></i>
                    <span>Pending Plans</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="plan-nav"
                    class="nav-content collapse {{ request()->is('seller/consumerplans/list') || request()->is('seller/distributorplans/list') ? 'show' : '' }}"
                    data-bs-parent="#sidebar-nav" style="">
                    <li>
                        <a href="{{ route('seller.distributorplanslist') }}"
                            class="{{ request()->is('seller/distributorplans/list') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Distributor</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('seller.consumerplanslist') }}"
                            class="{{ request()->is('seller/consumerplans/list') ? 'active' : '' }}">
                            <i class="bi bi-circle"></i><span>Consumer</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

    </aside><!-- End Sidebar-->

    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>Future Next</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @yield('page-js')
</body>

</html>
