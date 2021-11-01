@extends('layouts._layouts')
@section('title','Ürün Listesi')
@section('customCss')

@endsection
@section('content')
   <!--app-content open-->
   <div class="app-content">
    <div class="container">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <ol class="breadcrumb">
                <!-- breadcrumb -->
                <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ürün Listesi</li>
            </ol><!-- End breadcrumb -->
        </div>

        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ürün Listesi</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                    <tr>
                                        <th class="wd-15p">Ürün İsmi</th>
                                        <th class="wd-15p">Durumu</th>
                                        <th class="wd-20p">Kategorisi</th>
                                        <th class="wd-15p">Arıza Türü</th>
                                        <th class="wd-25p">İşlemler</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderList as $order)

                                    <tr >

                                        <td>{{ $order->name }}</td>
                                        <td>@include('partial.details',['name'=>$order->status->statusName,'color'=>$order->status->colorName])</td>
                                        <td>@include('partial.details',['name'=>$order->category->name,'color'=>$order->category->colorName])</td>
                                        <td>@include('partial.details',['name'=>$order->fault->name,'color'=>$order->fault->colorName])</td>
                                        {{-- bu alanda partial'a gerek yok ama partialviewe veri gönderimini görmek için kullandım --}}
                                        <td>
                                            <a href="{{ route('AdminDelete',['id'=>$order->id]) }}" class="btn btn-icon btn-order-delete  btn-warning"><i class="fe fe-trash"></i></a>

                                            <a href="{{ route('details',['id'=>$order->id]) }}" class="btn btn-icon  btn-info"><i class="fe fe-copy"></i></a>
                                        </td>

                                    </tr>
                                    @endforeach

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

@endsection
