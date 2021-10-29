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

                            </div>
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

@endsection
