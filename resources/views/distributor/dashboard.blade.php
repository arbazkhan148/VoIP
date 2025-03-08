@extends('layouts/distributorlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales <span>| Today</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>145</h6>
                                            <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Orders Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Orders <span>| This Month</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-box-seam"></i>
                                            <linearGradient id="eBuINbZy_Rv3XeVLNyFQ~a_43591_gr1" x1="32"
                                                x2="32" y1="16.501" y2="23.293" gradientUnits="userSpaceOnUse"
                                                spreadMethod="reflect">
                                                <stop offset="0" stop-color="#6dc7ff"></stop>
                                                <stop offset="1" stop-color="#e6abff"></stop>
                                            </linearGradient>
                                            <path fill="url(#eBuINbZy_Rv3XeVLNyFQ~a_43591_gr1)"
                                                d="M23 20.002L32 17.002 41 20.002 41 20.002 32 23.002z"></path>
                                            <linearGradient id="eBuINbZy_Rv3XeVLNyFQ~b_43591_gr2" x1="32"
                                                x2="32" y1="10.001" y2="55.262" gradientUnits="userSpaceOnUse"
                                                spreadMethod="reflect">
                                                <stop offset="0" stop-color="#1a6dff"></stop>
                                                <stop offset="1" stop-color="#c822ff"></stop>
                                            </linearGradient>
                                            <path fill="url(#eBuINbZy_Rv3XeVLNyFQ~b_43591_gr2)"
                                                d="M56.635,21.134l-3.378-1.133l3.378-1.132C57.464,18.591,58,17.844,58,16.967 c0-0.88-0.538-1.628-1.37-1.907l-14.619-4.902c-0.615-0.207-1.294-0.207-1.909,0L32,12.874l-8.101-2.717 c-0.626-0.209-1.285-0.209-1.901-0.002l-7.458,2.501c-3.608,1.21-7.08,2.373-7.172,2.403C6.537,15.34,6,16.089,6,16.969 c0.001,0.876,0.537,1.622,1.367,1.9l3.376,1.132l-3.372,1.131c-0.832,0.278-1.369,1.026-1.369,1.906 c0,0.879,0.537,1.627,1.369,1.905L13,26.831v19.512c0,1.245,0.833,2.342,2.072,2.729l14.724,4.595 c0.711,0.221,1.457,0.332,2.204,0.332s1.493-0.111,2.204-0.332l14.725-4.596C50.167,48.685,51,47.588,51,46.343V26.831l5.629-1.887 C57.462,24.664,58,23.916,58,23.036C58,22.16,57.464,21.412,56.635,21.134z M40.738,12.054c0.205-0.068,0.43-0.068,0.635,0 l14.626,4.919l-5.944,1.993l-15.01-5.003L40.738,12.054z M17.162,20.001L32,15.055l14.838,4.946L32,24.948L17.162,20.001z M8.002,16.957c0.078-0.026,3.558-1.192,7.174-2.405l7.459-2.5c0.1-0.034,0.204-0.051,0.309-0.051c0.106,0,0.214,0.018,0.318,0.053 l5.693,1.909l-15.001,5L8.002,16.957z M13.945,21.037l15.01,5.003l-5.695,1.908c-0.203,0.07-0.428,0.068-0.635,0l-14.619-4.92 L13.945,21.037z M15.669,47.163c-0.4-0.125-0.669-0.455-0.669-0.82v-5.491l16,4.889v6.155c-0.205-0.038-0.41-0.078-0.608-0.14 L15.669,47.163z M48.332,47.162l-14.724,4.595c-0.199,0.062-0.404,0.101-0.608,0.14v-6.155l16-4.889v5.491 C49,46.708,48.731,47.038,48.332,47.162z M49,38.762L33,43.65V32h-2v11.65l-16-4.888v-11.26l6.99,2.344 C22.299,29.949,22.622,30,22.945,30s0.646-0.052,0.952-0.155L32,27.129l8.102,2.716c0.617,0.207,1.294,0.207,1.907,0L49,27.501 V38.762z M41.372,27.949c-0.203,0.07-0.428,0.068-0.635,0l-5.693-1.908l15.001-5l5.949,2.007L41.372,27.949z">
                                            </path>
                                            </svg>
                                        </div>
                                        <div class="ps-3">
                                            <h6>$3,264</h6>
                                            <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                class="text-muted small pt-2 ps-1">increase</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Customers <span>| This Year</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1244</h6>
                                            <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                class="text-muted small pt-2 ps-1">decrease</span>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div><!-- End Customers Card -->

                        {{-- <!-- Reports -->
                        <div class="col-12">
                            <div class="card">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Reports <span>/Today</span></h5>

                                    <!-- Line Chart -->
                                    <div id="reportsChart"></div>

                                    <script>
                                        document.addEventListener("DOMContentLoaded", () => {
                                            new ApexCharts(document.querySelector("#reportsChart"), {
                                                series: [{
                                                    name: 'Sales',
                                                    data: [31, 40, 28, 51, 42, 82, 56],
                                                }, {
                                                    name: 'Revenue',
                                                    data: [11, 32, 45, 32, 34, 52, 41]
                                                }, {
                                                    name: 'Customers',
                                                    data: [15, 11, 32, 18, 9, 24, 11]
                                                }],
                                                chart: {
                                                    height: 350,
                                                    type: 'area',
                                                    toolbar: {
                                                        show: false
                                                    },
                                                },
                                                markers: {
                                                    size: 4
                                                },
                                                colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                                fill: {
                                                    type: "gradient",
                                                    gradient: {
                                                        shadeIntensity: 1,
                                                        opacityFrom: 0.3,
                                                        opacityTo: 0.4,
                                                        stops: [0, 90, 100]
                                                    }
                                                },
                                                dataLabels: {
                                                    enabled: false
                                                },
                                                stroke: {
                                                    curve: 'smooth',
                                                    width: 2
                                                },
                                                xaxis: {
                                                    type: 'datetime',
                                                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                                        "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                                        "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                                        "2018-09-19T06:30:00.000Z"
                                                    ]
                                                },
                                                tooltip: {
                                                    x: {
                                                        format: 'dd/MM/yy HH:mm'
                                                    },
                                                }
                                            }).render();
                                        });
                                    </script>
                                    <!-- End Line Chart -->

                                </div>

                            </div>
                        </div><!-- End Reports --> --}}

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Recent Customers</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">User Id</th>
                                                <th scope="col">Customer</th>
                                                <th scope="col">Plan</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row"><a href="#">#2457</a></th>
                                                <td>Brandon Jacob</td>
                                                <td><a href="#" class="text-primary">At praesentium minu</a></td>
                                                <td>$64</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2147</a></th>
                                                <td>Bridie Kessler</td>
                                                <td><a href="#" class="text-primary">Blanditiis dolor omnis
                                                        similique</a></td>
                                                <td>$47</td>
                                                <td><span class="badge bg-warning">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2049</a></th>
                                                <td>Ashleigh Langosh</td>
                                                <td><a href="#" class="text-primary">At recusandae consectetur</a>
                                                </td>
                                                <td>$147</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Angus Grady</td>
                                                <td><a href="#" class="text-primar">Ut voluptatem id earum et</a>
                                                </td>
                                                <td>$67</td>
                                                <td><span class="badge bg-danger">Rejected</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="#">#2644</a></th>
                                                <td>Raheem Lehner</td>
                                                <td><a href="#" class="text-primary">Sunt similique distinctio</a>
                                                </td>
                                                <td>$165</td>
                                                <td><span class="badge bg-success">Approved</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                        <!-- Top Selling -->
                        <div class="col-12">
                            <div class="card top-selling overflow-auto">

                                <div class="filter">
                                    <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                            class="bi bi-three-dots"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <li class="dropdown-header text-start">
                                            <h6>Filter</h6>
                                        </li>

                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Month</a></li>
                                        <li><a class="dropdown-item" href="#">This Year</a></li>
                                    </ul>
                                </div>

                                <div class="card-body pb-0">
                                    <h5 class="card-title">Customers List</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>User Id</th>
                                                <th>City</th>
                                                <th data-type="date" data-format="YYYY/DD/MM">Start Date</th>
                                                <th>Completion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Unity Pugh</td>
                                                <td>9958</td>
                                                <td>Curicó</td>
                                                <td>2005/02/11</td>
                                                <td>37%</td>
                                            </tr>
                                            <tr>
                                                <td>Theodore Duran</td>
                                                <td>8971</td>
                                                <td>Dhanbad</td>
                                                <td>1999/04/07</td>
                                                <td>97%</td>
                                            </tr>
                                            <tr>
                                                <td>Kylie Bishop</td>
                                                <td>3147</td>
                                                <td>Norman</td>
                                                <td>2005/09/08</td>
                                                <td>63%</td>
                                            </tr>
                                            <tr>
                                                <td>Willow Gilliam</td>
                                                <td>3497</td>
                                                <td>Amqui</td>
                                                <td>2009/29/11</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>Blossom Dickerson</td>
                                                <td>5018</td>
                                                <td>Kempten</td>
                                                <td>2006/11/09</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td>Elliott Snyder</td>
                                                <td>3925</td>
                                                <td>Enines</td>
                                                <td>2006/03/08</td>
                                                <td>57%</td>
                                            </tr>
                                            <tr>
                                                <td>Castor Pugh</td>
                                                <td>9488</td>
                                                <td>Neath</td>
                                                <td>2014/23/12</td>
                                                <td>93%</td>
                                            </tr>
                                            <tr>
                                                <td>Pearl Carlson</td>
                                                <td>6231</td>
                                                <td>Cobourg</td>
                                                <td>2014/31/08</td>
                                                <td>100%</td>
                                            </tr>
                                            <tr>
                                                <td>Deirdre Bridges</td>
                                                <td>1579</td>
                                                <td>Eberswalde-Finow</td>
                                                <td>2014/26/08</td>
                                                <td>44%</td>
                                            </tr>
                                            <tr>
                                                <td>Daniel Baldwin</td>
                                                <td>6095</td>
                                                <td>Moircy</td>
                                                <td>2000/11/01</td>
                                                <td>33%</td>
                                            </tr>
                                            <tr>
                                                <td>Phelan Kane</td>
                                                <td>9519</td>
                                                <td>Germersheim</td>
                                                <td>1999/16/04</td>
                                                <td>77%</td>
                                            </tr>
                                            <tr>
                                                <td>Quentin Salas</td>
                                                <td>1339</td>
                                                <td>Los Andes</td>
                                                <td>2011/26/01</td>
                                                <td>49%</td>
                                            </tr>
                                            <tr>
                                                <td>Armand Suarez</td>
                                                <td>6583</td>
                                                <td>Funtua</td>
                                                <td>1999/06/11</td>
                                                <td>9%</td>
                                            </tr>
                                            <tr>
                                                <td>Gretchen Rogers</td>
                                                <td>5393</td>
                                                <td>Moxhe</td>
                                                <td>1998/26/10</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>Harding Thompson</td>
                                                <td>2824</td>
                                                <td>Abeokuta</td>
                                                <td>2008/06/08</td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>Mira Rocha</td>
                                                <td>4393</td>
                                                <td>Port Harcourt</td>
                                                <td>2002/04/10</td>
                                                <td>14%</td>
                                            </tr>
                                            <tr>
                                                <td>Drew Phillips</td>
                                                <td>2931</td>
                                                <td>Goes</td>
                                                <td>2011/18/10</td>
                                                <td>58%</td>
                                            </tr>
                                            <tr>
                                                <td>Emerald Warner</td>
                                                <td>6205</td>
                                                <td>Chiavari</td>
                                                <td>2002/08/04</td>
                                                <td>58%</td>
                                            </tr>
                                            <tr>
                                                <td>Colin Burch</td>
                                                <td>7457</td>
                                                <td>Anamur</td>
                                                <td>2004/02/01</td>
                                                <td>34%</td>
                                            </tr>
                                            <tr>
                                                <td>Russell Haynes</td>
                                                <td>8916</td>
                                                <td>Frascati</td>
                                                <td>2015/28/04</td>
                                                <td>18%</td>
                                            </tr>
                                            <tr>
                                                <td>Brennan Brooks</td>
                                                <td>9011</td>
                                                <td>Olmué</td>
                                                <td>2000/18/04</td>
                                                <td>2%</td>
                                            </tr>
                                            <tr>
                                                <td>Kane Anthony</td>
                                                <td>8075</td>
                                                <td>LaSalle</td>
                                                <td>2006/21/05</td>
                                                <td>93%</td>
                                            </tr>
                                            <tr>
                                                <td>Scarlett Hurst</td>
                                                <td>1019</td>
                                                <td>Brampton</td>
                                                <td>2015/07/01</td>
                                                <td>94%</td>
                                            </tr>
                                            <tr>
                                                <td>James Scott</td>
                                                <td>3008</td>
                                                <td>Meux</td>
                                                <td>2007/30/05</td>
                                                <td>55%</td>
                                            </tr>
                                            <tr>
                                                <td>Desiree Ferguson</td>
                                                <td>9054</td>
                                                <td>Gojra</td>
                                                <td>2009/15/02</td>
                                                <td>81%</td>
                                            </tr>
                                            <tr>
                                                <td>Elaine Bishop</td>
                                                <td>9160</td>
                                                <td>Petrópolis</td>
                                                <td>2008/23/12</td>
                                                <td>48%</td>
                                            </tr>
                                            <tr>
                                                <td>Hilda Nelson</td>
                                                <td>6307</td>
                                                <td>Posina</td>
                                                <td>2004/23/05</td>
                                                <td>76%</td>
                                            </tr>
                                            <tr>
                                                <td>Evangeline Beasley</td>
                                                <td>3820</td>
                                                <td>Caplan</td>
                                                <td>2009/12/03</td>
                                                <td>62%</td>
                                            </tr>
                                            <tr>
                                                <td>Wyatt Riley</td>
                                                <td>5694</td>
                                                <td>Cavaion Veronese</td>
                                                <td>2012/19/02</td>
                                                <td>67%</td>
                                            </tr>
                                            <tr>
                                                <td>Wyatt Mccarthy</td>
                                                <td>3547</td>
                                                <td>Patan</td>
                                                <td>2014/23/06</td>
                                                <td>9%</td>
                                            </tr>
                                            <tr>
                                                <td>Cairo Rice</td>
                                                <td>6273</td>
                                                <td>Ostra Vetere</td>
                                                <td>2016/27/02</td>
                                                <td>13%</td>
                                            </tr>
                                            <tr>
                                                <td>Sylvia Peters</td>
                                                <td>6829</td>
                                                <td>Arrah</td>
                                                <td>2015/03/02</td>
                                                <td>13%</td>
                                            </tr>
                                            <tr>
                                                <td>Kasper Craig</td>
                                                <td>5515</td>
                                                <td>Firenze</td>
                                                <td>2015/26/04</td>
                                                <td>56%</td>
                                            </tr>
                                            <tr>
                                                <td>Leigh Ruiz</td>
                                                <td>5112</td>
                                                <td>Lac Ste. Anne</td>
                                                <td>2001/09/02</td>
                                                <td>28%</td>
                                            </tr>
                                            <tr>
                                                <td>Athena Aguirre</td>
                                                <td>5741</td>
                                                <td>Romeral</td>
                                                <td>2010/24/03</td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>Riley Nunez</td>
                                                <td>5533</td>
                                                <td>Sart-Eustache</td>
                                                <td>2003/26/02</td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>Lois Talley</td>
                                                <td>9393</td>
                                                <td>Dorchester</td>
                                                <td>2014/05/01</td>
                                                <td>51%</td>
                                            </tr>
                                            <tr>
                                                <td>Hop Bass</td>
                                                <td>1024</td>
                                                <td>Westerlo</td>
                                                <td>2012/25/09</td>
                                                <td>85%</td>
                                            </tr>
                                            <tr>
                                                <td>Kalia Diaz</td>
                                                <td>9184</td>
                                                <td>Ichalkaranji</td>
                                                <td>2013/26/06</td>
                                                <td>92%</td>
                                            </tr>
                                            <tr>
                                                <td>Maia Pate</td>
                                                <td>6682</td>
                                                <td>Louvain-la-Neuve</td>
                                                <td>2011/23/04</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>Macaulay Pruitt</td>
                                                <td>4457</td>
                                                <td>Fraser-Fort George</td>
                                                <td>2015/03/08</td>
                                                <td>92%</td>
                                            </tr>
                                            <tr>
                                                <td>Danielle Oconnor</td>
                                                <td>9464</td>
                                                <td>Neuwied</td>
                                                <td>2001/05/10</td>
                                                <td>17%</td>
                                            </tr>
                                            <tr>
                                                <td>Kato Carr</td>
                                                <td>4842</td>
                                                <td>Faridabad</td>
                                                <td>2012/11/05</td>
                                                <td>96%</td>
                                            </tr>
                                            <tr>
                                                <td>Malachi Mejia</td>
                                                <td>7133</td>
                                                <td>Vorst</td>
                                                <td>2007/25/04</td>
                                                <td>26%</td>
                                            </tr>
                                            <tr>
                                                <td>Dominic Carver</td>
                                                <td>3476</td>
                                                <td>Pointe-aux-Trembles</td>
                                                <td>2014/14/03</td>
                                                <td>71%</td>
                                            </tr>
                                            <tr>
                                                <td>Paki Santos</td>
                                                <td>4424</td>
                                                <td>Cache Creek</td>
                                                <td>2001/18/11</td>
                                                <td>82%</td>
                                            </tr>
                                            <tr>
                                                <td>Ross Hodges</td>
                                                <td>1862</td>
                                                <td>Trazegnies</td>
                                                <td>2010/19/09</td>
                                                <td>87%</td>
                                            </tr>
                                            <tr>
                                                <td>Hilda Whitley</td>
                                                <td>3514</td>
                                                <td>New Sarepta</td>
                                                <td>2011/05/07</td>
                                                <td>94%</td>
                                            </tr>
                                            <tr>
                                                <td>Roth Cherry</td>
                                                <td>4006</td>
                                                <td>Flin Flon</td>
                                                <td>2008/02/09</td>
                                                <td>8%</td>
                                            </tr>
                                            <tr>
                                                <td>Lareina Jones</td>
                                                <td>8642</td>
                                                <td>East Linton</td>
                                                <td>2009/07/08</td>
                                                <td>21%</td>
                                            </tr>
                                            <tr>
                                                <td>Joshua Weiss</td>
                                                <td>2289</td>
                                                <td>Saint-Léonard</td>
                                                <td>2010/15/01</td>
                                                <td>52%</td>
                                            </tr>
                                            <tr>
                                                <td>Kiona Lowery</td>
                                                <td>5952</td>
                                                <td>Inuvik</td>
                                                <td>2002/17/12</td>
                                                <td>72%</td>
                                            </tr>
                                            <tr>
                                                <td>Nina Rush</td>
                                                <td>7567</td>
                                                <td>Bo‘lhe</td>
                                                <td>2008/27/01</td>
                                                <td>6%</td>
                                            </tr>
                                            <tr>
                                                <td>Palmer Parker</td>
                                                <td>2000</td>
                                                <td>Stade</td>
                                                <td>2012/24/07</td>
                                                <td>58%</td>
                                            </tr>
                                            <tr>
                                                <td>Vielka Olsen</td>
                                                <td>3745</td>
                                                <td>Vrasene</td>
                                                <td>2016/08/01</td>
                                                <td>70%</td>
                                            </tr>
                                            <tr>
                                                <td>Meghan Cunningham</td>
                                                <td>8604</td>
                                                <td>Söke</td>
                                                <td>2007/16/02</td>
                                                <td>59%</td>
                                            </tr>
                                            <tr>
                                                <td>Iola Shaw</td>
                                                <td>6447</td>
                                                <td>Albany</td>
                                                <td>2014/05/03</td>
                                                <td>88%</td>
                                            </tr>
                                            <tr>
                                                <td>Imelda Cole</td>
                                                <td>4564</td>
                                                <td>Haasdonk</td>
                                                <td>2007/16/11</td>
                                                <td>79%</td>
                                            </tr>
                                            <tr>
                                                <td>Jerry Beach</td>
                                                <td>6801</td>
                                                <td>Gattatico</td>
                                                <td>1999/07/07</td>
                                                <td>36%</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Rocha</td>
                                                <td>3938</td>
                                                <td>Gavorrano</td>
                                                <td>2000/06/08</td>
                                                <td>71%</td>
                                            </tr>
                                            <tr>
                                                <td>Derek Kerr</td>
                                                <td>1724</td>
                                                <td>Gualdo Cattaneo</td>
                                                <td>2014/21/01</td>
                                                <td>89%</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Hudson</td>
                                                <td>5944</td>
                                                <td>Salamanca</td>
                                                <td>2014/10/12</td>
                                                <td>98%</td>
                                            </tr>
                                            <tr>
                                                <td>Daryl Ayers</td>
                                                <td>8276</td>
                                                <td>Barchi</td>
                                                <td>2012/12/11</td>
                                                <td>88%</td>
                                            </tr>
                                            <tr>
                                                <td>Caleb Livingston</td>
                                                <td>3094</td>
                                                <td>Fatehpur</td>
                                                <td>2014/13/02</td>
                                                <td>8%</td>
                                            </tr>
                                            <tr>
                                                <td>Sydney Meyer</td>
                                                <td>4576</td>
                                                <td>Neubrandenburg</td>
                                                <td>2015/06/02</td>
                                                <td>22%</td>
                                            </tr>
                                            <tr>
                                                <td>Lani Lawrence</td>
                                                <td>8501</td>
                                                <td>Turnhout</td>
                                                <td>2008/07/05</td>
                                                <td>16%</td>
                                            </tr>
                                            <tr>
                                                <td>Allegra Shepherd</td>
                                                <td>2576</td>
                                                <td>Meeuwen-Gruitrode</td>
                                                <td>2004/19/04</td>
                                                <td>41%</td>
                                            </tr>
                                            <tr>
                                                <td>Fallon Reyes</td>
                                                <td>3178</td>
                                                <td>Monceau-sur-Sambre</td>
                                                <td>2005/15/02</td>
                                                <td>16%</td>
                                            </tr>
                                            <tr>
                                                <td>Karen Whitley</td>
                                                <td>4357</td>
                                                <td>Sluis</td>
                                                <td>2003/02/05</td>
                                                <td>23%</td>
                                            </tr>
                                            <tr>
                                                <td>Stewart Stephenson</td>
                                                <td>5350</td>
                                                <td>Villa Faraldi</td>
                                                <td>2003/05/07</td>
                                                <td>65%</td>
                                            </tr>
                                            <tr>
                                                <td>Ursula Reynolds</td>
                                                <td>7544</td>
                                                <td>Southampton</td>
                                                <td>1999/16/12</td>
                                                <td>61%</td>
                                            </tr>
                                            <tr>
                                                <td>Adrienne Winters</td>
                                                <td>4425</td>
                                                <td>Laguna Blanca</td>
                                                <td>2014/15/09</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>Francesca Brock</td>
                                                <td>1337</td>
                                                <td>Oban</td>
                                                <td>2000/12/06</td>
                                                <td>90%</td>
                                            </tr>
                                            <tr>
                                                <td>Ursa Davenport</td>
                                                <td>7629</td>
                                                <td>New Plymouth</td>
                                                <td>2013/27/06</td>
                                                <td>37%</td>
                                            </tr>
                                            <tr>
                                                <td>Mark Brock</td>
                                                <td>3310</td>
                                                <td>Veenendaal</td>
                                                <td>2006/08/09</td>
                                                <td>41%</td>
                                            </tr>
                                            <tr>
                                                <td>Dale Rush</td>
                                                <td>5050</td>
                                                <td>Chicoutimi</td>
                                                <td>2000/27/03</td>
                                                <td>2%</td>
                                            </tr>
                                            <tr>
                                                <td>Shellie Murphy</td>
                                                <td>3845</td>
                                                <td>Marlborough</td>
                                                <td>2013/13/11</td>
                                                <td>72%</td>
                                            </tr>
                                            <tr>
                                                <td>Porter Nicholson</td>
                                                <td>4539</td>
                                                <td>Bismil</td>
                                                <td>2012/22/10</td>
                                                <td>23%</td>
                                            </tr>
                                            <tr>
                                                <td>Oliver Huber</td>
                                                <td>1265</td>
                                                <td>Hannche</td>
                                                <td>2002/11/01</td>
                                                <td>94%</td>
                                            </tr>
                                            <tr>
                                                <td>Calista Maynard</td>
                                                <td>3315</td>
                                                <td>Pozzuolo del Friuli</td>
                                                <td>2006/23/03</td>
                                                <td>5%</td>
                                            </tr>
                                            <tr>
                                                <td>Lois Vargas</td>
                                                <td>6825</td>
                                                <td>Cumberland</td>
                                                <td>1999/25/04</td>
                                                <td>50%</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Dickson</td>
                                                <td>2785</td>
                                                <td>Woodstock</td>
                                                <td>2001/22/03</td>
                                                <td>2%</td>
                                            </tr>
                                            <tr>
                                                <td>Dalton Jennings</td>
                                                <td>5416</td>
                                                <td>Dudzele</td>
                                                <td>2015/09/02</td>
                                                <td>74%</td>
                                            </tr>
                                            <tr>
                                                <td>Cathleen Kramer</td>
                                                <td>3380</td>
                                                <td>Crowsnest Pass</td>
                                                <td>2012/27/07</td>
                                                <td>53%</td>
                                            </tr>
                                            <tr>
                                                <td>Zachery Morgan</td>
                                                <td>6730</td>
                                                <td>Collines-de-l'Outaouais</td>
                                                <td>2006/04/09</td>
                                                <td>51%</td>
                                            </tr>
                                            <tr>
                                                <td>Yoko Freeman</td>
                                                <td>4077</td>
                                                <td>Lidköping</td>
                                                <td>2002/27/12</td>
                                                <td>48%</td>
                                            </tr>
                                            <tr>
                                                <td>Chaim Waller</td>
                                                <td>4240</td>
                                                <td>North Shore</td>
                                                <td>2010/25/07</td>
                                                <td>25%</td>
                                            </tr>
                                            <tr>
                                                <td>Berk Johnston</td>
                                                <td>4532</td>
                                                <td>Vergnies</td>
                                                <td>2016/23/02</td>
                                                <td>93%</td>
                                            </tr>
                                            <tr>
                                                <td>Tad Munoz</td>
                                                <td>2902</td>
                                                <td>Saint-Nazaire</td>
                                                <td>2010/09/05</td>
                                                <td>65%</td>
                                            </tr>
                                            <tr>
                                                <td>Vivien Dominguez</td>
                                                <td>5653</td>
                                                <td>Bargagli</td>
                                                <td>2001/09/01</td>
                                                <td>86%</td>
                                            </tr>
                                            <tr>
                                                <td>Carissa Lara</td>
                                                <td>3241</td>
                                                <td>Sherborne</td>
                                                <td>2015/07/12</td>
                                                <td>72%</td>
                                            </tr>
                                            <tr>
                                                <td>Hammett Gordon</td>
                                                <td>8101</td>
                                                <td>Wah</td>
                                                <td>1998/06/09</td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>Walker Nixon</td>
                                                <td>6901</td>
                                                <td>Metz</td>
                                                <td>2011/12/11</td>
                                                <td>41%</td>
                                            </tr>
                                            <tr>
                                                <td>Nathan Espinoza</td>
                                                <td>5956</td>
                                                <td>Strathcona County</td>
                                                <td>2002/25/01</td>
                                                <td>47%</td>
                                            </tr>
                                            <tr>
                                                <td>Kelly Cameron</td>
                                                <td>4836</td>
                                                <td>Fontaine-Valmont</td>
                                                <td>1999/02/07</td>
                                                <td>24%</td>
                                            </tr>
                                            <tr>
                                                <td>Kyra Moses</td>
                                                <td>3796</td>
                                                <td>Quenast</td>
                                                <td>1998/07/07</td>
                                                <td>68%</td>
                                            </tr>
                                            <tr>
                                                <td>Grace Bishop</td>
                                                <td>8340</td>
                                                <td>Rodez</td>
                                                <td>2012/02/10</td>
                                                <td>4%</td>
                                            </tr>
                                            <tr>
                                                <td>Haviva Hernandez</td>
                                                <td>8136</td>
                                                <td>Suwałki</td>
                                                <td>2000/30/01</td>
                                                <td>16%</td>
                                            </tr>
                                            <tr>
                                                <td>Alisa Horn</td>
                                                <td>9853</td>
                                                <td>Ucluelet</td>
                                                <td>2007/01/11</td>
                                                <td>39%</td>
                                            </tr>
                                            <tr>
                                                <td>Zelenia Roman</td>
                                                <td>7516</td>
                                                <td>Redwater</td>
                                                <td>2012/03/03</td>
                                                <td>31%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>

                            </div>
                        </div><!-- End Top Selling -->

                    </div>
                </div><!-- End Left side columns -->

                {{-- <!-- Right side columns -->
                <div class="col-lg-4">

                    <!-- Recent Activity -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">32 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a>
                                        beatae
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">56 min</div>
                                    <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                    <div class="activity-content">
                                        Voluptatem blanditiis blanditiis eveniet
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hrs</div>
                                    <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                                    <div class="activity-content">
                                        Voluptates corrupti molestias voluptatem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">1 day</div>
                                    <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
                                    <div class="activity-content">
                                        Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati
                                            voluptatem</a> tempore
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 days</div>
                                    <i class='bi bi-circle-fill activity-badge text-warning align-self-start'></i>
                                    <div class="activity-content">
                                        Est sit eum reiciendis exercitationem
                                    </div>
                                </div><!-- End activity item-->

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 weeks</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                                    </div>
                                </div><!-- End activity item-->

                            </div>

                        </div>
                    </div><!-- End Recent Activity --> --}}

                {{-- <!-- Budget Report -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Budget Report <span>| This Month</span></h5>

                            <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                                        legend: {
                                            data: ['Allocated Budget', 'Actual Spending']
                                        },
                                        radar: {
                                            // shape: 'circle',
                                            indicator: [{
                                                    name: 'Sales',
                                                    max: 6500
                                                },
                                                {
                                                    name: 'Administration',
                                                    max: 16000
                                                },
                                                {
                                                    name: 'Information Technology',
                                                    max: 30000
                                                },
                                                {
                                                    name: 'Customer Support',
                                                    max: 38000
                                                },
                                                {
                                                    name: 'Development',
                                                    max: 52000
                                                },
                                                {
                                                    name: 'Marketing',
                                                    max: 25000
                                                }
                                            ]
                                        },
                                        series: [{
                                            name: 'Budget vs spending',
                                            type: 'radar',
                                            data: [{
                                                    value: [4200, 3000, 20000, 35000, 50000, 18000],
                                                    name: 'Allocated Budget'
                                                },
                                                {
                                                    value: [5000, 14000, 28000, 26000, 42000, 21000],
                                                    name: 'Actual Spending'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Budget Report --> --}}

                {{-- <!-- Website Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">Website Traffic <span>| Today</span></h5>

                            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                            <script>
                                document.addEventListener("DOMContentLoaded", () => {
                                    echarts.init(document.querySelector("#trafficChart")).setOption({
                                        tooltip: {
                                            trigger: 'item'
                                        },
                                        legend: {
                                            top: '5%',
                                            left: 'center'
                                        },
                                        series: [{
                                            name: 'Access From',
                                            type: 'pie',
                                            radius: ['40%', '70%'],
                                            avoidLabelOverlap: false,
                                            label: {
                                                show: false,
                                                position: 'center'
                                            },
                                            emphasis: {
                                                label: {
                                                    show: true,
                                                    fontSize: '18',
                                                    fontWeight: 'bold'
                                                }
                                            },
                                            labelLine: {
                                                show: false
                                            },
                                            data: [{
                                                    value: 1048,
                                                    name: 'Search Engine'
                                                },
                                                {
                                                    value: 735,
                                                    name: 'Direct'
                                                },
                                                {
                                                    value: 580,
                                                    name: 'Email'
                                                },
                                                {
                                                    value: 484,
                                                    name: 'Union Ads'
                                                },
                                                {
                                                    value: 300,
                                                    name: 'Video Ads'
                                                }
                                            ]
                                        }]
                                    });
                                });
                            </script>

                        </div>
                    </div><!-- End Website Traffic --> --}}

                {{-- <!-- News & Updates Traffic -->
                    <div class="card">
                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                    class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body pb-0">
                            <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

                            <div class="news">
                                <div class="post-item clearfix">
                                    <img src="assets/img/news-1.jpg" alt="">
                                    <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                                    <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-2.jpg" alt="">
                                    <h4><a href="#">Quidem autem et impedit</a></h4>
                                    <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-3.jpg" alt="">
                                    <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                                    <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-4.jpg" alt="">
                                    <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                                    <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                                </div>

                                <div class="post-item clearfix">
                                    <img src="assets/img/news-5.jpg" alt="">
                                    <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                                    <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...
                                    </p>
                                </div>

                            </div><!-- End sidebar recent posts-->

                        </div>
                    </div><!-- End News & Updates --> --}}

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->
@endsection
