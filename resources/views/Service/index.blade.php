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
                            <h2 class="mb-0 number-font">{{ $orderList }}</h2>
                            <p class="text-white mb-0">Son 30 Günde Gelen Ürün Sayısı</p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-shopping-bag text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->


        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-success img-card box-success-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">
@if (isset($finishOrders)!=0)
{{ $finishOrders }}
@else
0
@endif
                                </h2>
                            <p class="text-white mb-0">Son 30 Günde Tamamlananlar</p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-grid text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->



        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-info img-card box-info-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">
                                @if (isset($userOrder)!=0)
{{ $userOrder }}
@else
0
@endif

                            </h2>
                            <p class="text-white mb-0">Son 7 Günde Tamamladıklarınız</p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-users text-white fs-30 mr-2 mt-2"></i> </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->


        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
            <div class="card bg-danger img-card box-danger-shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">
                                @if (isset($weekOrder)!=0)
                                {{ $weekOrder }}
                                @else
                                0
                                @endif

                            </h2>
                            <p class="text-white mb-0">Son 7 Günde Gelen Ürün Sayısı</p>
                        </div>
                        <div class="ml-auto"> <i class="fe fe-inbox text-white fs-30 mr-2 mt-2"></i> </div>
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
