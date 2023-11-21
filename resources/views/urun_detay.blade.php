@extends('layouts.urun_detaysablon')
@section('content')
    <h2 class="mb-3">{{ $urundetay->name }}</h2>
    <p>{{ $urundetay->urun_aciklama }}</p>
    <p>
        <img src="{{ $urundetay->img }}" class="img-fluid">
    </p>
    </div>
@endsection
