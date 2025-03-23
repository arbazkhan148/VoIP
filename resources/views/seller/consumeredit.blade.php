@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Consumer Edit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Edit Consumer</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Consumer Edit Form</h5>

                            <form class="row g-3" action="{{ route('seller.consumerupdate',[$consumer->id]) }}"  method="post"> @csrf
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{$consumer->first_name}}"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{$consumer->last_name}}"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{$consumer->phone}}"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required  value="{{$consumer->email}}">
                                    @error('email')
                                    <span class="text-danger">{{$errors->first('email')}}</span>
                                    @enderror
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
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
