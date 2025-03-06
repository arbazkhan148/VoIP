@extends('seller.layouts.layout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Registration Form</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</a></li>
                    <li class="breadcrumb-item">Registration Form</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">User Registration Form</h5>

                            <!-- No Labels Form -->
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Confirm Password">
                                </div>
                                <div class="col-md-5">
                                    <select id="inputState" class="form-select">
                                        <option>Select State</option>
                                        <option>Jharkhand</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                                <div class="col-md-2">
                                    <input type="text" class="form-control" placeholder="Zip">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Address</textarea>
                                </div>
                                <div class="col-md-12">
                                    <select id="inputState" class="form-select">
                                        <option>Choose Plan</option>
                                        <option>1 TB</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End No Labels Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
