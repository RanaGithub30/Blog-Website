@extends('layout.main')
@section('content')
    @include('layout.sidebar')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('/admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-8">
                    <div class="row">

                        <!-- Sales Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card sales-card">       
                                <div class="card-body">
                                    <h5 class="card-title">Total Users</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <h6>{{ $res['totalUsers'] }}</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Sales Card -->

                        <!-- Revenue Card -->
                        <div class="col-xxl-4 col-md-6">
                            <div class="card info-card revenue-card">

                                <div class="card-body">
                                    <h5 class="card-title">Total Post's</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <h6>0</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- End Revenue Card -->

                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Total Comments</span></h5>

                                    <div class="d-flex align-items-center">
                                        <div class="ps-3">
                                            <h6>0</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->

                <!-- Right side columns -->
                <div class="col-lg-4">

                </div><!-- End Right side columns -->

            </div>
        </section>

    </main>
@endsection