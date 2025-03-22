@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Consumer List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Consumer List</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="Table" class="table table-striped table-bordered display">
                                    <thead>
                                    <tr>
                                        <th>Sl No.</th>
                                        <th>Name</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Plan Details</th>
{{--                                        <th>Status</th>--}}
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($consumers as $consumer)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$consumer->first_name}} {{$consumer->last_name}}</td>
                                            <td>{{$consumer->phone}}</td>
                                            <td>{{$consumer->email}}</td>
                                            <td><a href="{{route('seller.consumerplandtl',[$consumer->id])}}">View</a></td>
{{--                                            <td>{{$consumer->status}}</td>--}}
                                            <td>
                                                <a href="#" class="btn btn-outline-info btn-sm">Edit</a>
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
@endsection
