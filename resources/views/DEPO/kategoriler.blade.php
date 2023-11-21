@extends('layouts.depo')

@section('content')
    <p><a href="{{ route('kategoriDuzenle') }}">Yeni Kategori <i class="fa-solid fa-plus"></i></a></p>
    <div class="card-body">
        <h5 class="card-title">Kategoriler Listesi</h5>

        <!-- Default Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Adı</th>
                    <th scope="col">Fotoğraf</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategorilerListesi as $kategori)
                    <tr>
                        <th scope="row">{{ $kategori->id }}</th>
                        <td>{{ $kategori->name }}</td>
                        <td><img src="{{ $kategori->img }}" width="100" height="100"></td>
                        <td><a href="{{ route('kategoriDuzenle', ['id' => $kategori->id]) }}">Düzenle<i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <button onclick="confirmAndDelete('{{ $kategori->name }}', {{ $kategori->id }})"><i
                                    class="fa-solid fa-trash"></i>
                                <a href="{{ route('kategoriSil', ['id' => $kategori->id]) }}">
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
        function confirmAndDelete(kategoriAdi, kategoriId) {
            const onay = confirm(kategoriAdi + ' silmek istediğinizden emin misiniz?');
            if (onay) {
                // Silme işlemini gerçekleştirmek için, kategori silme URL'sine yönlendirme yapabiliriz
                // Laravel route linkine kategoriId parametresini eklemeliyiz
                window.location.href = '{{ route('kategoriSil') }}' + '/' + kategoriId;
            }
        }
    </script>
@endsection
