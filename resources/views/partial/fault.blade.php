@switch($fault)
    @case(1)
        <span class="tag tag-red">Ekran Kırık</span>
    @break

    @case(2)
        <span class="tag tag-yellow">Ses Gelmiyor</span>
    @break

    @case(3)
    <span class="tag tag-orange">Görüntü Yok</span>
    @break

    @case(4)
        <span class="tag tag-teal">Çalışmıyor</span>
    @break


@endswitch
