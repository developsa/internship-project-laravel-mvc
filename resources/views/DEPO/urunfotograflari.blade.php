@extends('layouts.depo')

@section('content')
    <p><a href="{{ route('urunimgDuzenle') }}">Yeni Ürün Fotoğrafı <i class="fa-solid fa-plus"></i></a></p>
    <div class="card-body">
        <h5 class="card-title">Ürün Fotoğrafları</h5>

        <!-- Default Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col">Ürün Adı</th>

                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($urunfotograflari as $urunimg)
                    <tr>
                        <th scope="row">{{ $urunimg->id }}</th>
                        <td><img src="{{ $urunimg->img }}" width="100" height="100"></td>
                        @foreach ($urunler as $urun)
                            @if ($urun->id == $urunimg->urun_id)
                                <td>{{ $urun->name }}</td>
                            @endif
                        @endforeach
                        <td><a href="{{ route('urunimgDuzenle', ['id' => $urunimg->id]) }}">Düzenle<i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <button onclick="confirmAndDelete('{{ $urunimg->img }}', {{ $urunimg->id }})"><i
                                    class="fa-solid fa-trash"></i>
                                <a href="{{ route('urunimgSil', ['id' => $urunimg->id]) }}">
                            </button>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
    </div>

    </table>
    <script>
        function confirmAndDelete(urunFoto, urunimgid) {
            const onay = confirm(urunFoto + ' silmek istediğinizden emin misiniz?');
            if (onay) {
                // Silme işlemini gerçekleştirmek için, kategori silme URL'sine yönlendirme yapabiliriz
                // Laravel route linkine kategoriId parametresini eklemeliyiz
                window.location.href = '{{ route('urunimgSil') }}' + '/' + urunimgid;
            }
        }
    </script>
@endsection
