<div class="dropdown d-md-flex notifications">
    <a class="nav-link icon" data-toggle="dropdown">
        <i class="fe fe-bell"></i>
        <span class="nav-unread badge badge-success badge-pill">{{ $bildirim->count() }}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a href="#" class="dropdown-item text-center">Bildirim</a>
        <div class="dropdown-divider"></div>
        <div class="notifications-menu">
            @if ($type == 1)


                @foreach ($bildirim as $items)

                    <a class="dropdown-item d-flex pb-3 urun-bildirim" data-id="{{ $items->order->id }}"
                        href="{{ route('orderDetails', ['id' => $items->order->id]) }}">
                        <div class="fs-16 text-danger mr-3">
                            <i class="fe fe-alert-circle"></i>
                        </div>
                        <div class="">
                            <strong>{{ $items->order->name }} Adlı Ürün İle İlgili Bir Bildiriminiz Mevcut</strong>
                        </div>
                    </a>
                @endforeach
            @else
                @foreach ($bildirim as $items)

                    <a class="dropdown-item d-flex pb-3 urun-bildirim" data-id="{{ $items->id }}"
                        href="{{ route('details', ['id' => $items->id]) }}">
                        <div class="fs-16 text-danger mr-3">
                            <i class="fe fe-alert-circle"></i>
                        </div>
                        <div class="">
                            <strong>{{ $items->name }} Adlı Ürün İle İlgili Bir Bildiriminiz Mevcut</strong>
                        </div>
                    </a>
                @endforeach
            @endif

        </div>

    </div>
</div><!-- NOTIFICATIONS -->
