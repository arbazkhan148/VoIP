@extends('layouts.userlayout')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>User Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('consumer/dashboard') }}">Dashboard</a></li>
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

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Buy Plans</h5>

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <!-- Example Row for VoIP -->
                    <form action="{{ url('consumer/buy-plan') }}" method="POST" class="buy-plan-form mb-3">
                        @csrf
                        <input type="hidden" name="plan_type" value="VoIP">
                        <div class="row align-items-center">
                            <div class="col-md-3">VoIP</div>

                            <div class="col-md-6 d-flex">
                                <select name="plan_desc" class="form-select plan-select me-2 flex-grow-1"
                                    data-target="voip">
                                    <option selected>Choose Plan</option>
                                    <option value="1000 Mins">1000 Mins</option>
                                    <option value="5000 Mins">5000 Mins</option>
                                    <option value="custom">Custom</option>
                                </select>

                                <input type="text" name="custom_value" id="custom-input-voip"
                                    class="form-control custom-input d-none flex-grow-1"
                                    placeholder="Enter Custom Value (in Minutes)">
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary w-100">Buy Now</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ url('consumer/buy-plan') }}" method="POST" class="buy-plan-form mb-3">
                        @csrf
                        <input type="hidden" name="plan_type" value="Cloud Storage">
                        <div class="row align-items-center">
                            <div class="col-md-3">Cloud Storage</div>

                            <div class="col-md-6 d-flex">
                                <select name="plan_desc" class="form-select plan-select me-2 flex-grow-1"
                                    data-target="cloud">
                                    <option selected>Choose Plan</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="1 TB">1 TB</option>
                                    <option value="custom">Custom</option>
                                </select>

                                <input type="text" name="custom_value" id="custom-input-cloud"
                                    class="form-control custom-input d-none flex-grow-1"
                                    placeholder="Enter Custom Value (in GB)">
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary w-100">Buy Now</button>
                            </div>
                        </div>
                    </form>

                    <!-- Hosting -->
                    <form action="{{ url('consumer/buy-plan') }}" method="POST" class="buy-plan-form mb-3">
                        @csrf
                        <input type="hidden" name="plan_type" value="Hosting">
                        <div class="row align-items-center">
                            <div class="col-md-3">Hosting</div>

                            <div class="col-md-6 d-flex">
                                <select name="plan_desc" class="form-select plan-select me-2 flex-grow-1"
                                    data-target="hosting">
                                    <option selected>Choose Plan</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="1 TB">1 TB</option>
                                    <option value="custom">Custom</option>
                                </select>

                                <input type="text" name="custom_value" id="custom-input-hosting"
                                    class="form-control custom-input d-none flex-grow-1"
                                    placeholder="Enter Custom Value (in GB)">
                            </div>

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary w-100">Buy Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}

    <script>
        // Show/Hide custom input on select change
        document.querySelectorAll('.plan-select').forEach(function(select) {
            select.addEventListener('change', function() {
                const target = this.getAttribute('data-target');
                const input = document.getElementById(`custom-input-${target}`);

                // if (this.value === 'custom') {
                //     input.classList.remove('d-none');
                //     this.classList.add('d-none');
                // } else {
                //     input.classList.add('d-none');
                //     this.classList.remove('d-none');
                // }
                if (this.value === 'custom') {
                    input.classList.remove('d-none');
                    // Don't hide the select if you still need interaction or Bootstrap functionality.
                } else {
                    input.classList.add('d-none');
                }

            });
        });

        // Convert input text to uppercase
        document.querySelectorAll('.custom-input').forEach(function(input) {
            input.addEventListener('input', function() {
                this.value = this.value.toUpperCase();
            });
        });
    </script>
@endsection
