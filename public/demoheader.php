<div class="row">
    <!-- Contact Form -->
    <div class="col-xl-6 col-md-12 col-sm-12">
        <div class="contact_form">
            <h3>Get in Touch</h3>
            <form id="contactform" action="contact.php" method="post">
                <fieldset class="row row-fluid">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                    </div>
                    <div class="text-center pd">
                        <button type="submit" id="submit" class="btn btn-dark btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div><!-- end col -->

    <!-- Company Info Section -->
    <div class="col-xl-6 col-md-12 col-sm-12">
        <div class="company-info">
            <h3>Contact Us</h3>
            <p><strong>Company Name:</strong> Your Company Pvt. Ltd.</p>
            <p><strong>Address:</strong> 123 Business Street, Suite 456, City, Country</p>
            <p><strong>Phone:</strong> +91 XXXXXXXXXX</p>
            <p><strong>Email:</strong> support@yourcompany.com</p>
            <p><strong>Working Hours:</strong> Mon - Fri: 9:00 AM - 6:00 PM</p>
        </div>
    </div>
</div>

<style>
/* Equal Box Styling */
.contact_form, .company-info {
    background: #fff !important;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    height: 100%;
}

/* Hover Effect */
.contact_form:hover, .company-info:hover {
    transform: scale(1.02);
}

/* Title Styling */
.contact_form h3, .company-info h3 {
    text-align: center;
    font-size: 22px;
    font-weight: bold;
    text-transform: uppercase;
}

/* Form Styling */
.contact_form input, .contact_form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
}

/* Button Styling */
.contact_form button {
    background: #333 !important;
    color: #fff !important;
    padding: 12px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s ease-in-out;
}

.contact_form button:hover {
    background: #555 !important;
}

/* Responsive Fix */
@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }
}
</style>
