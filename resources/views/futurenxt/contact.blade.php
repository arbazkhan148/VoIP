@extends('layouts.futurenxt')
@section('content')
<style>
    .custom-services-section {
        background-color: #f8f9fa !important;
        padding: 60px 0 !important;
    }
    .custom-section-title h3 {
        font-size: 28px !important;
        font-weight: bold !important;
        margin-bottom: 10px !important;
    }
    .custom-section-title p {
        color: #6c757d !important;
        font-size: 16px !important;
    }
    .custom-service-box {
        background: #ffffff !important;
        padding: 30px !important;
        border-radius: 8px !important;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1) !important;
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }
    .custom-service-box:hover {
        transform: translateY(-5px) !important;
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15) !important;
    }
    .custom-service-icon {
        font-size: 40px !important;
        color: #007bff !important;
        margin-bottom: 15px !important;
    }
    .custom-service-box h4 {
        font-size: 20px !important;
        font-weight: bold !important;
        margin-bottom: 10px !important;
    }
    .custom-service-box p {
        color: #6c757d !important;
        font-size: 14px !important;
    }




    /* Company Info Section Styling */
.company-info {
background: linear-gradient(135deg, #1e3c72, #2a5298); /* Gradient background */
color: #fff;
padding: 20px;
border-radius: 10px;
box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
text-align: center;
animation: fadeIn 1s ease-in-out;
transition: transform 0.3s ease-in-out;
}

.company-info:hover {
transform: scale(1.05); /* Slight zoom effect on hover */
}

.company-info h3 {
font-size: 24px;
margin-bottom: 15px;
text-transform: uppercase;
letter-spacing: 1px;
font-weight: bold;
}

.company-info p {
font-size: 16px;
margin: 5px 0;
}

/* Fade-in Animation */
@keyframes fadeIn {
from {
    opacity: 0;
    transform: translateY(20px);
}
to {
    opacity: 1;
    transform: translateY(0);
}
}
</style>
<div id="support" class="section wb">
<div class="container-fulid">
    <div class="section-title text-center">
        <h3>Need Help? Sure we are Online!</h3>
        <p class="lead">
           Our 24/7 support team is here to assist with VOIP, cloud storage, and hosting. Chat with us now!
        </p>
    </div><!-- end title -->

<div class="row">
<div class="col-xl-6 col-md-12 col-sm-12">
    <div class="contact_form">
        <div id="message"></div>
        <form id="contactform" action="contact.php" name="contactform" method="post">
            <fieldset class="row row-fluid">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <textarea class="form-control" name="message" id="message" rows="6" placeholder="Give us more details.."></textarea>
                </div>
                <div class="text-center pd">
                    <button type="submit" id="submit" class="btn btn-dark btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                </div>
            </fieldset>
        </form>
    </div>
</div><!-- end col -->

<!-- Company Address & Contact Details Section -->
<div class="col-xl-6 col-md-12 col-sm-12">
<div class="company-info">
    <h3 style="color: #fff;">Contact Us</h3>
    <p><strong>Company Name:</strong>Future Next</p>
    <p><strong>Address:</strong> Shaikh Zayed Road Dubai</p>
    <p><strong>Phone:</strong>+971509036610</p>
    <p><strong>Email:</strong> info@citypharma.com</p>
    <!-- <p><strong>Working Hours:</strong> Mon - Sat: 9:00 AM - 8:00 PM</p> -->
</div>
</div>

</div>
<!-- end row -->
</div><!-- end container -->
</div><!-- end section -->

<!-- New Section for VOIP Hosting & Cloud Storage Services -->
<div class="custom-services-section">
<div class="container">
    <div class="custom-section-title text-center">
        <h3>Our Services</h3>
        <p>Providing top-notch Hosting, VOIP, and Cloud Storage solutions.</p>
    </div>
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="custom-service-box">
                <i class="fas fa-server custom-service-icon"></i>
                <h4>Web Hosting</h4>
                <p>Reliable, high-speed hosting with 99.9% uptime and 24/7 support.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="custom-service-box">
                <i class="fas fa-phone-alt custom-service-icon"></i>
                <h4>VOIP Services</h4>
                <p>Seamless and cost-effective voice communication for businesses.</p>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="custom-service-box">
                <i class="fas fa-cloud custom-service-icon"></i>
                <h4>Cloud Storage</h4>
                <p>Secure and scalable cloud storage for your business and personal needs.</p>
            </div>
        </div>
    </div>
</div>
</div>


<!-- JavaScript for Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
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

<!-- FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- CSS for Styling -->
<style>
.services-section {
    background: linear-gradient(135deg, #f8f9fa, #dee2e6);
    padding: 60px 0;
}
.service-box {
    background: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    min-height: 250px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.service-box:hover {
    transform: translateY(-8px);
    box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.2);
}
.service-icon {
    font-size: 50px;
    color: #6c757d;
    margin-bottom: 15px;
    transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
}
.service-box:hover .service-icon {
    transform: rotate(10deg);
    color: #343a40;
}
#map {
    width: 100%;
    height: 400px;
    border-radius: 10px;
}
</style>
@endsection
