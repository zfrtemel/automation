@extends('layouts._layouts')
@section('title', 'Ürün Listesi')
@section('customCss')
    <!-- DATA TABLE CSS -->
    <link href="/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

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
                                            <th class="wd-15p">statusId</th>
                                            <th class="wd-20p">categoryId</th>
                                            <th class="wd-15p">faultId</th>
                                            <th class="wd-25p">İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orderList as $order)

                                        <tr>

                                            <td>{{ $order->name }}</td>
                                            <td>@include('partial.details',['name'=>$order->status->statusName,'color'=>$order->status->colorName])</td>
                                            <td>@include('partial.details',['name'=>$order->category->name,'color'=>$order->category->colorName])</td>
                                            <td>@include('partial.details',['name'=>$order->fault->name,'color'=>$order->fault->colorName])</td>
                                            {{-- bu alanda partial'a gerek yok ama partialviewe veri gönderimini görmek için kullandım --}}
                                            <td>
                                                <a data-id="{{ $order->id }}"  class="btn btn-icon btn-order-delete  btn-warning"><i class="fe fe-trash"></i></a>

                                                <a href="{{ route('orderDetails',['id'=>$order->id]) }}" class="btn btn-icon  btn-info"><i class="fe fe-copy"></i></a>
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
    <!-- DATA TABLE JS-->
    <script src="../../assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/plugins/datatable/datatable.js"></script>
    <script src="../../assets/plugins/datatable/datatable-2.js"></script>
    <script src="../../assets/plugins/datatable/dataTables.responsive.min.js"></script>

<script src="/assets/js/sweetalert.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
   $(document).ready(function() {

        $('.btn-order-delete').on('click', function(e) {

            e.preventDefault();
                var data = {
                    'id':$(this).data("id")
                };

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/urun/deleted',
                    contentType: 'application/json;charset=utf-8',
                    data: JSON.stringify(data),
                    dataType: 'json',
                    success: function(result) {
                        if (result['durum'] == '1')
                        {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'İşlem Başarılı',
                                showConfirmButton: false,
                                timer: 1000,
                                willClose: () => {
                                    window.location.href = "{{ route('list') }}";
                                }
                            })
                        }
                        else
                        {
                            Swal.fire('Hata', result['durum'],'error')
                        }
                    }

                });
            });
        });
    </script>
@endsection
