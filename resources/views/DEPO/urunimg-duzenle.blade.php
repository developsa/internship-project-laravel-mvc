@extends('layouts.depo')

@section('content')

    @if ($urunimg == null)
        <!-- urunimg boş geliyorsa urunimg oluşturmaya girsin doluysa düzenleme-->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ürün Fotoğraf Kayıtı</h5>

                <!-- Vertical Form -->
                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('urunimgKayit', ['id' => @$urunimg->id]) }}">
                    @csrf
                    <div class="col-12">
                        <label for="inputPhoto" class="form-label">Ürün Fotoğrafı</label>
                        <input type="file" class="form-control" name="img" id="inputNanme4"
                            value="{{ @$urunimg->img }}">
                    </div>
                    <div class="col-12">

                        <select name="urun_id">
                            <option value=""></option>
                            @foreach ($urunfotograflari as $urunfoto)
                                <option value="{{ @$urunfoto->id }}" @if ($urunfoto->id == @$urunimg->urun_id) selected @endif>
                                    {{ $urunfoto->name }} </option>
                            @endforeach
                        </select>
                        <label for="inputEmail4" class="form-label">Ürün Adı</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    @endif
    @if ($urunimg)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Ürün Fotoğrafı Düzenle</h5>

                <form enctype="multipart/form-data" class="row g-3" method="post"
                    action="{{ route('urunimgKayit', ['id' => @$urunimg->id]) }}">
                    @csrf
                    <div class="col-12">

                        <select name="urun_id">
                            @foreach ($urunfotograflari as $urunfoto)
                                <option value="{{ @$urunfoto->id }}" @if ($urunfoto->id == @$urunimg->urun_id) selected @endif>
                                    {{ $urunfoto->name }} </option>
                            @endforeach
                        </select>
                        <label for="inputEmail4" class="form-label">Ürün Adı</label>
                    </div>
                    <div class="col-12">
                        <label for="inputPhoto" class="form-label">Ürün Fotoğrafı</label>
                        <input type="file" class="form-control" name="img" id="inputNanme4"
                            value="{{ @$urunimg->img }}">
                        <img width="100px" height="100px" src="{{ $urunimg->img }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Kaydet</button>
                    </div>
                </form>

            </div>
        </div>
    @endif

@endsection
