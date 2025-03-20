@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Consumer Plan Details</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Consumer Plan Details</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-3">
                                <strong>Name:</strong> {{$consumer->first_name}} {{$consumer->last_name}} <br>
                                <strong>Mobile No.:</strong> {{$consumer->phone}}
                            </div>

                            <div class="table-responsive">
                                <table id="Table" class="table table-striped table-bordered display">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Type</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($consumerplan as $plan)
                                       <tr>
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{$plan->plan_type}}</td>
                                           <td>{{$plan->plan_desc}}</td>
                                           <td>{{$plan->date}}</td>
                                           <td>{{$plan->status}}</td>
                                       </tr>
                                   @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>

                </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('page-js')
    <script>
    const dataTable = new simpleDatatables.DataTable("#Table", {
    searchable: true,
    fixedHeight: true,
    })
    </script>
@endsection