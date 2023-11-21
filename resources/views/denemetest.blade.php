<ol>
    @foreach ($kategorilerListesi as $k)
        <li>{{ $k->name }}</li>
        <ul>
            @foreach ($k->urunler()->get() as $u)
                <li>{{ $u->name }}</li>
            @endforeach
        </ul>
    @endforeach
</ol>
