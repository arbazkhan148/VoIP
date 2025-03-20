@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Consumer Registration</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Add Consumer</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consumer Registration Form</h5>

                            <form class="row g-3" action="{{ route('seller.consumerstore') }}" method="post"> @csrf
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Password" name="password"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" placeholder="Confirm Password"
                                        name="confirm_password" required>
                                </div>
                                <div class="col-md-12">
                                    <select id="planType" class="form-select" name="plan_type" required>
                                        <option value="">-- Select Plan Type --</option>
                                        <option value="voip">VoIP</option>
                                        <option value="cloud">Cloud Storage</option>
                                        <option value="hosting">Hosting</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <select id="planOption" class="form-select" name="plan_desc" required>
                                        <option value="">-- Select Plan --</option>
                                    </select>
                                </div>
                                <div id="customInputWrapper" class="mb-3 d-none">
                                    <label for="customInput" class="form-label">Enter Custom Value:</label>
                                    <input type="text" id="customInput" class="form-control"
                                        placeholder="Enter your custom value">
                                </div>

                                <div class="col-md-12">
                                    <select id="assigned_distributor" class="form-select" name="assigned_distributor" >
                                        <option value="">-- Assign Distributor --</option>
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
    </main>
    <script>
        const planType = document.getElementById('planType');
        const planOption = document.getElementById('planOption');
        const customInputWrapper = document.getElementById('customInputWrapper');
        const customInput = document.getElementById('customInput');

        // Dropdown options
        const options = {
            voip: ['1000 Mins', '5000 Mins', 'Custom'],
            cloud: ['500 GB', '1 TB', 'Custom'],
            hosting: ['500 GB', '1 TB', 'Custom']
        };

        // Plan Type change event
        planType.addEventListener('change', function() {
            const selectedType = this.value;

            // Reset Plan dropdown and hide custom input
            planOption.innerHTML = '<option value="">-- Select Plan --</option>';
            customInputWrapper.classList.add('d-none');
            customInput.value = '';

            if (options[selectedType]) {
                options[selectedType].forEach(function(plan) {
                    const optionElement = document.createElement('option');
                    optionElement.value = plan.toLowerCase().replace(/\s+/g, '_');
                    optionElement.text = plan;
                    planOption.appendChild(optionElement);
                });
            }
        });

        // Plan Option change event
        planOption.addEventListener('change', function() {
            const selectedPlan = this.value;

            if (selectedPlan === 'custom') {
                customInputWrapper.classList.remove('d-none');
                customInput.required = true;
            } else {
                customInputWrapper.classList.add('d-none');
                customInput.required = false;
                customInput.value = '';
            }
        });
    </script>
@endsection
