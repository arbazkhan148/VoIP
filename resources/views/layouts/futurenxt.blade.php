<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Future Next</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.jpg') }}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon.png') }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Site CSS -->
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/versions.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">


<!-- Modernizer for Portfolio -->
<script src="{{ asset('assets/js/modernizer.js') }}"></script>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    .bodyd {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    /* Zig-Zag Container */
    .zigzag-container {
        width: 80%;
        max-width: 800px;
    }

    /* Image & Content Section */
    .zigzag-section {
        display: flex;
        align-items: center;
        margin: 20px 0;
    }

    /* Reverse Styling for Alternating Effect */
    .reverse {
        flex-direction: row-reverse;
    }

    /* Image Styling with Green Border */
    .zigzag-image {
        width: 40%;
        padding: 5px;
    }

    .zigzag-image img {
        width: 100%;
        height: auto;
        border: 4px solid #28a745;
        /* Green Border */
        border-radius: 8px;
        object-fit: cover;
    }

    /* Content Styling */
    .zigzag-content {
        width: 60%;
        padding: 15px;
    }

    .zigzag-content p {
        font-size: 14px;
        color: #333;
    }

    /* Button Styling */
    .btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 15px;
        background-color: #28a745;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        font-size: 14px;
    }

    .btn:hover {
        background-color: #218838;
    }

    /* Responsive Design */
    @media screen and (max-width: 768px) {
        .zigzag-section {
            flex-direction: column;
        }

        .reverse {
            flex-direction: column;
        }

        .zigzag-image,
        .zigzag-content {
            width: 100%;
        }
    }



    .section-heading {
        text-align: center;
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 20px;
    }
</style>

</head>

<body class="host_version">

    <!-- Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Customer Login</h4>
                </div>
                <div class="modal-body customer-box">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
                        <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Login">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email1" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="exampleInputPassword1" placeholder="Email"
                                            type="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-light btn-radius btn-brd grd1">
                                            Submit
                                        </button>
                                        <a class="for-pwd" href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="Registration">
                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" placeholder="Name" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="email" placeholder="Email" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="mobile" placeholder="Mobile" type="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input class="form-control" id="password" placeholder="Password"
                                            type="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Save &amp; Continue
                                        </button>
                                        <button type="button" class="btn btn-light btn-radius btn-brd grd1">
                                            Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader-container">
            <div class="progress-br float shadow">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{('/')}}">
                    <img src="{{ asset('assets/images/futurenxt.png') }}" alt=""
                        style="max-height: 100px; width: 140px;" />
                </a>

                <div class="collapse navbar-collapse" id="navbars-host">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/about_us')}}">About Us</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="features.html">Features </a></li> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">Products</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="{{url('/voip')}}">VOIP </a>

                                <a class="dropdown-item" href="{{url('/hosting')}}">Hosting</a>


                                <a class="dropdown-item" href="{{url('/cloud')}}">Cloud Storage </a>

                            </div>
                        </li>
                        <!-- <li class="nav-item"><a class="nav-link" href="domain.html">Domain</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>






                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Account
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{url('consumer/login')}}">Login</a></li>
                              <li><a class="dropdown-item" href="{{('consumer/register')}}">Register</a></li>
                              <li><a class="dropdown-item" href="{{('distributor/register')}}">Become a <br>Partner</a></li>
                            </ul>
                          </div>









                        <!-- <li class="nav-item"><a class="nav-link" href="userreg.php">User Registration</a></li> -->

                        <!-- <li class="nav-item"><a class="nav-link" href="partnerregistration.php">Partner Registration</a></li>
     </ul> -->
                        <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a class="hover-btn-new log" href="#" data-toggle="modal" data-target="#login"><span>Customer Login</span></a></li>
                    </ul> -->
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    @yield('content')
    <link
        rel="stylesheet"href="{{ asset('assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p> Welcome to Future Next, your trusted partner in cloud storage, hosting, and server
                            solutions. As a rapidly growing technology company, we specialize in providing secure,
                            scalable, and high-performance cloud infrastructure tailored to businesses of all sizes.</p>
                        <!-- <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p> -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('/about_us')}}">About</a></li>
                            <li><a href="{{url('/voip')}}">VOIP</a></li>
                            <li><a href="{{url('/hosting')}}">Hosting</a></li>
                            <li><a href="{{url('/cloud')}}">Cloud Storage</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">sunnyprakashdubai@gmail.com </a></li>
                            <!--  <li><a href="#">www.yoursite.com</a></li> -->
                            <li>Shaikh Zayed Road Dubai</li>
                            <li>+971509036610</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2025 <a href="#">Future
                            Next</a><!--  Developed and Maintained By : <a href="https://html.design/">XYZ</a> --></p>
                </div>

                <div class="footer-right">
                    <ul class="footer-links-soi">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-github"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    </ul><!-- end links -->
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{ asset('assets/js/all.js') }}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/timeline.min.js') }}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
</body>

</html>
