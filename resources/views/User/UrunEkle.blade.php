@extends('layouts._layouts')

@section('title','Ürün Ekle')

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

                    <div class="form-group">
                        <label class="form-label">Ürünün Adı</label>
                        <input type="text" class="form-control" id="name" name="name example-text-input" placeholder="Ürün İsmi">
                    </div>
                	<div class="form-group">
                        <label class="form-label">Ürün Kategorisi</label>
                        <select name="categoryId" id="categoryId" class="form-control select2 custom-select">>
                            @foreach ($category as $cat )
                            @if ($loop->first)
                            <option value="1" selected>{{ $cat->name }}</option>
                            @else
                            <option value="{{ $cat->id }}" >{{ $cat->name }}</option>

                            @endif


                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Arıza Tipi</label>
                        <select name="faultId" id="faultId" class="form-control select2 custom-select">>
                            @foreach ($fault as $faults )
                                @if ($loop->first)
                                <option value="1" selected>{{ $faults->name }}</option>
                                @else
                                <option value="{{ $faults->id }}" >{{ $faults->name }}</option>

                                @endif


                            @endforeach
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label class="form-label">Mesajınız</label>
                        <textarea class="form-control" name="customerNote example-textarea-input" id="customerNote" rows="4" placeholder="Arızanın Detaylarını Giriniz"></textarea>
                    </div>

                    <div class="form-group">
                    <button type="submit" class="btn btn-block btn-success"><i class="fe fe-check mr-2"></i>Ürünü Ekle</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
