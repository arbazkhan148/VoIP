@extends('layouts.userlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Tabs</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Components</li>
                    <li class="breadcrumb-item active">Tabs</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Plans</h5>

                            <!-- Bordered Tabs Justified -->
                            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-home" type="button" role="tab"
                                        aria-controls="home" aria-selected="true">VoIP</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-profile" type="button" role="tab"
                                        aria-controls="profile" aria-selected="false">Cloud Storage</button>
                                </li>
                                <li class="nav-item flex-fill" role="presentation">
                                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#bordered-justified-contact" type="button" role="tab"
                                        aria-controls="contact" aria-selected="false">Hosting</button>
                                </li>
                            </ul>
                            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                                <div class="tab-pane fade show active text-center" id="bordered-justified-home"
                                    role="tabpanel" aria-labelledby="home-tab">
                                    No Active Plans
                                </div>
                                <div class="tab-pane fade text-center" id="bordered-justified-profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    No Active Plans
                                </div>
                                <div class="tab-pane fade text-center" id="bordered-justified-contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    No Active Plans
                                </div>
                            </div><!-- End Bordered Tabs Justified -->

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="section"> <!-- Plans Section-->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buy Plans</h5>

                    <!-- List group With badges -->
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            VoIP
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Buy Now
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">1 TB</a></li>
                                    <li><a class="dropdown-item" href="#">2 TB</a></li>
                                    <li><a class="dropdown-item" href="#">3 TB</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Cloud Storage
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Buy Now
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">1 TB</a></li>
                                  <li><a class="dropdown-item" href="#">2 TB</a></li>
                                  <li><a class="dropdown-item" href="#">3 TB</a></li>
                                </ul>
                              </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Hosting
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Buy Now
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">1 TB</a></li>
                                  <li><a class="dropdown-item" href="#">2 TB</a></li>
                                  <li><a class="dropdown-item" href="#">3 TB</a></li>
                                </ul>
                              </div>
                        </li>
                    </ul><!-- End List With badges -->

                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
