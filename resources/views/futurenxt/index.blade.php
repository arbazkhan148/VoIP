@extends('layouts.futurenxt')
@section('content')
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url{{asset('assets/images/slider-01.jpg')}};">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-right">
                                <div class="big-tagline">
                                    <h2><strong>Shared Hosting</strong> Company</h2>
                                    <!-- <p class="lead">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p> -->
                                        <!-- <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('images/slider-02.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-left">
                                <div class="big-tagline">
                                    <!-- <h2 data-animation="animated zoomInRight">Find the right <strong>Hosting</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <div class="carousel-item">
            <div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-center">
                                <div class="big-tagline">
                                    <!-- <h2 data-animation="animated zoomInRight"><strong>VPS Servers</strong> Company</h2>
                                    <p class="lead" data-animation="animated fadeInLeft">1 IP included with each server
                                        Your Choice of any OS (CentOS, Windows, Debian, Fedora)
                                        FREE Reboots</p>
                                        <a href="#" class="hover-btn-new"><span>Contact Us</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="#" class="hover-btn-new"><span>Read More</span></a> -->
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>
        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div id="domain" class="section wb">
    <div class="container">
        <div class="row text-center">

           <!--  <div class="col-lg-12">
                <form class="checkdomain form-inline">
                    <div class="checkdomain-wrapper">
                        <div class="form-group">
                            <label class="sr-only" for="domainnamehere">Domain name</label>
                            <input type="text" class="form-control" id="domainnamehere" placeholder="Enter domain name here..">
                            <button type="submit" class="btn btn-primary grd1"><i class="fa fa-search"></i></button>
                        </div>
                        <hr>
                        <div class="clearfix"></div>
                        <div class="checkbox checkbox-warning">
                            <input id="domaincom" type="checkbox" class="styled" checked>
                            <label for="domaincom">.com</label>
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="domainnet" type="checkbox" class="styled" checked>
                            <label for="domainnet">.net</label>
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="domainorg" type="checkbox" class="styled">
                            <label for="domainorg">.org</label>
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="domaintv" type="checkbox" class="styled">
                            <label for="domaintv">.tv</label>
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="domaininfo" type="checkbox" class="styled">
                            <label for="domaininfo">.info</label>
                        </div>
                    </div>
                </form>
            </div> -->



        </div>
    </div>
</div>

<div id="overviews" class="section lb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>About</h3>
                <p class="lead">Leading the way in cloud storage and VoIP hosting, we provide innovative, secure, and scalable solutions to power businesses worldwide.</p>
            </div>
        </div><!-- end title -->

        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="message-box">
                   <!--  <h4>BEST WEB HOSTING COMPANY</h4> -->
                  <!--   <h2>Awards Winner Support Center</h2> -->
                    <p>Welcome to Future Next, your trusted partner in cloud storage, hosting, and server solutions. As a rapidly growing technology company, we specialize in providing secure, scalable, and high-performance cloud infrastructure tailored to businesses of all sizes.</p>

                    <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis montes, nascetur ridiculus mus. Sed vitae rutrum neque. </p>

                    <a href="about.php" class="hover-btn-new"><span>Learn More</span></a>
                </div><!-- end messagebox -->
            </div><!-- end col -->

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="post-media wow fadeIn">
                    <img src="{{asset('assets/images/about_02.jpg')}}" alt="" class="img-fluid img-rounded">
                </div><!-- end media -->
            </div><!-- end col -->
        </div>

    </div><!-- end container -->
</div><!-- end section -->


<div class="bodyd">

    <h2 class="section-heading">Our Services</h2>

<div class="zigzag-container">


    <!-- VOIP Service -->
    <div class="zigzag-section">
        <div class="zigzag-image">
            <img src="{{asset('assets/images/v2.jpg')}}" alt="VOIP Service">
        </div>
        <div class="zigzag-content">
            <h2>VOIP Service</h2>
            <p>VOIP (Voice over Internet Protocol) enables communication via the internet, allowing businesses and individuals to make calls over the web rather than traditional phone lines.</p>
            <button class="btn" onclick="window.location.href='voip.html';">Raed More</button>
        </div>
    </div>

    <!-- Hosting Service -->
    <div class="zigzag-section reverse">
        <div class="zigzag-image">
            <img src="{{asset('assets/images/h2.jpg')}}" alt="Hosting Service">
        </div>
        <div class="zigzag-content">
            <h2>Hosting Service</h2>
            <p>Hosting services provide storage and computing resources to keep websites and applications running smoothly. They ensure website availability and optimal performance 24/7.</p>
             <button class="btn" onclick="window.location.href='hosting.html';">Explore Hosting</button>
            <!-- <button class="btn">Explore Hosting</button> -->
        </div>
    </div>

    <!-- Cloud Server -->
    <div class="zigzag-section">
        <div class="zigzag-image">
            <img src="{{asset('assets/images/c2.jpg')}}" alt="Cloud Server">
        </div>
        <div class="zigzag-content">
            <h2>Cloud Server</h2>
            <p>Cloud servers offer scalable, flexible, and secure computing resources. They help businesses expand their digital infrastructure with minimal maintenance and cost.</p>
            <button class="btn" onclick="window.location.href='cloudstorage.html';">Discover Cloud</button>
           <!--  <button class="btn">Discover Cloud</button> -->
        </div>
    </div>

    <!-- Cyber Security -->


    <!-- Data Analytics -->


</div>

</div>

<section class="page-section">
    <div class="container">
         <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>Our Growth Journey</h3>
                <p class="lead">Empowering businesses with cutting-edge VoIP hosting and secure cloud storage solutions, ensuring seamless connectivity and data reliability worldwide.</p>
            </div>
        </div><!-- end title -->
        <div class="timeline">
            <div class="timeline__wrap">
                <div class="timeline__items">
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-01">
                            <h2>Global Expansion</h2>
                            <p>Expanding operations to Dubai, bringing cutting-edge cloud and VoIP solutions to businesses worldwide.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-02">
                            <h2>Next-Gen VoIP Solutions </h2>
                            <p>Introducing high-quality, reliable VoIP hosting to enhance business communication.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-03">
                            <h2>Secure Cloud Storage </h2>
                            <p>Launching advanced cloud storage solutions for businesses, ensuring data security and accessibility.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-04">
                            <h2>High-Performance Hosting</h2>
                            <p>Providing scalable and optimized hosting services for websites, applications, and enterprises.</p>
                        </div>
                    </div>
                    <div class="timeline__item">
                        <div class="timeline__content img-bg-01">
                            <h2>Foundation & Vision </h2>
                            <p>Establishing our company with a mission to revolutionize cloud and hosting services.</p>
                        </div>
                    </div>
                    <!-- <div class="timeline__item">
                        <div class="timeline__content img-bg-02">
                            <h2>2007</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                        </div>
                    </div> -->
                    <!-- <div class="timeline__item">
                        <div class="timeline__content img-bg-03">
                            <h2>2004</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                        </div>
                    </div> -->
                <!-- 	<div class="timeline__item">
                        <div class="timeline__content img-bg-04">
                            <h2>2002</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dignissim neque condimentum lacus dapibus.</p>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section cl">
    <div class="container">
        <div class="row text-left stat-wrap">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-hosting"></i></span>
                <p class="stat_count">12000</p>
                <h3>Hosted Sites</h3>
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-domain-registration"></i></span>
                <p class="stat_count">24000</p>
                <h3>Sold Domains</h3>
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-mail"></i></span>
                <p class="stat_count">5000</p>
                <h3>Email Accounts</h3>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->





<!-- JavaScript for Google Map -->
<script src="{{asset('https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap')}}" async defer></script>
<script>
function initMap() {
    var mapOptions = {
        zoom: 14,
        center: { lat: 23.3441, lng: 85.3096 }, // Ranchi, Jharkhand (Change if needed)
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map"), mapOptions);

    var marker = new google.maps.Marker({
        position: { lat: 23.3441, lng: 85.3096 },
        map: map,
        title: "Our Location"
    });
}
</script>



<link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
@endsection
