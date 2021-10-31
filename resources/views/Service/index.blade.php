@extends('layouts._layouts')
@section('title','Ana Sayfa')
@section('customCss')

@endsection
@section('content')
<br>
<br>
<div class="app-content">
    <div class="container">

	<!-- ROW -->
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-primary img-card box-primary-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">23,536</h2>
                            <p class="text-white mb-0">Total Requests </p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-send-o text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">45,789</h2>
                            <p class="text-white mb-0">Total Revenue</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-bar-chart text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">89,786</h2>
                            <p class="text-white mb-0">Total Profit</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-dollar text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger img-card box-danger-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">43,336</h2>
                            <p class="text-white mb-0">Monthly Sales</p>
                        </div>
                        <div class="ml-auto"> <i class="fa fa-cart-plus text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
    </div>
    </div>
</div>
@endsection
@section('customJS')

@endsection
