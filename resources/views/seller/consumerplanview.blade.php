@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Plan View</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Plan View</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Distributor Registration Form</h5>

                            <!-- No Labels Form -->
                            <form class="row g-3" action="{{ route('seller.consumerplanapprove',[$consumerplan->id]) }}" method="post"> @csrf
                                <div class="col-md-12">
                                    <strong>Name:</strong> {{$consumer->first_name}} {{$consumer->last_name}} <br>
                                    <strong>Mobile No.:</strong> {{$consumer->phone}}<br>
                                    <strong>Email.:</strong> {{$consumer->email}}
                                </div>

                                <div class="col-md-12">
                                    <strong>Plan Type :</strong> {{$consumerplan->plan_type}}<br>
                                    <strong>Plan Desc.:</strong> {{$consumerplan->plan_desc}}<br>
                                    <strong>Plan Status:</strong> {{$consumerplan->status}}
                                </div>
                                @if($consumerplan->status=="Pending")
                                <div class="col-md-6">
                                    <label for="">Update Status</label>
                                   <select class="form-control form-select" required id="status" name="status">
                                       <option value=""> --Select-- </option>
                                       <option value="Active">Active</option>
                                       <option value="Reject">Reject</option>
                                   </select>
                                </div>
                                <div class="col-md-6 d-none" id="distrbtrblock">
                                    <label for="">Assign Distributor</label>
                                    <select class="form-control form-select d-none" required id="distrbtr" name="assigned_distributor">
                                        <option value=""> --Select-- </option>
                                        @foreach($distributors as $distributor)
                                            <option value="{{$distributor->id}}">{{$distributor->first_name.' '}}{{$distributor->last_name}}({{$distributor->phone}})</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                @endif
                                @if($consumerplan->status=="Active")
                                    <div class="col-md-12">
                                        <strong>Assigned Distributor :</strong> {{$consumerplan->plan_type}}<br>
                                    </div>
                                @endif
                            </form><!-- End No Labels Form -->

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <script>
        const status = document.getElementById('status');
        const distrbtrblock = document.getElementById('distrbtrblock');
        const distrbtr = document.getElementById('distrbtr');
        status.addEventListener('change', function() {
            const selectedType = this.value;
            console.log(selectedType);
            if(selectedType=="Active"){
                distrbtrblock.classList.remove('d-none');
                distrbtr.classList.remove('d-none');
                distrbtr.required = true;
            }else{
                distrbtrblock.classList.add('d-none');
                distrbtr.classList.add('d-none');
                distrbtr.required = false;
                distrbtr.value = '';
            }
        });
    </script>
@endsection
@section('page-js')
    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
@endsection
