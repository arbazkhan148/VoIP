@extends('layouts.distributorlayout')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>My Plans</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item active">Plans</li>
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
                                    @if(count($voips))
                                        @foreach($voips as $voip)
                                            <strong>Plan Type: {{$voip->plan_type}} | Plan Desc: {{$voip->plan_desc}} | Date: {{$voip->date}}</strong>
                                        @endforeach
                                    @else
                                    No Active Plans
                                    @endif
                                </div>
                                <div class="tab-pane fade text-center" id="bordered-justified-profile" role="tabpanel"
                                    aria-labelledby="profile-tab">
                                    @if(count($clouds))
                                        @foreach($clouds as $cloud)
                                            <strong>Plan Type: {{$cloud->plan_type}} | Plan Desc: {{$cloud->plan_desc}} | Date: {{$cloud->date}}</strong>
                                        @endforeach
                                    @else
                                        No Active Plans
                                    @endif
                                </div>
                                <div class="tab-pane fade text-center" id="bordered-justified-contact" role="tabpanel"
                                    aria-labelledby="contact-tab">
                                    @if(count($hostings))
                                        @foreach($hostings as $hosting)
                                            <strong>Plan Type: {{$hosting->plan_type}} | Plan Desc: {{$hosting->plan_desc}} | Date: {{$hosting->date}}</strong>
                                        @endforeach
                                    @else
                                        No Active Plans
                                    @endif
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

                    @if (session('error'))
                        <div class="alert alert-danger mt-3">
                            {{ session('error') }}
                        </div>
                    @endif


                    <!-- VoIP Plan Form -->
                    <form method="POST" action="{{ url('distributor/buy-plan') }}">
                        @csrf
                        <div class="row align-items-center mb-3">
                            <div class="col-md-3">VoIP</div>
                            <div class="col-md-3">
                                <select class="form-select" name="plan_option" id="voipplan">
                                    <option selected >Choose Plan</option>
                                    <option value="1000 Minutes">1000 Minutes</option>
                                    <option value="5000 Minutes">5000 Minutes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="custom_value"
                                    placeholder="Enter Custom Value (in Minutes)" id="voipcustom">
                            </div>
                            <div class="col-md-3">
                                <input type="hidden" name="plan_type" value="VoIP">
                                <button type="submit" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </form>

                    <!-- Cloud Storage Plan Form -->
                    <form method="POST" action="{{ url('distributor/buy-plan') }}">
                        @csrf
                        <div class="row align-items-center mb-3">
                            <div class="col-md-3">Cloud Storage</div>
                            <div class="col-md-3">
                                <select class="form-select" name="plan_option" id="cloudplan">
                                    <option selected >Choose Plan</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="1 TB">1 TB</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="custom_value" id="cloudcustom"
                                    placeholder="Enter Custom Value (in GB/TB)">
                            </div>
                            <div class="col-md-3">
                                <input type="hidden" name="plan_type" value="Cloud Storage">
                                <button type="submit" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </form>

                    <!-- Hosting Plan Form -->
                    <form method="POST" action="{{ url('distributor/buy-plan') }}">
                        @csrf
                        <div class="row align-items-center mb-3">
                            <div class="col-md-3">Hosting</div>
                            <div class="col-md-3">
                                <select class="form-select" name="plan_option" id="hostingplan">
                                    <option selected>Choose Plan</option>
                                    <option value="500 GB">500 GB</option>
                                    <option value="1 TB">1 TB</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control" name="custom_value" id="hostingcustom"
                                    placeholder="Enter Custom Value (in GB/TB)">
                            </div>
                            <div class="col-md-3">
                                <input type="hidden" name="plan_type" value="Hosting">
                                <button type="submit" class="btn btn-primary">Buy Now</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </section>


    </main><!-- End #main -->

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>--}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

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
                    // alert(`You selected ${value} (${type})`);
                }
            });
        });
        $('#voipplan').on('change',function (){
            if($(this).val()=="Choose Plan"){$("#voipcustom").removeAttr('disabled');
            }else{ $("#voipcustom").attr('disabled','true'); }
        });
        $('#cloudplan').on('change',function (){
            if($(this).val()=="Choose Plan"){$("#cloudcustom").removeAttr('disabled');
            }else{ $("#cloudcustom").attr('disabled','true'); }
        });
        $('#hostingplan').on('change',function (){
            if($(this).val()=="Choose Plan"){$("#hostingcustom").removeAttr('disabled');
            }else{ $("#hostingcustom").attr('disabled','true'); }
        });
    </script>
@endsection
