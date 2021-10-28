@extends('layouts._layouts')

@section('title','Ana Sayfa')

@section('content')

<div class="container">

    <!-- PAGE-HEADER -->
    <div class="page-header">


    </div>
    <!-- PAGE-HEADER END -->

    <!-- ROW-1 OPEN -->
    <div class="row">
@if (Auth::user()->roleId==3)

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hoşgeldiniz {{ Auth::user()->name }} </div>

                <div class="card-body">
                    <p class="lead m-0">Sistemimizde Arızalı Ürünlerinizi Ekleyebilir Veya Eklediğiniz Ürünlerinizin Son Durumlarını Görebilirsiniz </p>

                </div>
            </div>
        </div>
    </div>
</div>
@else
{{-- bu alana charts gibi şeyler eklenecek son zamanlarda biten ürünler veya yeni gelenler gibi --}}

@endif
    </div>
</div>
















@endsection
