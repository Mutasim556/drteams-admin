@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('content')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Xacton</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="card bg-primary border-primary">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-light float-right">Daily</span>
                            <h5 class="card-title mb-0 text-white">Cost per Unit</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0 text-white">
                                    $17.21
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-white-50">12.5% <i class="mdi mdi-arrow-up"></i></span>
                            </div>
                        </div>

                        <div class="progress badge-soft-light shadow-sm" style="height: 5px;">
                            <div class="progress-bar bg-light" role="progressbar" style="width: 38%;"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card bg-success border-success">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-light float-right">Per Week</span>
                            <h5 class="card-title mb-0 text-white">Market Revenue</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center text-white mb-0">
                                    $1875.54
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-white-50">18.71% <i class="mdi mdi-arrow-down"></i></span>
                            </div>
                        </div>

                        <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-light" role="progressbar" style="width: 38%;"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card bg-warning border-warning">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-light float-right">Per Month</span>
                            <h5 class="card-title mb-0 text-white">Expenses</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center text-white mb-0">
                                    $784.62
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-white-50">57% <i class="mdi mdi-arrow-up"></i></span>
                            </div>
                        </div>

                        <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-light" role="progressbar" style="width: 68%;"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="card bg-info border-info">
                    <div class="card-body">
                        <div class="mb-4">
                            <span class="badge badge-soft-light float-right">All Time</span>
                            <h5 class="card-title mb-0 text-white">Daily Visits</h5>
                        </div>
                        <div class="row d-flex align-items-center mb-4">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center text-white mb-0">
                                    1,15,187
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span class="text-white-50">17.8% <i class="mdi mdi-arrow-down"></i></span>
                            </div>
                        </div>

                        <div class="progress badge-soft-light shadow-sm" style="height: 7px;">
                            <div class="progress-bar bg-light" role="progressbar" style="width: 57%;"></div>
                        </div>
                    </div>
                </div>
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        

    </div> <!-- container-fluid -->
</div>

@endsection

@section('js')
    
@endsection



