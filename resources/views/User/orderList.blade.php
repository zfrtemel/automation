@extends('layouts._layouts')
@section('title','Ürün Listesi')
@section('customCss')
	<!-- DATA TABLE CSS -->
    <link href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>

@endsection

@section('content')
<!--app-content open-->
<div class="app-content">
    <div class="container">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <ol class="breadcrumb"><!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
            </ol><!-- End breadcrumb -->
            <div class="ml-auto">
                <div class="input-group">
                    <a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
                        <span><i class="fe fe-shopping-cart"></i>Buy Now</span>
                    </a>
                    <a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
                        <span><i class="fe fe-printer"></i>Print</span>
                    </a>
                    <a href="#" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
                        <span><i class="fe fe-download"></i>Download</span>
                    </a>
                </div>
            </div>
        </div>

	<!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Tables</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="wd-15p">Ürün İsmi</th>
                                    <th class="wd-15p">statusId</th>
                                    <th class="wd-20p">categoryId</th>
                                    <th class="wd-15p">faultId</th>
                                    <th class="wd-25p">İşlemler</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderList as $order )

                                @endforeach
                                <tr>
                                    <td>{{ $order->name }}</td>
                                    <td>@include('partial.status',['status'=>$order->statusId])</td>
                                    <td>@include('partial.category',['category'=>$order->statusId])</td>
                                    <td>@include('partial.fault',['fault'=>$order->statusId])</td>
                                    <td>
                                        <button type="button" class="btn btn-icon  btn-danger"><i class="fe fe-edit"></i></button>
                                        <button type="button" class="btn btn-icon  btn-warning"><i class="fe fe-trash"></i></button>
                                        <button type="button" class="btn btn-icon  btn-info"><i class="fe fe-plus"></i></button>


                                    </td>

                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- TABLE WRAPPER -->
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
    <!-- ROW-1 CLOSED -->

</div>
</div>
@endsection

@section('customJS')
<!-- DATA TABLE JS-->
<script src="../../assets/plugins/datatable/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatable/datatable.js"></script>
<script src="../../assets/plugins/datatable/datatable-2.js"></script>
<script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>
@endsection
