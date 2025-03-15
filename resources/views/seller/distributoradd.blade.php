@extends('layouts.sellerlayout')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Distributor Add</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Distributor Add</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <form class="form-horizontal m-t-30">
                                   <div class="row">
                                       <div class="form-group col-6">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" value="" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="example-email">Email <span class="text-danger">*</span></label>
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group col-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                   </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                        </div>
                    </div>

                </div>
                </div>

            </div>
        </section>

    </main><!-- End #main -->
@endsection
@section('page-js')
@endsection