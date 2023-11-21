@extends('layouts.depo')

@section('content')

    @if ($urun == null)
        < <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ürün Kayıt</h5>


                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('urunKayit', ['id' => @$urun->id]) }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Ürün Adı</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ @$urun->name }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Fiyatı</label>
                        <input type="text" class="form-control" name="fiyat" id="inputEmail4"
                            value="{{ @$urun->fiyat }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Kısa Bilgi</label>
                        <input type="text" class="form-control" name="kisa_bilgi" id="inputEmail4"
                            value="{{ @$urun->kisa_bilgi }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Açıklama</label>
                        <input type="text" class="form-control" name="urun_aciklama" id="inputEmail4"
                            value="{{ @$urun->urun_aciklama }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Stoğu</label>
                        <input type="text" class="form-control" name="stok" id="inputEmail4"
                            value="{{ @$urun->stok }}">
                    </div>
                    <div class="col-12">

                        <select name="kategori_id">
                            <option value=""></option>
                            @foreach ($kategorilerListesi as $kategori)
                                <option value="{{ @$kategori->id }}" @if ($kategori->id == @$urun->kategori_id) selected @endif>
                                    {{ $kategori->name }} </option>
                            @endforeach

                        </select>
                        <label for="inputEmail4" class="form-label">Kategori Adı</label>

                    </div>
                    <div class="col-12">
                        <label for="inputPhoto" class="form-label">Ürün Fotoğrafı</label>
                        <input type="file" class="form-control" name="img" id="inputEmail4"
                            value="{{ @$urun->img }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>

            </div>
            </div>
    @endif
    @if ($urun)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ürün Düzenle</h5>

                <!-- Vertical Form -->
                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('urunKayit', ['id' => @$urun->id]) }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputNanme4" class="form-label">Ürün Adı</label>
                        <input type="text" class="form-control" name="name" id="inputNanme4"
                            value="{{ @$urun->name }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Fiyatı</label>
                        <input type="text" class="form-control" name="fiyat" id="inputEmail4"
                            value="{{ @$urun->fiyat }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Kısa Bilgi</label>
                        <input type="text" class="form-control" name="kisa_bilgi" id="inputEmail4"
                            value="{{ @$urun->kisa_bilgi }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Açıklama</label>
                        <input type="text" class="form-control" name="urun_aciklama" id="inputEmail4"
                            value="{{ @$urun->urun_aciklama }}">
                    </div>
                    <div class="col-12">
                        <label for="inputEmail4" class="form-label">Ürün Stoğu</label>
                        <input type="text" class="form-control" name="stok" id="inputEmail4"
                            value="{{ @$urun->stok }}">
                    </div>
                    <div class="col-12">
                        <div class="col-12">
                            <select name="kategori_id">
                                <option value=""></option>
                                @foreach ($kategorilerListesi as $kategori)
                                    <option value="{{ @$kategori->id }}"
                                        @if ($kategori->id == @$urun->kategori_id) selected @endif> {{ $kategori->name }} </option>
                                @endforeach

                            </select>
                            <label for="inputEmail4" class="form-label">Kategori Adı</label>

                        </div>
                    </div>

                    <div class="col-12">
                        <label for="inputPhoto" class="form-label">Ürün Fotoğrafı</label>
                        <input type="file" class="form-control" name="img" id="inputEmail4">
                        <img width="100px" height="100px" src="{{ $urun->img }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>

            </div>
        </div>
    @endif



@endsection
