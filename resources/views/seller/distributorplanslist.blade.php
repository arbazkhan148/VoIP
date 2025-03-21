@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Distributor Pending Plans</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Distributor Pending Plan</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
{{--                            <div class="p-3">--}}
{{--                                <strong>Name:</strong> {{$distributor->first_name}} {{$distributor->last_name}} <br>--}}
{{--                                <strong>Mobile No.:</strong> {{$distributor->phone}}--}}
{{--                            </div>--}}

                            <div class="table-responsive">
                                <table id="Table" class="table table-striped table-bordered display">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Type</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($distributorplan as $plan)
                                       <tr>
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{$plan->name}}</td>
                                           <td>{{$plan->phone}}</td>
                                           <td>{{$plan->plan_type}}</td>
                                           <td>{{$plan->plan_desc}}</td>
                                           <td>{{$plan->date}}</td>
                                           <td><span class="">{{$plan->status}}</span></td>
                                           <td>
                                               @if($plan->status=="Pending")
                                                   <form action="{{route('seller.distributorplanapprove',[$plan->id])}}" method="post">@csrf
                                                       <button class="btn btn-success btn-sm">Approve</button>
                                                   </form>
                                              @endif
                                           </td>
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
    @if (session('success'))
        <script>
            alert('{{ session('success') }}');
        </script>
    @endif
@endsection