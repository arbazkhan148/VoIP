@extends('layouts.distributorlayout')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Dashboard</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <!-- Profile Details and Edit -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Overview</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                        Profile</button>
                                </li>
                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Change Password</button>
                                </li>
                            </ul>

                            <div class="tab-content pt-2">
                                <!-- Overview Tab -->
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">First Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->first_name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Last Name</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->last_name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->phone }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>

                                </div>

                                <!-- Edit Profile Tab -->
                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif

                                    <form action="{{ url('distributor/profile/update') }}" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <div class="row mb-3">
                                            <label for="firstName" class="col-md-4 col-lg-3 col-form-label">First
                                                Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="first_name" type="text" class="form-control" id="firstName"
                                                    value="{{ old('first_name', $user->first_name) }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="lastName" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="last_name" type="text" class="form-control" id="lastName"
                                                    value="{{ old('last_name', $user->last_name) }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="phone"
                                                    value="{{ old('phone', $user->phone) }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="email"
                                                    value="{{ old('email', $user->email) }}">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>

                                <!-- Change Password Tab (keep as is or modify as per your logic) -->

                            </div><!-- End tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
