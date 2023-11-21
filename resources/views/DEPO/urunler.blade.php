@extends('layouts.depo')

@section('content')
    <p><a href="{{ route('urunDuzenle') }}">Yeni Ürün <i class="fa-solid fa-plus"></i></a></p>
    <div class="card-body">
        <h5 class="card-title">Ürünler Listesi</h5>

        <!-- Default Table -->
        <table class="table table-bordered table-striped" id="urunid">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Adı</th>
                    <th scope="col">Fiyat</th>
                    <th scope="col">Kısa Bilgi</th>
                    <th scope="col">Ürün Açıklaması</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Kategori Adı</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($urunlerListesi as $urun)
                    <tr>
                        <th scope="row">{{ $urun->id }}</th>
                        <td>{{ $urun->name }}</td>
                        <td>{{ $urun->fiyat }}</td>
                        <td>{{ $urun->kisa_bilgi }}</td>
                        <td>{{ $urun->urun_aciklama }}</td>
                        <td><img src="{{ $urun->img }}" width="100" height="100"></td>
                        <td>{{ $urun->stok }}</td>
                        @foreach ($kategorilerListesi as $kategori)
                            @if ($kategori->id == $urun->kategori_id)
                                <td>{{ $kategori->name }}</td>
                            @endif
                        @endforeach
                        @php
                            /*<select name="kategori_id">
                            @foreach ($kategorilerListesi as $kategori)
<option value="{{ $kategori->id }}" @if ($kategori->id == $urun->kategori_id) selected @endif>{{ $kategori->name }}</option>
@endforeach
                        </select>*/
                        @endphp

                        <td><a href="{{ route('urunDuzenle', ['id' => $urun->id]) }}">Düzenle<i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <button onclick="confirmAndDelete('{{ $urun->name }}', {{ $urun->id }})"><i
                                    class="fa-solid fa-trash"></i>
                                <a href="{{ route('urunSil', ['id' => $urun->id]) }}">
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>




    <script>
        function confirmAndDelete(urunAdi, urunId) {
            const onay = confirm(urunAdi + ' silmek istediğinizden emin misiniz?');
            if (onay) {
                // Silme işlemini gerçekleştirmek için, urun silme URL'sine yönlendirme yapabiliriz
                // Laravel route linkine urunId parametresini eklemeliyiz
                window.location.href = '{{ route('urunSil') }}' + '/' + urunId;
            }
        }
    </script>
@endsection
