@extends('layouts._layouts')

@section('title', 'Ürün Ekle')
@section('customCss')
    <!--SWEET ALERT CSS-->
    <link href="/assets/css/sweetalert2.min.css" rel="stylesheet" />
@endsection
@section('content')

    <br>
    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ürün Ekle</div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('urunekle') }}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="form-label">Ürünün Adı</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Ürün İsmi">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Ürün Kategorisi</label>
                                <select name="categoryId" id="categoryId" class="form-control select2 custom-select">>
                                    @foreach ($category as $cat)
                                        @if ($loop->first)
                                            <option value="1" selected>{{ $cat->name }}</option>
                                        @else
                                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>

                                        @endif
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Arıza Tipi</label>
                                <select name="faultId" id="faultId" class="form-control select2 custom-select">>
                                    @foreach ($fault as $faults)
                                        @if ($loop->first)
                                            <option value="1" selected>{{ $faults->name }}</option>
                                        @else
                                            <option value="{{ $faults->id }}">{{ $faults->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-0">
                                <label class="form-label">Mesajınız</label>
                                <textarea class="form-control" name="customerNote" id="customerNote" rows="4"
                                    placeholder="Arızanın Detaylarını Giriniz"></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-form btn-success"><i
                                        class="fe fe-check mr-2"></i>Ürünü
                                    Ekle</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('customJS')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="/assets/js/sweetalert.js"></script>



    <script>
        $(document).ready(function() {

            $('.btn-form').on('click', function(e) {
                e.preventDefault();
                var data = {
                    'name': $('#name').val(),
                    'userId': $('#userId').val(),
                    'statusId': $('#statusId').val(),
                    'categoryId': $('#categoryId').val(),
                    'faultId': $('#faultId').val(),
                    'customerNote': $('#customerNote').val()
                };

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: 'POST',
                    url: '/urun/ekle/post',
                    contentType: 'application/json;charset=utf-8',
                    data: JSON.stringify(data),
                    dataType: 'json',
                    success: function(result) {
                        if (result['durum'] == '1') {
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'İşlem Başarılı Ürünün Detayına Yönlendiriliyorsunuz...',
                                showConfirmButton: false,
                                timer: 1000,
                                willClose: () => {
                                    var url = "{{route('orderDetails', '')}}"+"/"+result['donenId'];
                                    window.location.href = url;
                                }
                            })
                        } else {
                            Swal.fire(
                                'Hata',
                                'İşlem Sırasında Hatayla Karşılaşıldı',
                                'error'
                            )
                        }
                    }

                });
            });
        });
    </script>
@endsection
