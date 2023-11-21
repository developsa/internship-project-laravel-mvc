@extends('layouts.depo')

@section('content')
    <!-- If category is null,new create category -->
    @if ($kategori == null)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kategori Kayıt</h5>


                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('kategoriKayit', ['id' => @$kategori->id]) }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Kategori Adı</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ @$kategori->name }}">
                    </div>
                    <div class="col-12">
                        <label for="inputPhoto" class="form-label">Kategori Fotoğrafı</label>
                        <input type="file" class="form-control" name="img"value="{{ @$kategori->img }}">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>

            </div>
        </div>
    @endif
    <!-- If there is a category,edit category -->
    @if ($kategori)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kategori Düzenle</h5>


                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('kategoriKayit', ['id' => @$kategori->id]) }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Kategori Adı</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ @$kategori->name }}">
                    </div>
                    <div class="col-12">

                        <label for="inputPhoto" class="form-label">Kategori Fotoğrafı</label>
                        <input type="file" class="form-control" name="img">

                        <img width="100px" height="100px" src="{{ $kategori->img }}">

                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>

            </div>
        </div>
    @endif
@endsection
