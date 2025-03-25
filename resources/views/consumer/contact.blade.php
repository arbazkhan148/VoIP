@extends('layouts.userlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contact</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section contact">

            <div class="row gy-4">

                <div class="col-xl-6">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+971509036610</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@citypharma.com</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="info-box card">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p> Shaikh Zayed Road<br>Dubai</p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6">
                    <div class="card p-4">

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <form action=" {{ url('consumer/contactPost') }}" method="post">
                            @csrf

                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button class="btn btn-primary" type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

            </div>

        </section>

    </main><!-- End #main -->
@endsection
