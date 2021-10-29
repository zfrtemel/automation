@switch($status)
    @case(1)
        <span class="tag tag-red">Beklemede</span>
    @break

    @case(2)
        <span class="tag tag-yellow">Teslim Alındı</span>
    @break

    @case(3)
    <span class="tag tag-orange">Sırada</span>
    @break

    @case(4)
        <span class="tag tag-teal">İşlem Yapılıyor</span>
    @break

    @case(5)
        <span class="tag tag-cyan">Parça Bekleniyor</span>
    @break

    @default
    <span class="tag tag-green">İşlem Bitti</span>

@endswitch
