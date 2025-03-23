@extends('layouts.userlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>User Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('consumer/dashboard')}}">Dashboard</a></li>
                    {{-- <li class="breadcrumb-item active">Plans</li> --}}
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

                    <!-- First Row: VoIP -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">VoIP</div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected disabled>Choose Plan</option>
                                <option>1000 Mins</option>
                                <option>5000 Mins</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Enter Custom Value">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>

                    <!-- Second Row: Cloud Storage -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">Cloud Storage</div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected disabled>Choose Plan</option>
                                <option>500 GB</option>
                                <option>1 TB</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Enter Custom Value">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>

                    <!-- Third Row: Hosting -->
                    <div class="row align-items-center mb-3">
                        <div class="col-md-3">Hosting</div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option selected disabled>Choose Plan</option>
                                <option>500 GB</option>
                                <option>1 TB</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Enter Custom Value">
                        </div>
                        <div class="col-md-3">
                            <button class="btn btn-primary">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Handle the dropdown selections
        document.querySelectorAll('.dropdown-menu a').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                const type = this.getAttribute('data-type');
                const value = this.getAttribute('data-value');

                // Hide all custom inputs first
                document.querySelectorAll('.custom-input').forEach(input => input.classList.add('d-none'));

                if (value === 'custom') {
                    // Show the relevant custom input box
                    document.getElementById(`custom-input-${type}`).classList.remove('d-none');
                } else {
                    alert(`You selected ${value} (${type})`);
                }
            });
        });
    </script>
@endsection
