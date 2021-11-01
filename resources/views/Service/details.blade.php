@extends('layouts._layouts')

@section('title', 'title')
@section('customCss')

@endsection

@section('content')
    <br>
    <br>
    <!--app-content open-->
    <div class="app-content">
        <div class="container">
            <!-- ROW-1 OPEN -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <h3 class="card-title mb-0">{{ $orders->id }}</h3>
                                </div>
                                <div class="float-right">
                                    <h3 class="card-title">{{ $orders->created_at }}</h3>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="h3">Ürün Detayları</p>

                                </div>
                                <div class="text-right col-lg-6">
                                    <button type="button" data-toggle="modal" data-target="#exampleModal3"
                                        class="btn btn-success">İşlem Ekle <i class="fe fe-plus ml-2"></i></button>

                                </div>
                                @include('partial.islem',['order'=>$orders,'status'=>$status])
                            </div>


                            <br>

                            <div class="table-responsive push">
                                <table class="table table-bordered table-hover mb-0 text-nowrap">
                                    <tbody>
                                        <tr class=" ">
                                            <th class="text-center">#</th>
                                            <th>Personel Notu</th>
                                            <th class="text-center">İşlem Tarihi</th>
                                        </tr>

                                        @foreach ($details as $key => $item)


                                            <tr>
                                                <td class="text-center">{{ ++$key }}</td>
                                                <td>
                                                    <div class="text-center">{{ $item->processNote }}</div>
                                                </td>
                                                <td class="text-center">{{ $item->created_at }}</td>
                                            </tr>


                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div><!-- COL-END -->
            </div>
            <!-- ROW-1 CLOSED -->
        </div>
    </div>

@endsection


@section('customJS')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="/assets/js/sweetalert.js"></script>



    <script>
        $(document).ready(function() {

            $('.btn-islem').on('click', function(e) {
                var data = {
                    'orderId': $('#orderId').val(),
                    'statusId': $('#statusId').val(),
                    'processNote': $('#processNote').val()
                };
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/admin/islem/ekle",
                    contentType: "application/json; charset=utf-8",
                    data: JSON.stringify(data),
                    dataType: "JSON",
                    success: function(response) {
                        if (response == 1) {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'İşlem Başarılı Sayfa Yenileniyor...',
                                showConfirmButton: false,
                                timer: 1000,
                                willClose: () => {

                                    location.reload();
                                }
                            })
                        } else {
                            Swal.fire('hata', 'İşlem Sırasında Hata Oluştu<br>' + response,
                                'error');
                        }
                    }
                });

            })
        })
    </script>
@endsection
